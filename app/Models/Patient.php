<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients';

    protected $fillable = [
        'fullname', 'username', 'email', 'phone', 'gender', 'address'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
