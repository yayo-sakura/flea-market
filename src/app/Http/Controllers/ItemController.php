<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Http\Requests\AddressRequest;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\ExhibitionRequest;
use App\Http\Requests\PurchaseRequest;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index()
  {
    return view('index');
  }

  public function storeindex(Request $request)
  {

  }

  public function buy_list()
  {
    return view('buy_list');
  }

  public function change_address(Request $request)
  {
    return view('change_address');
  }

  public function details(Request $request)
  {
    return view('details');
  }

  public function mylist()
  {
    return view('mylist');
  }

  public function purchase(Request $request)
  {
    return view('purchase');
  }


  public function sell_list()
  {
    return view('sell_list');
  }

  public function sell(Request $request)
  {
    return view('sell');
  }

  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }

}