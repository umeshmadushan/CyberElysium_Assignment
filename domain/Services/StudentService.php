<?php

namespace domain\Services;

use App\Models\Student;
use Infrastructure\Facade\ImagesFacade;

class StudentService
{

      
    protected $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    public function get($student_id)
    {
        return $this->student->find($student_id);
    }

    public function all()
    {

        return $this->student->all();

    }


    public function allActive()
    {
        return $this->student->where('status', 'active')->get();
    }


    public function store($data) 
    {
        $image = ImagesFacade::store($data['image'],[1,2,3,4,5]);

       $data['image'] = $image['created_images']->name;
 
         $this->student->create($data);

    }


    public function delete($student_id)
    {

        $student = $this->student->find($student_id);

        $student->delete();

    }

    public function statusUpdate($student_id)
    {

        $student = $this->student->find($student_id);

        $student->status = "inactive";
        $student->update();

    }

    public function statusUpdateActive($student_id)
    {

        $student = $this->student->find($student_id);

        $student->status = "active";
        $student->update();

    }

    public function update(array $data,$student_id)
    {

        $student = $this->student->find($student_id);

        $student->update($this->edit($student, $data));

    }

    protected function edit(Student $student, $data)
    {
        return array_merge($student->toArray(), $data);
    }


}