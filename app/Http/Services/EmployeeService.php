<?php


namespace App\Http\Services;

use App\Models\Employees;

class EmployeeService {

    public function listAll()
    {
        
        // Logic to retrieve all employees
        return Employees::with('languages')->get();

    }
    
    public function create(array $data)
    {
            
        $employee = Employees::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'willing_to_work' => $data['willing_to_work'],
        ]);

        $employee->languages()->attach($data['languages_known']);

        return $employee;

    }

    public function update(array $data, string $id)
    {
        // Logic to update an employee by ID
        $employee = Employees::find($id);

        $employee->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'willing_to_work' => $data['willing_to_work'],
        ]);

        $employee->languages()->sync($data['languages_known']);

        return $employee;

    }

    public function delete(string $id)
    {
        // Logic to delete an employee by ID
        Employees::where('id', $id)->delete();
    }

}