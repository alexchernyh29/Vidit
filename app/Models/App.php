<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;
    protected $connection ='mysql';
    public $table = 'app';
    protected $fillable = [
        'tip',
        'marka',
        'model',
        'pk',
        'dv',
        'korobka',
        'fio',
        'email',
        'mobile',
        'gos',
        'ra',
        'comment',
    ];
}
