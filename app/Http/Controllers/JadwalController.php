<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\timetable;
<<<<<<< HEAD
use \App\day_timetable;
use \App\det_timetable;
=======
>>>>>>> 82a19daa05559192ac61bc0f64a924c96ed191f3
use \App\User;

class JadwalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halaman ='jadwal';
        $jadwal=timetable::all();
        $jumlah_jadwal=$jadwal->count();
        return view('jadwal', compact('halaman','jadwal','jumlah_jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $day_list = day_timetable::pluck('day_timetable','id');
        return view('jadwal.create',compact('day_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input=$request->all();

        if ($request->hasFile('gambar')){
            $gambar =$request->file('gambar');
            $ext    =$gambar->getClientOriginalExtension();

            if ($request->file('gambar')->isValid()){
                $gambar_name    = "Jadwal_Image".date('YmdHis').".$ext";
                $upload_path    = 'gambarUpload';
                $request->file('gambar')->move($upload_path,$gambar_name);
                $input['image_det_timetable']    = $gambar_name;
            }
        }
        
        $det_timetable = new det_timetable;
        $det_timetable->day_timetable_id = $request->hari;
        $det_timetable->image_det_timetable  = $input['image_det_timetable'];
        $class->save();

        $class->user_id= $request->user()->id;
        $class->class_name  = $request->nama_class;

        $class->save();
        return redirect('class')->with('status','Data Jadwal Berhasil Ditambahkan!');
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
}
