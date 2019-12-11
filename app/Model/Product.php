<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="product";
    protected $primaryKey = 'p_id';
    public $timestamps=false;
    protected $guarded = [];
}
