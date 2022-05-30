@extends('layouts.app')
@section('title', 'Shinta | Dashboard')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Form Upload</strong> Image
                                </div>
                                <div class="card-body card-block">
                                    <form action="{{ route('upImage.createGambar')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="nf-email" class=" form-control-label">Desc</label>
                                            <input type="text" id="nama" name="nama" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="nf-email" class=" form-control-label">Gambar</label>
                                            <input type="file" name="gambar" id="gambar" class="form-control">
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-success btn-sm">
                                                <i class="fa fa-dot-circle-o">Save</i> 
                                            </button>
                                        </div>
                                    </form>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                                
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