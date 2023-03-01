<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //use HasFactory;
    protected $table="groups";
    
    protected $fillabel=[
        'id',
        'geade',
        'name',
        'carrer_id'
    ];

    protected $rules=[
        //'id'=>'required || string || max:100',
        'grade'=>'required || integer',
        'name'=>'required || string || max:1',
        //'carrer_id'=>'required || string || max:100',
    ];

    public function career(){
        return $this->belongsTo(Carrer::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }

    
}
