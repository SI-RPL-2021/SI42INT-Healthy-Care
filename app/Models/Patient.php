<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients';

    protected $fillable = [
        'image', 'full_name', 'phone_number', 'position',
        'age', 'gender', 'address', 'birth', 'unit',
        'instance', 'religion'
    ];
}
