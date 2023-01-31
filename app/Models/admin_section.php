<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_section extends Model
{
    protected $table = 'admin_sections';
    protected $primary = 'id';
    protected $fillable = [
        'u_name',
        'f_name',
        'l_name',
        'email',
        'my_password',
    ];
}
