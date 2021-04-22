<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    use HasFactory;

    protected $table = 'nurses';
    protected $primarykey = 'user_id';

    protected $fillable = [
        'image', 'full_name', 'phone_number', 'position',
        'age', 'gender', 'address', 'birth', 'unit',
        'instance', 'religion'
    ];
}
