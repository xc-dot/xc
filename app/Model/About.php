<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table="about";
    protected $primaryKey = 'a_id';
    public $timestamps=false;
    protected $guarded = [];
}