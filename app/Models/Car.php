<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mf;


class Car extends Model
{
    use HasFactory;
    protected $table ='cars';
    protected $fillable = ['model','description','products_on','image','mf_id'];
    
    public function mf(){
        return $this->belongsTo(Mf::class,'mf_id', 'id');
    }
}
