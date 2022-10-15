<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'user_id',
        'product_id',
        'description',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
