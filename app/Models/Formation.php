<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    
    protected $fillable = ['group', 'kasi', 'spv', 'opis', 'paspor_indonesia', 'diplomatik', 'foreigner', 'tata_usaha', 'protokoler', 'kru', 'honorer'];
}
