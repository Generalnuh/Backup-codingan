<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Jabatan;

class PegawaiController extends Controller
{
    
    public function index()
    {
       $pegawai = Pegawai::with('jabatan')->get();
       return view('pegawai/index', ['pegawai'=>$pegawai]);

    }

    public function create()
    {
       $jabatan = Jabatan::all();
       return view('pegawai/create', ['jabatan'=>$jabatan]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'jabatan' => 'required',
            'keterangan' => 'required',
            'foto' => 'nullable|image|mimes:png,jpg|max:1028',
        ]);

        if($request->hasfile('foto'))
        {
            $file = $request->file('foto');
            $namafile=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $namafile);
        }

        $pegawai = new Pegawai;
        $pegawai->nama_pegawai = $request->nama;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->tgl_lahir = date('Y-m-d', strtotime($request->tgl_lahir));
        $pegawai->id_jabatan = $request->jabatan;
        $pegawai->keterangan = $request->keterangan;
        $pegawai->foto = $namafile;
        $pegawai->save();

        return redirect()
            ->route('pegawai.index')         
            ->with('success','Data berhasil ditambahkan');
    }

    public function edit($id)
    {
       $pegawai = Pegawai::find($id);
       $jabatan = Jabatan::all();
       $check_l = ($pegawai->jenis_kelamin == "L") ? " checked" : "";
       $check_p = ($pegawai->jenis_kelamin == "P") ? " checked" : "";
       return view('pegawai/edit', [
           'pegawai'=>$pegawai, 
           'jabatan'=>$jabatan, 
           'check_l'=>$check_l, 
           'check_p'=>$check_p
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'jabatan' => 'required',
            'keterangan' => 'required',            
            'foto' => 'nullable|image|mimes:png,jpg|max:1028',
        ]);

        $pegawai = Pegawai::find($id);

        
        if($request->hasfile('foto'))
        {         
            if(file_exists(public_path().'/images/'.$pegawai->foto))   
               unlink(public_path().'/images/'.$pegawai->foto);
            $file = $request->file('foto');
            $namafile=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $namafile);

            $pegawai->foto = $namafile;
        }

        $pegawai->nama_pegawai = $request->nama;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->tgl_lahir = date('Y-m-d', strtotime($request->tgl_lahir));
        $pegawai->id_jabatan = $request->jabatan;
        $pegawai->keterangan = $request->keterangan;
        $pegawai->update();

        return redirect()
            ->route('pegawai.index')         
            ->with('success','Data berhasil diedit');
    }

    public function destroy($id)
    {
        $pegawai = Pegawai::find($id);
        if(file_exists(public_path().'/images/'.$pegawai->foto))
          unlink(public_path().'/images/'.$pegawai->foto);
        $pegawai->delete();

        return redirect()
            ->route('pegawai.index')         
            ->with('success','Data berhasil dihapus');
    }
}
