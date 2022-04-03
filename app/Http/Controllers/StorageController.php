<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class StorageController extends Controller
{

    public function show(): Factory|View|Application
    {
        $storages = Storage::all();
        return view('showStorage', ['storages' => $storages]);
    }
}
