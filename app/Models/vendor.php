<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class vendor extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'vendor_name'
    ];
    protected $dates = ['deleted_at'];
}
