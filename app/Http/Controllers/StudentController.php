<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends ParentController
{

    protected $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    public function index()
    {

        $response ['students'] =Student::all();

        return view ('pages.studentList.index')->with($response);
    }

    public function add(Request $request) 
    {

        $this->student->create($request->all ());

        return redirect()->back();

    }


    public function delete($student_id)
    {

        $student = $this->student->find($student_id);

        $student->delete();

        return redirect()->back();

    }

    public function statusUpdate($student_id)
    {

        $student = $this->student->find($student_id);

        $student->status = "inactive";
        $student->update();

        return redirect()->back();

    }

    public function statusUpdateActive($student_id)
    {

        $student = $this->student->find($student_id);

        $student->status = "active";
        $student->update();

        return redirect()->back();

    }

}
