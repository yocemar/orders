<?php

namespace App\Http\Controllers\dashboard;


use App\User;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderPost;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function __construct()
    {
        $this->middleware(['auth', 'rol.admin']);

        
        //$this->middleware('auth')-> only('index');
        //$this->middleware('auth')-> except('index');

    }
     public function index()
    {
    
        $orders = Order::orderBy('created_at','desc')->paginate(4);
        //dd($orders);

        return view('dashboard.order.index',['orders'=> $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return "hola desde create Order controller";
        $users = User::pluck('id','name');

        return view('dashboard.order.create',['order'=> new Order(),'users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request   $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderPost $request)
    {
        
       
        Order::create($request->validated());
        return back()-> with('status', 'Order Created');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //$order = Order::findorfail($id);


            return view('dashboard.order.show',["order"=>$order]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
        $users = User::pluck('id','name');
        return view('dashboard.order.edit',["order"=>$order,'users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreOrderPost $request, Order $order)
    {
        $order->update($request->validated());
        return back()-> with('status', 'Order Updated');

        //return view("dashboard.order")->with('status', 'Order Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //echo "aplicando metodo destroy";
        $order->delete();
        return back()-> with('status', 'Order Deleted');
    }
}
