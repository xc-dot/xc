<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $table="app";
    protected $primaryKey = 'id';
    public $timestamps=false;
    protected $guarded = [];
}
