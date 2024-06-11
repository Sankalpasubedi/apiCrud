<?php
namespace App\Services;

use App\Repositories\Interfaces\CustomerRepositoryInterface;

class CustomerService{

    public function __construct(private readonly CustomerRepositoryInterface $customerRepository)
    {

    }

    public function getCustomer()
    {
        return $this->customerRepository->getAllCustomers();
    }
    public function getSingleCustomer($id)
    {
        return $this->customerRepository->getSingleCustomer($id);
    }

    public function createCustomer($request)
    {
        $data =[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        return $this->customerRepository->createCustomer($data);
    }
    public function updateCustomer($request)
    {
        $data =[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        return $this->customerRepository->updateCustomer($data,$request->id);
    }

    public function deleteCustomer($id)
    {
        return $this->customerRepository->deleteCustomer($id);
    }
}
