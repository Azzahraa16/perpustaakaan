@extends('main')
@section('title', 'Perpustakaan')
@section('content')

<div class="container-fluid">
<div class="jumbotron">
<h1 class="display-6">Edit Data Buku</h1>
<hr class="my-4">
@foreach($buku as $buku)
<form action="/buku/update" method="POST" enctype="multipart/form-data">
@csrf
@method('put')
    <div class="form-group">
<label for="judul_buku">Judul Buku</label>
<input type="text" class="form-control" name="judul_buku" value="{{ $buku->judul_buku }}" required="required"
                    placeholder="Judul Buku" >
    </div>
<div class="form-group">
<label for="penulis">penulis Buku</label>
<input type="text" class="form-control" name="penulis" value="{{ $buku->penulis }}" required="required"
                    placeholder="penulis Buku" >
</div>
<div class="form-group">
    <label for="penerbit">penerbit Buku</label>
    <input type="text" class="form-control" name="penerbit" value="{{ $buku->penerbit }}"
                        placeholder="penerbit Buku" required="required">
    </div>
    <div class="form-group">
        <label for="ringkasan">ringkasan Buku</label>
        <input type="text" class="form-control" name="ringkasan" value="{{ $buku->ringkasan }}"
                            placeholder="ringkasan Buku" required="required">
        </div>
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endforeach
</div>
</div>
@endsection
