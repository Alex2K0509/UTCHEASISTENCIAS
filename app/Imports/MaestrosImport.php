<?php

namespace App\Imports;

use App\Maestros;


use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MaestrosImport implements ToModel, WithValidation, WithHeadingRow
{
    use Importable;
    //use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Maestros([
           'nombre' => $row[0],
           'Ape_pat' => $row[1],
           'Ape_mat' => $row[2],
        ]);
    }
    public function rules(): array
    {
        return [
            'nombre' =>['string'],
            'Ape_pat'=>['string'],
            'Ape_mat'=>['string'],
        ];
    }

    public function customValidationMessages()
    {
        return [
            'nombre.string' => 'La columna Nombre solo admite valores alfanumericos ',
            'Ape_pat.string' => 'La columna Apellido Paterno solo admite valores alfanumericos ',
            'Ape_.string' => 'La columna Apellido Materno solo admite valores alfanumericos ',
        ];
    }




}
