<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Abouts extends Model
{
    protected $table="abouts";
    protected $primaryKey = 'id';
    public $timestamps=false;
    protected $guarded = [];
}