<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HostsController extends Controller
{
    public function index() {
        $hosts = App\Host::orderBy('id', 'desc')->paginate(10);
        return view('hosts.index', compact('hosts'));
    }

    public function show($id) {
        $host = App\Host::find($id);
        return view('hosts.show', compact('host'));
    }
}