<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

    public function showForm(){
        return view('Form');
    }

    public function handleForm(Request $request){
        $validated = $request->validate([
            'firstname' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'Sex' => 'required',
            'Mobilephone' => 'required|numeric',
            'Telephone-Number' => 'required|numeric',
            'Birthdate' => 'required|date_format:yyyy-mm-dd',
            'Address' => 'required|string|max:100',
            'Email' => 'required|email',
            'Website' => 'required|url',
            
        ]);

        return back() -> with('success', 'Form submitted successfully!');
    }

}