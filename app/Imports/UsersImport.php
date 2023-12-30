<?php
namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $password = isset($row['password']) ? Hash::make($row['password']) : null;

       
        $columnMapping = [
            'full_name' => $row['full_name'],
            'email' => $row['email'],
            'phone_number' => $row['telephone'], 
            'password' => $password,
        ];

     
        return new User($columnMapping);
    }
}
