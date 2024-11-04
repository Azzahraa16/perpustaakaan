@extends('main')
@section('title', 'Perpustakaan')
@section('content')
<div class="container-fluid">
<div class="jumbotron">
@if(session('msg'))
<div class="alert alert-success alert-dismissible fade show mt-2"
            role="alert">
{{session('msg')}}
<button type="button" class="close" data-dismiss="alert"
                aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif
<h1 class="display-6">Daftar Buku</h1>
<hr class="my-4">
	<form class="navbar-search mb-3" action="/buku/cari" method="GET">
        <div class="input-group">
		<input type="text" name="cari" placeholder="Cari Judul atau Penulis .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
        </div>
	</form>
<a href="/buku/create" class="btn btn-primary mb-1">Tambah Buku</a>
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">No</th>
<th scope="col">Judul Buku</th>
<th scope="col">Penulis Buku</th>
<th scope="col">Tahun Penerbit</th>
<th scope="col">Ringkasan Buku</th>
<th scope="col">Aksi</th>
<th></th>
</tr>
</thead>
<tbody>
@foreach ($buku as $buku)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $buku->judul_buku }}</td>
<td>{{ $buku->penulis }}</td>
<td>{{ $buku->penerbit }}</td>
<td>{{ $buku->ringkasan }}</td>
<td>
<a href="/buku/edit/{{ $buku->id_buku }}"class="badge badge-primary">Edit</a>
<a href="/buku/delete/{{ $buku->id_buku }}"class="badge badge-danger">Hapus</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection
