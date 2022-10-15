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
<<<<<<< HEAD
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
=======
        'start_date',
        'end_date'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    // public function bank()
    // {
    //     return $this->belongsTo(Bank::class);
    // }
>>>>>>> 2ecd2eb624ba6570d725818e301a2fc861945d9e
}
