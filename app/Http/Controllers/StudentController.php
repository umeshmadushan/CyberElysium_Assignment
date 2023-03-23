<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use domain\Facades\StudentFacade;

class StudentController extends ParentController
{


    public function index()
    {

        $response ['students'] = StudentFacade::all();

        return view ('pages.studentList.index')->with($response);
    }

    public function store(Request $request) 
    {

        StudentFacade::store($request->all ());
        return redirect()->back();

    }


    public function delete($student_id)
    {

        StudentFacade::delete($student_id);
        return redirect()->back();

    }

    public function statusUpdate($student_id)
    {

        StudentFacade::statusUpdate($student_id);
        return redirect()->back();

    }

    public function statusUpdateActive($student_id)
    {

        StudentFacade::statusUpdateActive($student_id);
        return redirect()->back();

    }

    public function edit(Request $request)
    {

        $response ['students'] = StudentFacade::get($request['student_id']);

        return view ('pages.studentList.edit')->with($response);
    }

    public function update(Request $request,$student_id)
    {

        StudentFacade::update($request->all (),$student_id);
        return redirect()->back();

    }

}
