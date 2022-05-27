<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EduData extends Model
{
    use HasFactory;
    protected $table = 'education_data';
    protected $fillable = ['AcdYearId', 'StudentSsn', 'EduId','LevelId','TermId' ];
    public $timestamps =false;
}
