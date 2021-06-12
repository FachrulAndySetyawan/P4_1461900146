<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\bukuExport;
use App\Models\buku;
use App\Models\jenis_buku;
use App\Models\rak_buku;
use Illuminate\Support\Facades\DB;


class bukuController extends Controller
{
    public function view(){
        $bukuController=DB::table('rak_buku')->join('buku','rak_buku.id_buku', '=', 'buku.id')->join('jenis_buku','rak_buku.id_jenis_buku', '=', 'jenis_buku.id')->get();
        // dd($prak4);
        return view('Prak0146', [
            'bukuController' => $bukuController,
        ]);

    }
    public function export(){
		return Excel::download(new bukuExport, 'Data_1461900146.xlsx');
	}


}
