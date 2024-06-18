<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table="courses";

    public $timestamps= false;

    protected $fillable = ['name' , 'syllabus' , 'duration'];

    protected $primarykey = "id";

    public function duration(){
        return $this->duration." Months";
    }
}
