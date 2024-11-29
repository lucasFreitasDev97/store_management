<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SupplierController extends Controller
{
    public function index(): View
    {
        return view('suppliers.index');
    }

    public function create(): View
    {
        return view('suppliers.create');
    }

    public function store()
    {
        //
    }

    public function edit(): View
    {
        return view('suppliers.edit');
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
