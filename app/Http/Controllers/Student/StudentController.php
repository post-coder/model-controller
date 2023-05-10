<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index() {
        // visualizza tutti gli studenti

        $students = Student::select('*')->get();


        return view('student/index', compact('students'));
    }
 
    function create() {
        $student = new Student();

        $student->name = "Gabriel";
        $student->surname = "Cappello";
        $student->degree_id = "26";
        $student->date_of_birth = "1991-12-25";
        $student->fiscal_code = "FZYIAS77B37H221U";
        $student->enrolment_date = "2021-05-12";
        $student->registration_number = "624199";
        $student->email = "aaron.coppsola@yahoo.com";

        $student->save();

        
    }
}
 