<?php
namespace App\Repositories;

use App\Models\Customer;
use App\Repositories\Interfaces\CustomerRepositoryInterface;

class CustomerRepository implements CustomerRepositoryInterface
{
    private Customer $model;

    public function __construct(Customer $model)
    {
        $this->model = $model;
    }

    public function getAllCustomers()
    {
        return $this->model->all();
    }
    public function getSingleCustomer($id)
    {
        return $this->model->where('id',$id)->get();
    }
    public function createCustomer($data)
    {
        return $this->model->create($data);
    }
    public function deleteCustomer($id)
    {
        return $this->model->where('id',$id)->delete();
    }
    public function updateCustomer($data,$id)
    {
        return $this->model->where('id',$id)->update($data);
    }

}
