<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function CourseIndex()
    {
        return view('course');
    }
    public function DepartmentOfComputer()
    {
        return view('department-of-computer');
    }
    public function DepartmentOfParamedical()
    {
        return view('department-of-paramedical');
    }
    public function DepartmentOfVocational()
    {
        return view('department-of-vocational');
    }
    public function DepartmentOfFireSafety()
    {
        return view('department-of-fire-safety');
    }
    public function DepartmentOfHardwareNetworking()
    {
        return view('department-of-harware-network');
    }
    public function DepartmentOfManagement()
    {
        return view('department-of-management');

    }
    public function DepartmentOfLanguages()
    {
        return view('department-of-language');
    }
    public function DepartmentOfPolytechnic()
    {
        return view('department-of-polytechnic');
    }


}
