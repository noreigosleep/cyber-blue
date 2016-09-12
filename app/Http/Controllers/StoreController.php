<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class StoreController extends Controller
{
    public function index() {
    	$user = Auth::user();

    	//$stores = Auth::user()->stores();
    	dd($user);
    }
}
