<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index() {

        return view('customer');
    }

    public function save(Request $request) {

        // dd($request->all());
        $this->validate($request, [
            'name' => 'required'
        ]);

        Customer::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
    }

    public function customerList() {

        $data = Customer::all();
        return $data;
    }

    public function customerEdit($id) {

        // dd($id);
        $data = Customer::find($id);
        // dd($data);
        return view('customerEdit', compact('data'));
    }

    public function customerUpdate(Request $request, $id) {

        // dd($request->all());
        Customer::find($id)->update($request->all());
        return 'Update Done';
    }

    public function customerDelete($id) {

        Customer::find($id)->delete();
        return 'Deleted';
    }

}
