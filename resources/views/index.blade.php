@extends('main')
@section('title', 'Perpustakaan')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Perpustakaan</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.css">
        <script type="text/javascript" src="{{ asset('assets') }}/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="{{ asset('assets') }}/js/bootstrap.js"></script>

    </head>
<div class="section">


<div class="container-fluid">
<div class="jumbotron">
    <h1 class="display-4">Selamat Datang!</h1>
<p class="lead">"Perpustakaan menyimpan energi yang memicu imajinasi. Perpustakaan membuka jendela ke dunia dan menginspirasi kita untuk mengeksplorasi dan mencapai, dan berkontribusi untuk meningkatkan kualitas hidup kita." - Sidney Sheldon</p>
<hr class="my-4">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img  src="{{ asset('asset/banner.jpeg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
        </div>
      </div>

</div>
</div>
</div>
@endsection

