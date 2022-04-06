<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function begin()
    {
        return view('begin');
    }

    public function enterGrades(Request $request)
    {
        $student_1 = $request->name_1;
        $student_2 = $request->name_2;
        $student_3 = $request->name_3;
        $student_4 = $request->name_4;
        $student_5 = $request->name_5;

        return view('enter-grades', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5
        ]);
    }

    protected function computeGrades($midterm, $finals)
    {
        $average = ($midterm + $finals) / 2;
        return round($average, 2);
    }

    protected function getRemarks($average_grade)
    {
        if ($average_grade >= 75){
            $finalRemark = "PASSED";
        }

        else {
            $finalRemark = "FAILED";
        }

        return $finalRemark;
    }

    public function computePower(Request $request)
    {
        $student_1 = $request->student_1;
        $student_2 = $request->student_2;
        $student_3 = $request->student_3;
        $student_4 = $request->student_4;
        $student_5 = $request->student_5;



        $s1_average = $this->computeGrades($request->s1_midterm, $request->s1_finals);
        $s2_average = $this->computeGrades($request->s2_midterm, $request->s2_finals);
        $s3_average = $this->computeGrades($request->s3_midterm, $request->s3_finals);
        $s4_average = $this->computeGrades($request->s4_midterm, $request->s4_finals);
        $s5_average = $this->computeGrades($request->s5_midterm, $request->s5_finals);

        $s1_remark = $this->getRemarks($s1_average);
        $s2_remark = $this->getRemarks($s2_average);
        $s3_remark = $this->getRemarks($s3_average);
        $s4_remark = $this->getRemarks($s4_average);
        $s5_remark = $this->getRemarks($s5_average);



        return view('compute-grades', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5,
            // Student 1 attempts
            's1_midterm' => $request->s1_midterm,
            's1_finals' => $request->s1_finals,
            's1_average' => $s1_average,
            's1_remark' => $s1_remark,
            // Student 2 attempts
            's2_midterm' => $request->s2_midterm,
            's2_finals' => $request->s2_finals,
            's2_average' => $s2_average,
            's2_remark' => $s2_remark,
            // Student 3 attempts
            's3_midterm' => $request->s3_midterm,
            's3_finals' => $request->s3_finals,
            's3_average' => $s3_average,
            's3_remark' => $s3_remark,
            // Student 4 attempts
            's4_midterm' => $request->s4_midterm,
            's4_finals' => $request->s4_finals,
            's4_average' => $s4_average,
            's4_remark' => $s4_remark,
            // Student 5 attempts
            's5_midterm' => $request->s5_midterm,
            's5_finals' => $request->s5_finals,
            's5_average' => $s5_average,
            's5_remark' => $s5_remark,
        ]);
    }
}
