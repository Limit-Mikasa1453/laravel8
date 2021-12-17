<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ModelSiswa;

use App\Exports\ExportSiswa;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ControllerSiswa extends Controller
{
	public function index()
	{
		$siswa = ModelSiswa::all();
		return view('siswa',['siswa'=>$siswa]);
	}

	public function export_excel()
	{
		return Excel::download(new ExportSiswa, 'siswa.xlsx');
	}
}