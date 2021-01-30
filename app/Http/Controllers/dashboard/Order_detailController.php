<?php

namespace App\Http\Controllers\dashboard;

use App\Item;
use App\Order;
use App\Order_detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrder_detailPost;

class Order_detailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function index()
    {
        $order_details= Order_detail::orderBy('created_at','desc')->paginate(4);
        //dd($orders);

        return view('dashboard.order_detail.index',['order_details'=> $order_details]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::pluck('id','name');
        $orders = Order::pluck('id','number');
        return view('dashboard.order_detail.create',['order_detail'=> new Order_detail(),'items'=>$items,'orders'=>$orders]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrder_detailPost $request)
    {
        Order_detail::create($request->validated());
        return back()-> with('status', 'Order_detail Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order_detail  $order_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Order_detail $order_detail)
    {
        return view('dashboard.order_detail.show',["order_detail"=>$order_detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order_detail  $order_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Order_detail $order_detail)
    {

        $items = Item::pluck('id','name');
        $orders = Order::pluck('id','number');

        return view('dashboard.order_detail.edit',['order_detail'=>$order_detail,'items'=>$items,'orders'=>$orders]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order_detail  $order_detail
     * @return \Illuminate\Http\Response
     */
    public function update(StoreOrder_detailPost $request, Order_detail $order_detail)
    {
        $order_detail->update($request->validated());
        return back()-> with('status', 'Order_detail Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order_detail  $order_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order_detail $order_detail)
    {
        $order_detail->delete();
        return back()-> with('status', 'Order Detail Deleted');
    }
}
