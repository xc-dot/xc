<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    protected $table="index";
    protected $primaryKey = 'i_id';
    public $timestamps=false;
    protected $guarded = [];
}