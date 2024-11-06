<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    //

    function addStudent(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->batch = $request->batch;
        $result = $student->save();
        if ($result) {
            return redirect('display');
        } else {
            return "Student not added";
        }
    }

    function displayStudent()
    {
        $students = Student::all();
        return view('displayStudent', ['students' => json_decode($students)]);
    }

    function deleteStudent($id)
    {
        $isDelete = Student::destroy($id);
        if ($isDelete) {
            return redirect('display');
        } else {
            return "Record not deleted";
        }
    }

    function edit($id)
    {
        $studentDetails = Student::find($id);
        return view("editStudent", ['studentDetails' => $studentDetails]);
    }

    function editStudent(Request $req, $id)
    {
        $student = Student::find($id);
        $student->name = $req->name;
        $student->email = $req->email;
        $student->batch = $req->batch;
        $result = $student->save();
        if ($student->save()) {
            return redirect('display');
        } else {
            return 'Record not updated';
        }
    }
}
