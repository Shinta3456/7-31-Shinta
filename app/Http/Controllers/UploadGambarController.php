<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uploadgambar;

class UploadGambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataGambar = Uploadgambar::latest()->get();
        return view('admin/upImage/index', compact('dataGambar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/upImage/createGambar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $nm = $request->gambar;
        $namaFile = $nm->getClientOriginalName();

            $dtUpload = new Uploadgambar;
            // $dtUpload->desc = $request->desc;
            $dtUpload->gambar = $namaFile;

            $nm->move(public_path().'/img', $namaFile);
            $dtUpload->save();

            return redirect()->route('upImage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datagambar = Uploadgambar::findOrFail($id);
        return view('admin/upImage/createGambar', compact('datagambar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datagambar = Uploadgambar::findOrFail($id);
        $datagambar->delete();

        return redirect()->route('upImage.index');
    }
}
