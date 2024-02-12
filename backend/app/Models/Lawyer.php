<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Lawyer extends Model
{
    protected $table = 'lawyers';
    protected $primaryKey = 'id';
    protected $fillable = ['lawyer_firstname', 'lawyer_lastname', 'lawyer_phonenumber','lawyer_email','lawyer_address','lawyer_file','firm_information'];
    // $table->id();
    // $table->timestamps();
    // $table->string('lawyer_firstname');
    // $table->string('lawyer_lastname');
    // $table->string('lawyer_phonenumber');
    // $table->string('lawyer_email');
    // $table->string('lawyer_address');
    // $table->string('lawyer_file');
    // $table->string('lawyer_information');
}