<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelSiswa extends Model
{
	protected $connection = 'mysql_dcs';

    protected $table = "siswa";
    protected $fillable = ['nama','nis','alamat'];
}