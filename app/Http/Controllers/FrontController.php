<?php

namespace AppStitch\Http\Controllers;

use Illuminate\Http\Request;
use AppStitch\Http\Requests;
use AppStitch\User;
use AppStitch\Http\Controllers\Controller;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('index');
    }

    public function almacen()
    {
        return view('almacen');
    }     

    public function proveedores()
    {
        return view('proveedores');
    }

    public function caja()
    {
        return view('caja');
    }

    public function turnos()
    {
        return view('turnos');
    }

    public  function admin()
    {
        $users = User::All();
        return view('admin.index',compact('users'));
    }


}
