<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;

    // 1. Table Name Specfication
    protected $table = 'tbl_student';

    protected $fillable = [
        'instu_id',
        'app_for_admin_to',
        'CourseCode',
        'DepartmentName',
        'TrainingCentre',
        'TrainingCentreCode',
        'RollNo',
        'SessionYear',
        'LateralEntry',
        'LateralIfYes',
        'Mode',
        'Name',
        'FaHuName',
        'MotherName',
        'DOB', 
        'Gender',
        'Category',
        'adr_no',
        'MaritalStatus',
        'Whether',
        'Nationality',
        'Applicants',
        'Unemployed',
        'WorkExperience',
        'WorkIfYes',
        'WorkYears',
        'WorkMonths',
        'Address',
        'Pin',
        'Mobile',
        'Phone',
        'Emails',
        'EducationalDetails',
        'AdhaarCard',
        'AdhaarCard_back',
        'ThenthDMC',
        'BirthProof',
        'Signature',
        'PassportSize',
        'Verify',
        'addon',
        'status',
        'REGISTRATION',
        'jdate',
        'icard'
    ];
}