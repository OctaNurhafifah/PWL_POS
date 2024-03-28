<?php

namespace App\Http\Controllers;

use App\DataTable\KategoriDataTable as DataTableKategoriDataTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;

class MyController extends Controller
{
    public function index(DataTableKategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }
}
