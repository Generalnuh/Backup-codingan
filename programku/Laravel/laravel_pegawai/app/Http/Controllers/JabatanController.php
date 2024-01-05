<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function index()
    {
       $jabatan = Jabatan::all();
       return view('jabatan/index', ['jabatan'=>$jabatan]);

    }

    public function create()
    {
        return view('jabatan/create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|max:255'
        ]);

        $jabatan = new Jabatan;
        $jabatan->nama_jabatan = $request->nama;
        $jabatan->save();

        return redirect()
            ->route('jabatan.index')
            ->with('success','Data berhasil ditambahkan');   
    }

    public function edit($id)
    {
       $jabatan = Jabatan::find($id);
       return view('jabatan/edit', ['jabatan'=>$jabatan]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required|max:255'
        ]);

        $jabatan = Jabatan::find($id);
        $jabatan->nama_jabatan = $request->nama;
        $jabatan->update();

        return redirect()
            ->route('jabatan.index')         
            ->with('success','Data berhasil diedit'); 
    }

    public function destroy($id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->delete();

        return redirect()
            ->route('jabatan.index')         
            ->with('success','Data berhasil dihapus'); 
    }

}
