<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class user extends Model
{
    protected $table = "user";
 
    protected $fillable = ['id','nama','username','password'];
}