<?php

namespace App\Exports;

use App\Models\Department;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DepartmentExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return [
            'Sr No',
            'Department Name',      
        'Department Code', 
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Department::getDepartment());
    }
}
