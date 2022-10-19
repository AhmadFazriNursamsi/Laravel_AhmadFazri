<?php

namespace App\Http\Controllers;

use App\Models\RS;
use Illuminate\Http\Request;

class RsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getdata()
    {
        
        $rumahS = RS::get();
        $datas = [];
        $i = 1;
        foreach($rumahS as $key => $rs){
            $datas[$key] = [
                 $rs->nama, $rs->alamat, $rs->email, $rs->tlp, $rs->id
            ];
        }
        return response()->json(['data' => $datas, 'status' => '200'], 200);
    }

    public function index()
    {
        $datas = 'Pasien';
        return view('RS.index', compact('datas'));
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
        $datas = new RS;
        $datas->nama = $request->nama;
        $datas->alamat = $request->alamat;
        $datas->email = $request->email;
        $datas->tlp = $request->tlp;
        $datas->save();

        return response()->json(['data' => ['success'], 'status' => '200'], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RS  $rS
     * @return \Illuminate\Http\Response
     */
    public function show($id, RS $rS)
    {

        $datas = RS::where('id', $id)->first();
        // dd($datas);
        return response()->json(['data' => $datas, 'status' => '200'], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RS  $rS
     * @return \Illuminate\Http\Response
     */
    public function edit(RS $rS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RS  $rS
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, RS $rS)
    {
        $datas = RS::where('id', $id)->first();
        $datas->nama = $request->nama;
        $datas->alamat = $request->alamat;
        $datas->email = $request->email;
        $datas->tlp = $request->tlp;
        $datas->save();

        return response()->json(['data' => ['success'], 'status' => '200'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RS  $rS
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, RS $rS)
    {
        RS::where('id', $id)->delete();

        return response()->json(['data' => ['success'], 'status' => '200'], 200);

    }
}
