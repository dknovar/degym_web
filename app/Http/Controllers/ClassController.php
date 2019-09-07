<?php

namespace App\Http\Controllers;
// import the storage facade
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use \App\Clases;
use \App\User;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halaman ='class';
        $clases = Clases::all();
        $jumlah_class=$clases->count();
        return view('class', compact('halaman','clases','jumlah_class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $halaman ='class';
        return view('class.create',compact('halaman'));
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
                $gambar_name    = "Class_Image".date('YmdHis').".$ext";
                $upload_path    = 'gambarUpload';
                $request->file('gambar')->move($upload_path,$gambar_name);
                $input['class_image']    = $gambar_name;
            }
        }
        
        $class = new Clases;
        $class->user_id= $request->user()->id;
        $class->class_name  = $request->nama_class;
        $class->class_description  = $request->def_class;
        $class->class_duration  = $request->durasi_class;
        $class->class_image  = $input['class_image'];
        $class->save();
        return redirect('class')->with('status','Data Class Berhasil Ditambahkan!');
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
        $halaman='class';
        $class=Clases::findOrFail($id);
        return view('class.show', compact('halaman','class'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $halaman='class';
        $class=Clases::findOrFail($id);
        return view('class.edit', compact('halaman','class'));
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
        $class= Clases::where('id',$id)->first();
        $input = $request->all();
        // Cek Apakah ada foto baru di form
        if ($request->hasFile('gambar')){
            // hapus foto lama
            $exist = Storage::disk('gambar')->exists($class->class_image);
            if (isset($class->class_image) && $exist){
                $delete = Storage::disk('gambar')->delete($class->class_image);
            }
            // upload foto baru
            $gambar =$request->file('gambar');
            $ext    =$gambar->getClientOriginalExtension();
            if ($request->file('gambar')->isValid()){
                $gambar_name    = "Class_Image".date('YmdHis').".$ext";
                $upload_path    = 'gambarUpload';
                $request->file('gambar')->move($upload_path,$gambar_name);
                $input['class_image']    = $gambar_name;
            }
        }
        Clases::where('id',$id)
        ->update([
            'user_id'=>$request->user()->id,
            'class_name'=>$request->nama_class,
            'class_description'=>$request->def_class,
            'class_duration'=>$request->durasi_class,
            'class_image'=>$input['class_image'] 
        ]);
        return redirect('class')->with('status','Data Class Berhasil Diubah!');
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
        Clases::destroy($id);
        return redirect('class')->with('status','Data Class Berhasil Dihapus!');

    }
}
