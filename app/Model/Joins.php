<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Joins extends Model
{
    protected $table="joins";
    protected $primaryKey = 'id';
    public $timestamps=false;
    protected $guarded = [];
}