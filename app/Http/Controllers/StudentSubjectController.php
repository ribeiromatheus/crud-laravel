<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentSubject;

class StudentSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_subject = StudentSubject::all();

        return view('student_subject.index')->with('student_subjects', $student_subject);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student_subject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student_subject = new StudentSubject();

        $student_subject->first_grade = '0';
        $student_subject->second_grade = '0';
        $student_subject->student_id = $request->student_id;
        $student_subject->subject_id = $request->subject_id;
        
        $student_subject->save();

        return redirect()->route('student_subject.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student_subject = StudentSubject::find($id);

        return view('student_subject.show')->with('student_subjects', $student_subject);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student_subject = StudentSubject::find($id);

        return view('student_subject.edit')->with('student_subjects', $student_subject);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student_subject = StudentSubject::find($id);

        $student_subject->first_grade = $request->first_grade;
        $student_subject->second_grade = $request->second_grade;
        $student_subject->subject_id = $request->subject_id;

        $student_subject->update();

        return redirect()->route('student_subject.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student_subject = StudentSubject::find($id);

        $student_subject->delete();

        return redirect()->route('student_subject.index');
    }
}
