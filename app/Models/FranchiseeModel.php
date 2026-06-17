<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FranchiseeModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_instute';

    protected $fillable = [
        'RefrenceNo',
        'HeadFullName',
        'HeadFatherName',
        'HeadMotherName',
        'HeadPhone',
        'HeadGender',
        'HeadDOB',
        'HeadAdhaar',
        'HeadEmail',
        'Password',
        'HeadCity',
        'HeadState',
        'CentreHeadImage',
        'HeadAddress',
        'CentreName',
        'CentreLandmark',
        'CentrePhone',
        'CentreCity',
        'CentreState',
        'CentreEmail',
        'CentreOutside',
        'CentreInside',
        'Sign',
        'CentreAddress',
        'verify',
    ];

}
