<?php


namespace App\Http\Services;

use App\Models\Employees;

class EmployeeService {

    public function listAll()
    {
        
        // Logic to retrieve all employees
        return Employees::get();

    }
    
    public function create(array $data)
    {
        // Logic to retrieve all employees
        
        foreach ($data['languages_known'] as $language) {
            
            Employees::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'willing_to_work' => $data['willing_to_work'],
                'languages_known' => $language,
            ]);

        }

        return true;

    }

    public function update(array $data, string $id)
    {
        // Logic to update an employee by ID
        return Employees::where('id', $id)->update($data);

    }

    public function delete(string $id)
    {
        // Logic to delete an employee by ID
        Employees::where('id', $id)->delete();
    }

}