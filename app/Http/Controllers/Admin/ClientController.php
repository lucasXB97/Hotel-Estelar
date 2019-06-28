<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use App\http\Requests\ClientStoreRequest;
use App\http\Requests\ClientUpdateRequest;
use App\Hotel;
use Illuminate\Support\Facades\DB;


class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $clients = Client::orderBy('id', 'DESC')->paginate();
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientStoreRequest $request)
    {
        //validar datos
        $client = Client::create($request->all());
        return redirect()->route('clients.index', $client->id)
        ->with('info', 'Cliente creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);

        return view('admin.clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);

        return view('admin.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientUpdateRequest $request, $id)
    {
        // validar datos
        $client = Client::find($id);
        $client->fill($request->all())->save();
        return redirect()->route('clients.edit', $client->id)
        ->with('info', 'Cliente editado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
        $search = $request->get('search');
        $clients = DB::table('clients')->where('first_name','LIKE','%'.$search.'%')
                                       ->orWhere('second_name','LIKE','%'.$search.'%')
                                       ->orWhere('father_name','LIKE','%'.$search.'%')
                                       ->orWhere('mother_name','LIKE','%'.$search.'%')
                                       ->orWhere('ci','LIKE','%'.$search.'%')
                                       ->paginate();
        return view('admin.clients.index',compact('clients'));
    }
}
