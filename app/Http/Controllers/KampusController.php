<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class KampusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mahasiswa::all();
        $res = [
            'status' => 'berhasil di liat',
            'data' => $data
        ];
        return response($res,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mahasiswa::create([
            'nama_mhs'=>$request->nama_mhs,
            'alamat'=>$request->alamat,
            'jurusan_id'=>$request->jurusan_id
        ]);
        $res = [
            'massage' => 'data berhasil disimpan',
            'status' => 'success'
        ];
        return response($res,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Mahasiswa::find($id);
        $res = [
            'status' => 'berhasil di liat',
            'data' => $data
        ];
        return response($res,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = Mahasiswa::find($id);
        $data->update($request->all());
        $res = [
            'massage' => 'data berhasil disimpan',
            'data' => $data
        ];
        return response($res,201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Mahasiswa::find($id);
        $data->delete($id);
        $res = [
            'massage' => 'data berhasil di hapus',
            'data' => $data
        ];
        return response($res,200);
    }
}
