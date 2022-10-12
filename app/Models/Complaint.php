<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $guard = [];
    
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    
    // public function bank()
    // {
    //     return $this->belongsTo(Bank::class);
    // }
}
