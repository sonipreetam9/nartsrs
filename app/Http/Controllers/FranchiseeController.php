<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FranchiseeModel;

class FranchiseeController extends Controller
{

    public function FranchiseList()
    {
        return view('view-franchisee');
    }

    public function FranchiseeIndex()
    {
        return view('franchisee-registration');
    }

    public function FranchiseeStore(Request $request)
    {
        // 1. VALIDATION
        // Duplicate check karne ke liye humne 'unique:tbl_instute' rule add kiya hai.
        $request->validate([
            'HeadFullName' => 'required|string|max:255',
            'HeadFatherName' => 'required|string|max:255',
            'HeadMotherName' => 'required|string|max:255',
            // Phone, Aadhaar aur Email unique hone chahiye 'tbl_instute' table mein
            'HeadPhone' => 'required|numeric|digits:10|unique:tbl_instute,HeadPhone',
            'HeadGender' => 'required|string',
            'HeadDOB' => 'required|date',
            'HeadAdhaar' => 'required|numeric|digits:12|unique:tbl_instute,HeadAdhaar',
            'HeadEmail' => 'required|email|max:255|unique:tbl_instute,HeadEmail',
            'password' => 'required|string|min:6',
            'HeadCity' => 'required|string|max:255',
            'HeadState' => 'required|string|max:255',
            'HeadAddress' => 'required|string|max:500',

            'CentreName' => 'required|string|max:255',
            'CentreLandmark' => 'nullable|string|max:500',
            'CentrePhone' => 'nullable|numeric|digits:10',
            'CentreCity' => 'nullable|string|max:255',
            'CentreState' => 'nullable|string|max:255',
            'CentreEmail' => 'nullable|email|max:255',
            'CentreAddress' => 'required|string|max:500',

            // Images Validation
            'CentreHeadImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'CentreOutside' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'CentreInside' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Sign' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            // Custom Validation Messages (Optional, par user experience ke liye achha hai)
            'HeadPhone.unique' => 'This phone number is already registered.',
            'HeadAdhaar.unique' => 'This Aadhaar number is already registered.',
            'HeadEmail.unique' => 'This email address is already registered.'
        ]);

        // 2. PASSWORD ENCRYPTION (Old PHP logic maintain karne ke liye)
        $encryptedPassword = base64_encode(base64_encode($request->password));

        // 3. SAVE MODEL DATA
        $franchisee = new FranchiseeModel();

        // Head Data
        $franchisee->HeadFullName = $request->HeadFullName;
        $franchisee->HeadFatherName = $request->HeadFatherName;
        $franchisee->HeadMotherName = $request->HeadMotherName;
        $franchisee->HeadPhone = $request->HeadPhone;
        $franchisee->HeadGender = $request->HeadGender;
        $franchisee->HeadDOB = $request->HeadDOB;
        $franchisee->HeadAdhaar = $request->HeadAdhaar;
        $franchisee->HeadEmail = $request->HeadEmail;
        $franchisee->Password = $encryptedPassword;
        $franchisee->HeadCity = $request->HeadCity;
        $franchisee->HeadState = $request->HeadState;
        $franchisee->HeadAddress = $request->HeadAddress;

        // Centre Data
        $franchisee->CentreName = $request->CentreName;
        $franchisee->CentreLandmark = $request->CentreLandmark;
        $franchisee->CentrePhone = $request->CentrePhone;
        $franchisee->CentreCity = $request->CentreCity;
        $franchisee->CentreState = $request->CentreState;
        $franchisee->CentreEmail = $request->CentreEmail;
        $franchisee->CentreAddress = $request->CentreAddress;

        // Images Upload Process
        $franchisee->CentreHeadImage = $this->uploadImage($request, 'CentreHeadImage');
        $franchisee->CentreOutside = $this->uploadImage($request, 'CentreOutside');
        $franchisee->CentreInside = $this->uploadImage($request, 'CentreInside');
        $franchisee->Sign = $this->uploadImage($request, 'Sign');

        // Verification Status
        $franchisee->verify = 0;

        // Pehle dummy value dalenge taaki database strict mode mein fail na ho (agar pehle issue aya tha toh)
        $franchisee->RefrenceNo = 'TEMP_' . time();

        // Save the first time to get the ID for Reference Number
        $franchisee->save();

        // 4. GENERATE REFERENCE NO (Purane PHP Logic ki tarah)
        $statePrefix = strtoupper(substr($request->HeadState, 0, 3));
        $dateStr = date("Ym"); // Year and Month
        $referenceNo = "NART/C" . $statePrefix . "/" . $dateStr . $franchisee->id;

        // Update Reference Number 
        $franchisee->RefrenceNo = $referenceNo;
        $franchisee->save();

        // Return back with data for success modal
        return back()->with([
            'success' => 'Centre Registered Successfully, Wait for Verify.',
            'ref_no' => $referenceNo,
            'plain_password' => $request->password
        ]);
    }

    // Helper Function for File Upload 
    private function uploadImage($request, $fieldName)
    {
        if ($request->hasFile($fieldName)) {
            $file = $request->file($fieldName);
            $fileName = rand(11111, 99999) . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);
            return 'uploads/' . $fileName;
        }
        return null;
    }

}