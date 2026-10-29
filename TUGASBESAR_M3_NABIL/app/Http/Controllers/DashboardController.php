<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $hours = date('H');
        $salam = match (true) {
            $hours >= 5 && $hours < 12  => "Good Morning",
            $hours >= 12 && $hours < 15 => "Good Afternoon",
            $hours >= 15 && $hours < 18 => "Good Evening",
            default                     => "Good Night",
        };

        $accessTime  = date("H:i:s");
        $totalDokter = Doctor::count();

        return view('dashboard', compact('salam', 'accessTime', 'totalDokter'));
    }
}