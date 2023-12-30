<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    protected $columns;
    protected $rows;

    public function __construct($columns, $rows)
    {
        $this->columns = $columns;
        $this->rows = $rows;
    }

    public function collection()
    {
        $query = User::query();
    
        if ($this->rows === 'last') {
            $query->where('created_at', '>', now()->subDays(1));
        }
    
        $users = $query->select($this->columns)->get();
    
        return $users;
    }

    public function headings(): array
    {
        return $this->columns;
    }
}