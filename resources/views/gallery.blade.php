@extends('layouts.main')

@section('container')
    <html>
        <head>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        </head>
        
            <div class="boxgallery1"></div>
            <div class="boxgallery2"></div>
            <img class="cactus" src="http://localhost:8000/images/cactus.jpg">
        <div><h3 class="paga1">
        Sharing foto sebagai bentuk <br/>
        dokumentasi perjalanan hidupmu!
        </h3>
        <h7 class="paga2">
        Hidupmu adalah pilihan,<br/>
        menciptakan lingkungan yang <br/>
        bagus perlu adanya lingkungan  <br/>
        yang mendukung.
        </h7>
    </div>

        <button class="butt1">Me</button>
        <button class="butt2">Keluarga</button>
        <button class="butt3">Teman</button>
        <button class="butt4">Pekerjaan</button>

        <img class="bg2" src="http://localhost:8000/images/bg2.png">
    </html>
@endsection
