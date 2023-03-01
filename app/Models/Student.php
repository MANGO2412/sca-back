<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //use HasFactory;
    protected $table="student";
    
    protected $fillable=[
        'id',
        'serial_number',
        'mail',
        'group_id',
        'generaldata_id'
    ];

    protected $rules=[
       // 'id'=>'required || string || max:100',
        'serial_number'=>'required || string || max:1',
        'mail'=>'required || string',
        'group_id'=>'required || string || max:100',
        //'general_data_id'=>'required || string || max:100'
    ];
  

   public function general_data(){
        // return $this->hasOne(GeneralData::class);
        return $this->belongsTo(GeneralData::class,'generaldata_id','id');
    }

    public function group(){
        return $this->belongsTo(Group::class);
    }
    
}
