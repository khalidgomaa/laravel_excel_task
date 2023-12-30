<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Http\Requests\ImportRequest;
use App\Http\Requests\ExportRequest;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.dashboard', compact('users'));
    }

  // import functions
    public function view_import()
    {
        return view('admin.import');
    }

    public function import(ImportRequest $request)
    {
        $users_file = $request->file('users_file');
    
        Excel::import(new UsersImport, $users_file);
        return redirect()->back()->with('success', 'Data imported successfully.');
    }

    // export functions
    public function view_export()
    {
       
        $columnOptions = [
            'full_name' => 'Full Name',
            'email' => 'Email',
            'phone_number' => 'Phone Number',
        ];
    
        return view('admin.export', compact('columnOptions'));
    }

    public function export(ExportRequest $request)
    {
     
        $selectedColumns = $request->input('columns');
        $selectedRows = $request->input('rows');
    
        $export = new UsersExport($selectedColumns, $selectedRows);
    // dd($export);
        $fileName = 'users.xlsx';
    
        return Excel::download($export, $fileName);
    }
    
}