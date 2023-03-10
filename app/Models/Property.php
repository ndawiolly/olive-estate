<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table = "properties";
    protected $primary = "id";
    protected $fillable = [
        'p_id',
        'price',
        'location',
        'signature',
        'p_status',
        'cover_img',
        'description',
    ];

    // protected $hidden = [
    //     "p_id"
    // ];
}
