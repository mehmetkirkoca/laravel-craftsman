<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use {{model_path}};

class {{name}} extends Controller
{
    public function index()
    {
        $data = {{model}}::all();
        return view('{{tablename}}.index', compact("data"));
    }

    public function create()
    {
        return view('{{tablename}}.detail');
    }

    public function store(Request $request)
    {
        $data = {{model}}::create($request->all());
        return view('{{tablename}}.show', compact("data"));
    }

    public function show($id)
    {
        $data = {{model}}::findOrFail($id);
        return view('{{tablename}}.detail', compact("data"));
    }

    public function edit($id)
    {
        $data = {{model}}::findOrFail($id);
        return view('{{tablename}}.detail', compact($data));
    }

    public function update(Request $request, $id)
    {
        $data = {{model}}::find($id)->update($request->all());
        return view('{{tablename}}.detail', compact("data"));
    }

    public function destroy($id)
    {
        $row = {{model}}::findOrFail($id);
        $row->delete();
        $data = {{model}}::all();
        return view('{{tablename}}.index', compact("data"));
    }
}
