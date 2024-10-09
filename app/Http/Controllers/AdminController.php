<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Checkout;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminhome()
    {
        $totalCustomers = User::count();
        $totalOrders = Order::count();
        $totalCategories = Category::count();
        $totalProducts = Product::count();

        return view('AdminPanel.index',compact('totalCustomers','totalOrders','totalCategories','totalProducts'));
    }

    public function admincustomerdetail()
    {
        $search=$request['search']??"";
        if($search!=""){
            $customer=User::where('fullname',"LIKE","%$search%")->get();
        }
        else{
            $customer=User::all();
        }

        $data=compact('customer', 'search');

        return view('AdminPanel.customersdetail')->with($data);
    }

    public function adminorder()
    {

        $search=$_REQUEST['search']??"";

        if ($search != "") {
            $order = Order::whereHas('customer', function($query) use ($search) {
                $query->where('name', 'LIKE', "%$search%");
            })->get();
        } else {
            $order = Order::with('customer')->get();
        }

        $data = compact('order', 'search');
        return view('AdminPanel.orderdetail')->with($data);
    }

    public function admincheckout()
    {

        $search=$_REQUEST['search']??"";

        if ($search != "") {
            $checkout = Checkout::whereHas('customer', function($query) use ($search) {
                $query->where('name', 'LIKE', "%$search%");
            })->get();
        } else {
            $checkout = Checkout::with('customer')->get();
        }

        $data = compact('checkout', 'search');
        return view('AdminPanel.checkoutdetail')->with($data);
    }

}
