<?php
namespace App\Models;
use App\Models\Rating;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Firm extends Model
{
    protected $table = 'firms';
    protected $primaryKey = 'id';
    protected $fillable = ['firm_name', 'firm_email', 'firm_phonenumber','firm_address','firm_file','firm_information', 'firm_active','user_id',];
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}