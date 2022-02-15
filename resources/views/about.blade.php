@extends('layouts.main')

@section('container')

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>
</html>


    <h1>Halaman About</h1>
    <h3> {{$nama}} </h3>
    <p> {{$email}} </p>
    <img src="images/<?=  $gambar; ?>" alt="<?=  $nama; ?>" width="200px">
@endsection