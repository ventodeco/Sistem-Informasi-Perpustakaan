<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function index()
    {
        return view('admin.author.index', ['title'=>'Data Penulis']);
    }

    public function create()
    {
        return view('admin.author.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3'
        ]);

        Author::create($request->only('name'));

        return redirect()->route('admin.author.index')->with('success', 'Data Penulis Berhasil Ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit(Author $author)
    {
        return view('admin.author.edit', [
            'author' => $author, 'title'=> 'Edit Penulis'
        ]);
    }

    public function update(Request $request, Author $author)
    {
        $this->validate($request, [
            'name' => 'required|min:3'
        ]);

        $author->update($request->only('name'));

        return redirect()->route('admin.author.index')->with('info', 'Data Penulis Berhasil Diupdate');
    }

    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('admin.author.index')->with('danger', 'Data Penulis Berhasil Dihapus');
    }

}
