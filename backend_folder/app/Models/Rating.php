<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table = 'ratings';
    protected $primaryKey = 'id';
    protected $fillable = ['rating','comment','firm_id'];
    
    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

}

