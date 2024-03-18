<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Laravel\Prompts\password;

class Admin extends Model
{
   use HasFactory;
   protected $table = 'pegawai';
   protected $fillable = [
    'id',
    'nama',
    'username',
    'password',
    'status',
   ];
}