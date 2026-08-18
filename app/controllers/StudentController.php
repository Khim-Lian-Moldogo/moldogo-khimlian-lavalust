<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['student_access'] = true;

    return $this->call->view('student/index');
}
    public function profile()
    {
        $student = [
           'student_id' => '2024-00246',
            'name' => 'Khim Lian P. Moldogo',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => 'F5',
            'school' => 'Mindoro State University',
            'email' => 'khimlianmoldogo@gmail.com',
            'contact_number' => '09637325819',
            'address' => 'Pinamalayan, Oriental Mindoro',
            'hobbies' => 'Sketching,Watching K-dramas'
        ];

        return $this->call->view('student/profile', $student);
    }
}