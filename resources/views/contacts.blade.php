@extends('layouts.main')

@section('container')
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>
</html>

<div class="title-top mb-3">
    <h2 class="fw-bold">Contact Us</h2>
</div>
<form method="post" action="{{route('contacts.store')}}">
{{csrf_field()}}
  <div class="mb-3">
    <input type="text" class="form-control" id="inputname" placeholder="Nama" name="nama">
    <label for="inputnama"></label>
  </div>

  <div class="mb-3">
  <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email">
  <label for="inputemail"></label>
  </div>

  <div class="mb-3">
  <textarea class="form-control" id="floatingteaxtarea2" style="height: 100px" placeholder="Pesan" name="pesan"></textarea>
  <label for="floatingTextarea2"></label>
  </div>

  <button type="submit" class="btn btn-primary">Kirim</button>
</form>

@endsection