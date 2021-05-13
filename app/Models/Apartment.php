<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Apartment extends Model
{
    use HasFactory;
    protected $fillable = [
        'city',
        'street',
        'square_footage',
        'rooms_num',
        'parking',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
