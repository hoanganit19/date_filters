<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use Carbon\Carbon;

class CustomersController extends Controller
{
    public function index(Request $request)
    {
        $customers = Customers::orderBy('id', 'desc');

        if ($request->days) {
            $days = $request->days;
            $now = date('Y-m-d H:i:s');
            $date = date('Y-m-d H:i:s', (strtotime("- $days day", strtotime($now))));
            $customers = $customers->where('start_input', '<=', $date);
        }

        $customers = $customers->get();

        return view('customers.lists', compact('customers'));
    }
}
