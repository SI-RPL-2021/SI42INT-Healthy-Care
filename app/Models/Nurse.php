<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    use HasFactory;

    protected $table = 'nurses';

    protected $fillable = [
        'image', 'full_name', 'phone_number', 'position',
        'age', 'gender', 'address', 'birth', 'unit',
        'instance', 'religion', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
    
    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }
}
