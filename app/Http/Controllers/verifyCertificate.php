<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;

class verifyCertificate extends Controller
{
    /**
     * Verification page dikhata hai (GET /verify)
     */
    public function index()
    {
        return view('verify-certificate'); 
    }

    /**
     * Form submit hone par data check karta hai (POST /verify)
     */
    public function verify(Request $request)
    {
        // 1. Input Validation (Naye field names ke saath)
        $request->validate([
            'studentName' => 'required|string',
            'enrollmentNumber' => 'required|string',
        ]);

        
        $certificate = Certificate::where('student_name', $request->studentName)
                                  ->where('enrollment_number', $request->enrollmentNumber)
                                  ->first();

    
        if ($certificate) {
            return redirect()->route('verify.result')->with('verified_certificate', $certificate);
        } 

        return back()->with('error', 'Certificate not found. Please check your Name and Enrollment Number and try again.');
    }
}