<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdmissionController extends Controller
{
    public function showForm()
    {
        return view('admission');
    }

    public function submit(Request $request)
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'applicant' => 'required|in:student,father,mother,other',
            'contact' => 'required|regex:/^03\d{9}$/',
            'address' => 'required|string|max:500',
        ], [
            'contact.regex' => 'Please enter a valid 11-digit contact number starting with 03',
            'applicant.in' => 'Please select a valid relation',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create admission record
        $admission = Admission::create([
            'name' => $request->name,
            'father_name' => $request->father_name,
            'applicant' => $request->applicant,
            'contact' => $request->contact,
            'address' => $request->address,
            'submitted_at' => now(),
        ]);

        // You can also send email notification here
        // $this->sendNotificationEmail($admission);

        return redirect()->back()->with('success', 
            'Thank you for submitting! Our representative will contact you within 24 hours.'
        );
    }

    // Optional: Email notification method
    private function sendNotificationEmail($admission)
    {
        // Implement email sending logic here
        // Mail::to('hms.mehrabpur@gmail.com')->send(new AdmissionNotification($admission));
    }
}