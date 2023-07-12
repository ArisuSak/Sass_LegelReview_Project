<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table = 'password_resets';
    protected $primaryKey = 'id';
    protected $fillable = ['email','token','creared'];
    
    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

}

