<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $employeeId = $request->id;

        $employee = Employee::updateOrCreate(
            [
                'id' => $employeeId
            ],
            [
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address
            ]
        );

        return Response()->json($employee);
    }
}
