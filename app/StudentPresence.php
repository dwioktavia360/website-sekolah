<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentPresence extends Model
{
    public $timestamps = true;
    protected $fillable=['nama_siswa','status'];
}
