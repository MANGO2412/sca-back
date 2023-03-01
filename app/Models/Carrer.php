<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrer extends Model
{
    //use HasFactory;
    protected $table="careers";
    
    protected $fillabel=[
        'id',
        'name',
        'descripction',
        'level'
    ];

    protected $rules=[
        'name'=>'required || string || max:100',
        'description'=>'required || string || max:300',
        'level'=>'required || string || max:3'
    ];
    

    public function groups(){
        return $this->hasMany(Group::class);
        
    }
}
