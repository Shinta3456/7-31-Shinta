@extends('layouts.app')
@section('title', 'Shinta | Dashboard')
@section('content')
<head>
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Data Gambar</h2>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="card-tools">
                                    <a href="{{route ('upImage.createGambar')}}" class="btn btn-succes">Tambah Data <i class="fas fa-plus-square"></i></a>
                                </div>
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                {{-- <th>Desc</th> --}}
                                                <th class="ml-n15">Gambar</th>
                                                <th class="ml-n12">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($dataGambar as $index => $datagambar)
                                        <tr>
                                        <td>{{ $index + 1 }}</td>
                                        {{-- <td>{{ $datagambar->desc}}</td> --}}
                                        {{-- <td>{{ $datagambar->gambar}}</td> --}}
                                        <td><img src="{{asset('img/'.$datagambar->gambar )}}" height="40%" width="50%"></td>
                                        <td>
                                            <a href="{{route('upImage.edit', $datagambar->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            |
                                            <a href="{{route('upImage.destroy', $datagambar->id)}}"><i class="fas fa-edit"></i></a>
                                        </td>
                                        </tr>
                                        @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection