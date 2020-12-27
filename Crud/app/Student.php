<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    //
    protected $table = 't_jurusan';
    use SoftDeletes;
    protected $fillable = ['nama', 'nisn', 'email', 'jurusan'];
}
