<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;
class BukuController extends Controller
{
     public function index(Request $request)
     {
         if($request->has('search')){
             $buku = Buku::where('judul_buku','like','%'.$request->search.'%')->paginate(6);
         }
         else{
             $buku = Buku::paginate(6);
         }
         $buku = Buku::get();
    return view('buku.index',compact('buku'));
     }

public function create()
{
//$kategori = Kategori::all();
$buku = Buku::all();
return view('buku.create', ['buku' => $buku]);
}

     public function store (Request $request)
     {
        DB::table('table_buku')->insert([
            'judul_buku' => $request->judul_buku,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'ringkasan' => $request->ringkasan
        ]);
          return redirect('/buku');
     }

public function edit($id)
{
    $buku = DB::table('table_buku')->where('id_buku',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('buku.edit',['buku' => $buku]);
}

public function update(Request $request)
{
    DB::table('table_buku')->where('id_buku',$request->id)->update([
        'judul_buku' => $request->judul_buku,
        'penulis' => $request->penulis,
        'penerbit' => $request->penerbit,
        'ringkasan' => $request->ringkasan
	]);
	// alihkan halaman ke halaman pegawai
	return redirect()->route('buku');

}
public function delete($id)
{
    DB::table('table_buku')->where('id_buku',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/buku');
}
public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$buku = DB::table('table_buku')
		->where('judul_buku','like',"%".$cari."%")
		->orwhere('penulis','like',"%".$cari."%")
		->paginate();

    		// mengirim data buku ke view index
		return view('buku.index',['buku' => $buku]);
	}
}
