<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory;
    protected $table='telefono';
    protected $primaryKey = 'id';
    protected $fillable =['nombre','marca','modelo','anio','color','telefonia','tamaño'];
    protected $guarded=[];
    //public $timestamps=false;

}
