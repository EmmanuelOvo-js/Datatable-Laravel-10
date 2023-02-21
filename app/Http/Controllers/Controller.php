<?php

namespace App\Http\Controllers;

use App\Models\datatable;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{

    public function index() {

        $data = datatable::all();
        return view('datatable', compact('data'));

    }

    use AuthorizesRequests, ValidatesRequests;
}
