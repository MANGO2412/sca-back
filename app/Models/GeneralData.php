<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralData extends Model
{
    protected $table='general_data';
    protected $fillable=[
       'id',
       'name',
       'surname',
       'birthdate',
       'gender'   
    ];
    
    protected $rules=[
       'name'=>'required|string|max:100',
       'surname'=>'required|string|max:150',
       'birthdate'=>'required',
       'gender'=>'required|string|max:1'
    ];

    public function students(){
        return $this->hasMany(student::class);
    }
}
