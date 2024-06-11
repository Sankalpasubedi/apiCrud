<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerStoreRequest;
use App\Http\Requests\CustomerUpdateRequest;
use App\Models\Customer;
use App\Services\CustomerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function getCustomers(CustomerService $customerService)
    {
        $customers = $customerService->getCustomer();
        return response()->json($customers);
    }
    public function getCustomer(CustomerService $customerService,
                                $id)
    {
        $customer = $customerService->getSingleCustomer($id);
        return response()->json($customer, 201);
    }
    public function createCustomer(CustomerStoreRequest $request,
                                   CustomerService $customerService)
    {
        try {
            DB::beginTransaction();
             $customer = $customerService->createCustomer($request);
            DB::commit();
            return response()->json(['Created', $customer], 201);
        } catch (\Exception $e){
            DB::rollBack();
        }
    }
    public function updateCustomer(CustomerUpdateRequest $request,
                                   CustomerService $customerService)
    {
        try {
            DB::beginTransaction();
             $customer = $customerService->updateCustomer($request);
            DB::commit();
            return response()->json(['Updated to', $customer], 201);
        } catch (\Exception $e){
            DB::rollBack();
        }
    }

    public function deleteCustomer(CustomerService $customerService,
                                   $id)
    {
        try{
            DB::beginTransaction();
            $deleted = $customerService->deleteCustomer($id);
            DB::commit();
            return response()->json($deleted, 201);
        }catch (\Exception $e)
        {
            DB::rollBack();
        }
    }
}
