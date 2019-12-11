<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    protected $table="join";
    protected $primaryKey = 'j_id';
    public $timestamps=false;
    protected $guarded = [];
}