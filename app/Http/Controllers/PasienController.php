<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\RS;
use DB;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getdata()
    {
        
        // $rumahS = Pasien::withget();
        $rumahS =  DB::table('pasien')
        ->select('pasien.nama_pasien','pasien.tlp','pasien.alamat','rumah_sakit.nama', 'pasien.id')
        ->join('rumah_sakit', 'rumah_sakit.id', '=', 'pasien.id_rs')
        ->whereRaw('pasien.id',)
        ->get();
       
        $datas = [];
        $i = 1;
        foreach($rumahS as $key => $rs){
            $datas[$key] = [
                 $rs->nama_pasien, $rs->alamat, $rs->nama, $rs->tlp, $rs->id
            ];
        }
        return response()->json(['data' => $datas, 'status' => '200'], 200);
    }

    public function index()
    {
        $datas = 'Rumah Sakit';
        $db = RS::get();
        return view('pasien.index', compact('datas'), compact('db'));
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
        $datas = new Pasien;
        $datas->nama_pasien = $request->nama;
        $datas->alamat = $request->alamat;
        $datas->tlp = $request->tlp;
        $datas->id_rs = $request->id_rs;
        $datas->save();

        return response()->json(['data' => ['success'], 'status' => '200'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show($id, Pasien $pasien)
    {
        $datas = Pasien::with('RS')->where('id', $id)->first();
        // dd($datas);
        return response()->json(['data' => $datas, 'status' => '200'], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Pasien $pasien)
    {
        $datas = Pasien::where('id', $id)->first();
        $datas->nama_pasien = $request->nama;
        $datas->alamat = $request->alamat;
        $datas->id_rs = $request->id_rs;
        $datas->tlp = $request->tlp;
        $datas->save();

        return response()->json(['data' => ['success'], 'status' => '200'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Pasien $pasien)
    {
        Pasien::where('id', $id)->delete();

        return response()->json(['data' => ['success'], 'status' => '200'], 200);
    }
}
