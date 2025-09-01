<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectBillsController extends Controller
{
    public function index()
    {
        $title = "Electricity Bill";         
        $full_name = "Danica Serdena";      
        $customer_type = "Regular";          
        $consumption = 200;                  

        if (strtolower($customer_type) == "lifeline") {
            $rate = 5.00;
            $fixed_charge = 0;
            $discount_percentage = 0.2; 
        } elseif (strtolower($customer_type) == "regular") {
            $rate = 9.50;
            $fixed_charge = 50;
            $discount_percentage = 0;   
        } elseif (strtolower($customer_type) == "commercial") {
            $rate = 12.00;
            $fixed_charge = 200;
            $discount_percentage = 0.05; 
        } else {
            return "Invalid customer type";
        }

        $base_bill = $consumption * $rate;
        $discount = $base_bill * $discount_percentage;
        $total_bill = $base_bill + $fixed_charge - $discount;

        return view('Ebills', compact(
            'title',           
            'full_name', 
            'customer_type', 
            'consumption', 
            'base_bill', 
            'fixed_charge', 
            'discount', 
            'total_bill'
        ));
    }
}
