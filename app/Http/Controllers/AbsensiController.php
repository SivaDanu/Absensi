<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsensiController extends Controller
{
    //
    public function index()
    {
        //baca isi tabel absensi
        $data = DB::table('absensi')->paginate(5);
        //tampilkan hasil isian absensi
        return view ('absensi', ['dataabsensi'=>$data]);
    }

    public function tambahAbsensi()
    {
        return view('tambahAbsensi');
    }

    public function simpanAbsensi(Request $request)
    {
        DB::table('absensi')->insert
        ([
            'id'=>$request->id,
            'noabs'=>$request->noabs,
            'nama'=>$request->nama,
            'kelas'=>$request->kelas
        ]);

        return redirect('/');
    }

    public function editAbsensi($id)
    {
        $data = DB::table('absensi')->where('id', $id)->get();

        return view('edit', ['absensinya'=>$data]);
    }

    public function updateAbsensi(Request $request)
    {
        DB::table('absensi')->where('id', $request->id)->update
        ([
            //'id'=>$request->id,
            'noabs'=>$request->noabs,
            'nama'=>$request->nama,
            'kelas'=>$request->kelas
        ]);

        return redirect('/');
    }

    public function hapusAbsensi($id)
    {
        DB::table('absensi')->where('id', $id)->delete();

        return redirect('/');
    }

}
