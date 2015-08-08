<?php

namespace AppStitch\Http\Controllers;

use AppStitch\Prov;
use Illuminate\Http\Request;

use AppStitch\Http\Requests;
use AppStitch\Http\Requests\ProvCreateRequest;
use AppStitch\Http\Requests\ProvUpdateRequest;
use AppStitch\Http\Controllers\Controller;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $provs = Prov::paginate(9);
        return view('admin.prov.index',compact('provs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.prov.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ProvCreateRequest $request)
    {
        Prov::create([
            'id'            => $request['id'],
            'nomContacto'   => $request['nomContacto'],
            'razonSocial'   => $request['razonSocial'],
            'telfProv'      => $request['telfProv'],
            'provProv'      => $request['provProv'],
            'locProv'       => $request['locProv'],
            'dirProv'       => $request['dirProv'],
            'cpProv'        => $request['cpProv'],
            'emailProv'     => $request['emailProv']
        ]);

        return redirect('admin/proveedores')->with('message','Producto creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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
