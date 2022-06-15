<?php

namespace App\Http\Controllers;
use shurjopayv2\ShurjopayLaravelPackage8\Http\Controllers\ShurjopayController;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::all();
        return view('backend.pages.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
       // return $orders;
        if($order){
            return view('backend.pages.orders.view', compact('order'));
        }else{
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        if($order){
           $status= $order->delete();
            if($status){
                return redirect()->route('order.index')->with('success', 'Order Delete Successfully');
            }else{
                return back()->with('error','Please Try Again');
            }
        }else{
            return back()->with('error','Data Not Faound');
        }
    }


    public function initiatePayment(Request $request)
    {
        $this->validate($request,[
            'customer_name'=>'required|string',
            'customer_phone'=>'required',
            'customer_address'=>'required',
            'studentID'=>'required',
            'customer_city'=>'required',
            'customer_postcode'=>'required',
            'floor_id'=>'required',
            'room_id'=>'required',
            'customer_city'=>'required',
            'email'=>'required|email',
            'dob'=>'required',
        ]);

        $data= $request->all();
        $info = Order::create($data);
        $info = array(
            'currency' => "BDT",
            'amount' => 500,
            'order_id' => "Sh556HJjdP",
            'discsount_amount' =>0 ,
            'disc_percent' =>0 ,
            'client_ip' => "127.0.0.1",
            'customer_name' => "Your Customer Name",
            'customer_phone' => "01700000000",
            'email' => "test@gmail.com",
            'customer_address' => "Mohakhali,TB Gate",
            'customer_city' => "Dhaka",
            'customer_state' => "Dhaka",
            'customer_postcode' => "1212",
            'customer_country' => "BD",
            'value1' => "djkfhdukh",
        );

        $shurjopay_service = new ShurjopayController();
        //return $shurjopay_service
        return $shurjopay_service->checkout($info);
    }






    public function verifyPayment(Request $request)
    {

        $order_id = $request->order_id;
        $shurjopay_service = new ShurjopayController();
        $data = $shurjopay_service->verify($order_id);
        return view('frontend.pages.success_page');
        //return view('frontend.pages.success_page');

    }



    public function changeStatus(Request $request)
    {
        //return $request->input('order_id');
        $order = Order::find($request->input('order_id'));
        if ($order) {
            $status = Order::where('id', $request->input('order_id'))->update(['condition' => $request->input('condition')]);
            if ($status) {
                return back()->with('success', ' Successfully Updated');
            } else {
                return back()->with('error', 'something went wrong !!');
            }
        } else {
            abort(404);
        }

    }
}
