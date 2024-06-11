<?php

namespace App\Repositories\Interfaces;

interface CustomerRepositoryInterface
{

    public function getAllCustomers();
    public function getSingleCustomer($id);
    public function deleteCustomer($id);

    public function createCustomer($data);
    public function updateCustomer($data,$id);
}
