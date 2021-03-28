<?php

namespace App\Imports;

use App\Recipe;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportRecipes implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Recipe([
            //
        ]);
    }
}
