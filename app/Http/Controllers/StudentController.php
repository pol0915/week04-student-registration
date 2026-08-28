<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->get();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'student_id' => [
                    'required',
                    'string',
                    'max:50',
                    'unique:students,student_id',
                ],

                'first_name' => [
                    'required',
                    'string',
                    'max:100',
                    'regex:/^[A-Za-zÑñ\s\-\']+$/',
                ],

                'middle_name' => [
                    'nullable',
                    'string',
                    'max:100',
                    'regex:/^[A-Za-zÑñ\s\-\']+$/',
                ],

                'last_name' => [
                    'required',
                    'string',
                    'max:100',
                    'regex:/^[A-Za-zÑñ\s\-\']+$/',
                ],

                'email' => [
                    'required',
                    'email',
                    'max:255',
                    'unique:students,email',
                ],

                'mobile_number' => [
                    'required',
                    'digits_between:10,11',
                ],

                'date_of_birth' => [
                    'required',
                    'date',
                    'before:today',
                ],

                'gender' => [
                    'required',
                    'in:Male,Female,Prefer not to say',
                ],

                'program' => [
                    'required',
                    'string',
                    'max:150',
                ],

                'year_level' => [
                    'required',
                    'in:1st Year,2nd Year,3rd Year,4th Year',
                ],

                'address' => [
                    'required',
                    'string',
                    'max:500',
                ],

                'profile_picture' => [
                    'required',
                    'image',
                    'mimes:jpg,jpeg,png',
                    'max:2048',
                ],
            ],
            [
                'student_id.required' => 'Student ID is required.',
                'student_id.unique' => 'This Student ID is already registered.',

                'first_name.required' => 'First name is required.',
                'first_name.regex' => 'First name may only contain letters, spaces, hyphens, and apostrophes.',

                'middle_name.regex' => 'Middle name may only contain letters, spaces, hyphens, and apostrophes.',

                'last_name.required' => 'Last name is required.',
                'last_name.regex' => 'Last name may only contain letters, spaces, hyphens, and apostrophes.',

                'email.required' => 'Email address is required.',
                'email.email' => 'Please enter a valid email address.',
                'email.unique' => 'This email address is already registered.',

                'mobile_number.required' => 'Mobile number is required.',
                'mobile_number.digits_between' => 'Mobile number must contain 10 to 11 digits.',

                'date_of_birth.required' => 'Date of birth is required.',
                'date_of_birth.before' => 'Date of birth must be before today.',

                'gender.required' => 'Please select a gender.',

                'program.required' => 'Please select an academic program.',

                'year_level.required' => 'Please select a year level.',
                'year_level.in' => 'Please select a valid year level.',

                'address.required' => 'Complete address is required.',

                'profile_picture.required' => 'A profile picture is required.',
                'profile_picture.image' => 'The uploaded file must be an image.',
                'profile_picture.mimes' => 'Profile picture must be JPG, JPEG, or PNG.',
                'profile_picture.max' => 'Profile picture must not exceed 2 MB.',
            ]
        );

        $validated['profile_picture'] = $request
            ->file('profile_picture')
            ->store('student-profiles', 'public');

        $student = Student::create($validated);

        return redirect()
            ->route('students.show', $student)
            ->with('success', 'Student registered successfully!');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
}