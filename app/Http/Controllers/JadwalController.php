<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\timetable;
use \App\day_timetable;
use \App\det_timetable;
use \App\User;
use Carbon\Carbon;
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

        if ($request->hasFile('gambar_jadwal')){
            $gambar =$request->file('gambar_jadwal');
            $ext    =$gambar->getClientOriginalExtension();

            if ($request->file('gambar_jadwal')->isValid()){
                $gambar_name    = "Jadwal_Image".date('YmdHis').".$ext";
                $upload_path    = 'gambarUpload';
                $request->file('gambar_jadwal')->move($upload_path,$gambar_name);
                $input['image_det_timetable']    = $gambar_name;
            }
        }
        
        $det_timetable = new det_timetable;
        $det_timetable->day_timetable_id = $request->hari;
        $det_timetable->image_det_timetable  = $input['image_det_timetable'];
        $det_timetable->save();

        $today = Carbon::now();
        $timetable = new timetable;
        $timetable->user_id= $request->user()->id;
        $timetable->det_timetable_id= $det_timetable->id;
        $timetable->timetable_month  =$today->now();
        $timetable->timetable_year  = $today->year;
        $timetable->save();
        return redirect('jadwal')->with('status','Data Jadwal Berhasil Ditambahkan!');
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
        $halaman='jadwal';
        // $det_jadwal=timetable::findOrFail($id);
        $det_jadwal = DB::table('timetable') ->select( 'timetable.id', 'day_timetable.day_timetable as hari', 'det_timetable.image_det_timetable as gambar') 
        ->leftJoin('det_timetable', 'timetable.det_timetable_id', '=', 'det_timetable.id') 
        ->leftJoin('day_timetable', 'det_timetable.day_timetable_id', '=', 'day_timetable.id') 
        ->where('timetable.id', '=', $id)->first();
        // dd($det_jadwal);
        return view('jadwal.show', compact('halaman','det_jadwal'));
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
