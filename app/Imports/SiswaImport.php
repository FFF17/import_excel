
<?php

namespace App\Imports;

use App\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'nim' => $row[0],
            'slug' => str_slug($row[0]),
            'nama' => $row[1],
            'price' => $row[2],
            'stock' => $row[3]
        ]);
    }
}
