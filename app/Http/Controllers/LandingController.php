<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saran;
use App\Models\Bidang;
use App\Models\Waka;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wakas = Waka::all();
        $bidangs = Bidang::all();
        return view ('user.homepage', compact('wakas','bidangs'));
    }

    public function tiket()
    {
        return view ('user.tiket');
    }

    // public function form()
    // {
    //     return view ('user.saran');
    // }

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
        Saran::create([
            
            'tiket'=> '100000000000000000000',
            'nisornip' => $request->nisornip,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->foto,
            'waka_id' => $request->waka_id,
            'bidang_id'=> $request->bidang_id,
            'status' => 'dikirim'
        ]);
        return redirect ('/saran');
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
        //
    }

    public function saran(){
        
    }
}
