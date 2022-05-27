<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affairs extends Model
{
    use HasFactory;
    protected $table='students';
    protected $fillable=['name','surname','studentSsn' ,'birthdate','genderId','nationalityId','religionId',
     'countryId', 'townId','districtId',
     'fatherName','fatherJob','fatherSsn','fatherPhone','motherJob','motherName','motherSsn','motherPhone',
     'created_at' , 'updated_at'];


}
// ,'sublevId','termId' ,'levelId'
