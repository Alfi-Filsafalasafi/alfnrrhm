<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use File;

class bukuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin/tambah');
    }

    public function store(Request $request){
        $request->validate([
            'berkas' => 'required|file|image|max:2000',
        ]);
        $buku = new buku;
        $buku->name = $request->nama;
        $extFile = $request->berkas->getClientOriginalExtension();
        $namaFile =  'produk'.time().".".$extFile;
        $buku->gambar = $namaFile;
        $path = $request->berkas->move('img', $namaFile);
        $buku->save();
        return redirect()->route('home')->with('sukses','Company has been created successfully.');
    }

    public function edit(buku $buku) {
        return view('admin.edit',['buku' => $buku]);
    }

    public function update(Request $request, buku $buku){
        

        if($request->berkas == ""){
            $buku = buku::find($buku->id);
            $buku->name = $request->nama;
            $buku->save();

        }else{
            $request->validate([
                'berkas' => 'required|file|image|max:2000',
            ]);
            $buku = buku::find($buku->id);
    	    File::delete('img/'.$buku->gambar);
            $buku->name = $request->nama;

            $extFile = $request->berkas->getClientOriginalExtension();
            $namaFile =  'produk'.time().".".$extFile;
            $buku->gambar = $namaFile;
            $path = $request->berkas->move('img', $namaFile);
            
            $buku->save();
        }
        
        return redirect()->route('home')->with('sukses','Company has been created successfully.');

    }

    public function delete($id){
        $buku = buku::where('id',$id)->first();
	    File::delete('img/'.$buku->gambar);
        buku::where('id', $id)->delete();
        return redirect()->route('home')->with('sukses','Company has been created successfully.');

    }
}
