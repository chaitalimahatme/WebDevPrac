<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Student;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
class StudentController extends Controller
{
    public function getform()
    {
        return view('form');
    }
    public function submitform(Request $request)
    {
        $student = new student();
        $student->title = $request->title;
        $student->description = $request->description;
        $student->save();
        return redirect()->route('student.table');
    }

    public function gettable(Request $request)
    {
        if($request->search){
            $data  = Student::where('id',$request
            ->id)->paginate(5);
            return view('table', compact('data'));

        }
        $data  = Student::paginate(5);
        return view('table', compact('data'));
    }
    public function editform($id)

    {
        $data = student::find($id);
        return view('edit', compact('data'));
    }
    public function updateform(Request $request, $id)
    {
        $student = student::find($id);
        $student->title = $request->title;
        $student->description = $request->description;
        $student->update();
        return redirect()->route('student.table');
    }
    public function deleteform(Request $request, $id)
    {
        $student = student::find($id);
        $student->title = $request->title;
        $student->description = $request->description;
        $student->delete();
        return redirect()->route('student.table');
    }
  
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.csv');
    }
   
   
  
}
