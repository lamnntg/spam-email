<?php

namespace App\Imports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportUser implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customer([
            'name' => $row['name'],
            'email' => $row['email'],
            'company' => $row['company'],
            'phone_number' => $row['phone_number'],
            'tax_code' => $row['tax_code'],
            'description' => $row['description'],
        ]);
    }
}
