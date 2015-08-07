<?php

namespace AppStitch\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use AppStitch\Almacen;
use AppStitch\Http\Requests\AlmacenCreateRequest;
use AppStitch\Http\Requests\AlmacenUpdateRequest;
use AppStitch\Http\Requests;
use AppStitch\Http\Controllers\Controller;


class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $almacens = Almacen::paginate(10);
        return view('admin.almacen.index', compact('almacens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return view('admin.almacen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(AlmacenCreateRequest $request)
    {

        $precio = floatval($request['precioProd']);
        $iva = $request['ivaProd'];

        $calNeto = $precio - (($precio * $iva)/100);

        Almacen::create([
            'id'            => $request['id'],
            'nomProd'       => $request['nomProd'],
            'uniProd'       => $request['uniProd'],
            'precioProd'    => floatval($request['precioProd']),
            'ivaProd'       => $request['ivaProd'],
            'netoProd'      => $calNeto,
            'idMprod'       => $request['idMProd'],
            'favProd'       => $request['favProd']
        ]);

        return redirect('admin/almacen')->with('message','Producto creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $almacen = Almacen::find($id);
        return view('admin.almacen.edit',['almacen'=>$almacen]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(AlmacenUpdateRequest $request, $id)
    {

        $almacen = Almacen::find($id);
        $precio = floatval($request['precioProd']);
        $iva = $request['ivaProd'];

        $calNeto = $precio - (($precio * $iva)/100);
        echo '<pre>';
        var_dump($calNeto);
        var_dump($almacen);
        var_dump($id);


        $almacen->fill([
            'id'            => $request['id'],
            'nomProd'       => $request['nomProd'],
            'uniProd'       => $request['uniProd'],
            'precioProd'    => floatval($request['precioProd']),
            'ivaProd'       => $request['ivaProd'],
            'netoProd'      => $calNeto,
            'idMprod'       => $request['idMProd'],
            'favProd'       => $request['favProd']
        ]);

        $almacen->save();
        Session::flash('message','Producto editado correctamente');

        return Redirect::to('admin/almacen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
