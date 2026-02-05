<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeModel extends Model
{
    protected $table = 'time';

     protected $fillable = [
        'times',
        'numero',
        'posicao',
        'jogador'
    ]; 
}


