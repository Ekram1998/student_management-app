<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'enrollments';
    protected $primarykey = 'id';
    protected $fillable = ['enroll_no','batch_id','student_id','join_date','fee'];
    use HasFactory;

    public function student(){
        return $this->belongsTo(student::class);
    }

    public function batch(){
        return $this->belongsTo(batch::class);
    }
}
