<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    
    public function index(): View
    {
        $posts = Post::latest()->paginate(5);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create(): View
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validasi form
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10',
        ]);

        // upload gambar
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        // create post
        Post::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // kembali ke index
        return redirect()->route('posts.index')->with(['success' => 'Data berhasil disimpan!']);
        
    }

    /**
     * Display the specified resource.
     * @param mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        // get post dengan id
        $post = Post::findOrFail($id);

        // render view with post
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post dengan ID
        $post = Post::findOrFail($id);

        // render view with post
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     * @param mixed $id
     * @param mixed $request
     * @return RedirectResponse
     */
    public function update(Request $request, string $id): RedirectResponse 
    {
        // validasi form
        $this->validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10',
        ]);

        // get post dengan ID
        $post = Post::findOrFail($id);

        // check gambar yang diupload
        if($request->hasFile('image')){

            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            ]);

            // upload gambar baru
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            // delete gambar lama
            Storage::delete('public/posts/' . $post->image);

            // update post dengan gambar baru
            $post->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'content' => $request->content,
            ]);

        } else {
            // update post tanpa gambar
            $post->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);
        }

        //kembali ke index
        return redirect()->route('posts.index')->with(['success' => 'Data berhasil diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     * @param mixed $post
     * @return void
     */
    public function destroy(string $id): RedirectResponse
    {
        //get post dengan ID
        $post = Post::findOrFail($id);

        //delete gambar
        Storage::delete('public/posts/' . $post->image);

        // delete post
        $post->delete();

        //kembali ke index
        return redirect()->route('posts.index')->with(['success' => 'Data berhasil dihapus!']);

    }
}
