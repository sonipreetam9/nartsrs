<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentResultModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_result'; 

    protected $fillable = [
        'student_id',
        'total_marks',
        'get_marks',
        'remark',
        'rdate',
        'result_year',
    ];

    // Relationship: Result belongs to a Student
    public function student()
    {
        return $this->belongsTo(StudentModel::class, 'student_id', 'id');
    }
}