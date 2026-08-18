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
            'section' => '3-F5',
            'email' => 'khimlianmoldogo@gmail.com'
        ];

        return $this->call->view('student/profile', $student);
    }
}