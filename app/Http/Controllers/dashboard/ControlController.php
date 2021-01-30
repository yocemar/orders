<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Control;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreControlPost;

class ControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
    {
        //
        $controls = Control::orderBy('created_at','desc')->paginate(4);
        return view('dashboard.control.index',['controls'=> $controls]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.control.create',['control'=> new Control()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreControlPost $request)
    {
        Control::create($request->validated());
        return back()-> with('status', 'Control Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Control  $control
     * @return \Illuminate\Http\Response
     */
    public function show(Control $control)
    {
        return view('dashboard.control.show',["control"=>$control]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Control  $control
     * @return \Illuminate\Http\Response
     */
    public function edit(Control $control)
    {
        return view('dashboard.control.edit',["control"=>$control]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Control  $control
     * @return \Illuminate\Http\Response
     */
    public function update(StoreControlPost $request, Control $control)
    {
        $control->update($request->validated());
        return back()-> with('status', 'Control Stock Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Control  $control
     * @return \Illuminate\Http\Response
     */
    public function destroy(Control $control)
    {
        $control->delete();
        return back()-> with('status', 'Control Stock Deleted');
    }
}
