<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class rak_buku extends Model
{
    protected $table = "rak_buku";
 
    protected $fillable = ['id','id_buku','id_jenis_buku'];
}