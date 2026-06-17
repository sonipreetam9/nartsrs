<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\StudentModel;
use App\Models\StudentResultModel;
use Carbon\Carbon;

class StudentController extends Controller
{

    //  ***********  Student Login Page ***********
    public function StudentLogin()
    {
        return view('student-login');
    }

    //  ***********  Student Login Post Controller ***********
    public function StudentLoginPost(Request $request)
    {
        $request->validate([
            'REGISTRATION' => 'required|string',
            'DOB' => 'required|date',
        ], [
            'REGISTRATION.required' => 'Please enter your Registration Number.',
            'DOB.required' => 'Please enter your Date of Birth.',
        ]);

        $regNumber = trim($request->REGISTRATION);
        $userInputDate = date('d-m-Y', strtotime($request->DOB));
        $student = StudentModel::where('REGISTRATION', $regNumber)
            ->where('DOB', $userInputDate)
            ->first();

        if ($student) {
            if ($student->Verify != 1) {
                return back()
                    ->withErrors([
                        'REGISTRATION' => 'Your account is under review and has not been verified yet.'
                    ])
                    ->withInput($request->only('REGISTRATION'));
            }

            session()->put('student_data', $student->toArray());

            return redirect()->route('student.dashboard')->with('success', 'Login successful! Welcome back, ' . $student->Name);

        } else {
            return back()
                ->withErrors([
                    'REGISTRATION' => 'Invalid Registration Number. Please try again.',
                    'DOB' => 'Invalid Date of Birth. Please try again.'
                ])
                ->withInput($request->only('REGISTRATION', 'DOB'));
        }
    }


    //  ***********  Student Dashboard Page ***********
    public function StudentDashboard()
    {
        if (!session()->has('student_data')) {
            return redirect()->route('student.login')->withErrors(['error' => 'Please login to access your dashboard.']);
        }

        $studentId = session('student_data.id');
        $student = StudentModel::find($studentId);

        if (!$student) {
            return redirect()->route('student.login')->withErrors(['error' => 'Student not found.']);
        }
        return view('student-dashboard', compact('student'));
    }

    //  ***********  Student Logout ***********
    public function StudentLogout()
    {
        session()->forget('student_data');
        return redirect()->route('student.login');
    }


    //  ***********  Student Result Page ***********
    public function StudentResult()
    {
        return view('student-result-login');
    }

    //  ***********  Student Result Post Controller ***********
    public function StudentResultPost(Request $request)
    {

        $request->validate([
            'REGISTRATION' => 'required|string',
            'DOB' => 'required|date',
        ], [
            'REGISTRATION.required' => 'Please enter your Registration Number.',
            'DOB.required' => 'Please select your Date of Birth.',
        ]);

        $regNumber = trim($request->REGISTRATION);
        $userInputDate = date('d-m-Y', strtotime($request->DOB));
        $student = StudentModel::where('REGISTRATION', $regNumber)->where('DOB', $userInputDate)->first();

        if (!$student) {
            return back()
                ->withErrors(['REGISTRATION' => 'Invalid Registration Number.'])
                ->withErrors(['DOB' => 'Invalid Date of Birth.'])
                ->withInput($request->only('REGISTRATION', 'DOB'));
        }

        if ($student->Verify != 1) {
            return back()->withErrors(['REGISTRATION' => 'Your account verification is pending. Results cannot be displayed yet.']);
        }
        $results = StudentResultModel::where('student_id', $student->id)->orderBy('result_year', 'asc')->get();
        if ($results->isEmpty()) {
            return back()->withErrors(['REGISTRATION' => 'No results declared for this registration number yet.']);
        }
        return view('student-result-marksheet', compact('student', 'results'));
    }


}
