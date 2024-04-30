<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DesignClient extends Model
{
    protected $fillable = ['user_id', 'category_id', 'design_id', 'price', 'size'];
}