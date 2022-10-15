<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'role',
    ];
<<<<<<< HEAD

    public function user()
    {
        return $this->hasMany(User::class);
    }
=======
>>>>>>> 2ecd2eb624ba6570d725818e301a2fc861945d9e
}
