<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sick extends Model
{
    use HasFactory;
    protected $tabel ='sicks';
    protected $fillable = ['name','last_name', 'email', 'phone', 'address','appointment_date'];
}
