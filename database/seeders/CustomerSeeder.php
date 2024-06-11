<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["Laravel","Laravel@gmail.com","Laravel"],
            ["Laravel1","Laravel1@gmail.com","Laravel1"],
            ["Laravel2","Laravel2@gmail.com","Laravel12"],
            ["Laravel3","Laravel3@gmail.com","Laravel123"]
        ];

        foreach ($data as $dataSingle)
        {
            $customer = new Customer();
            $customer->name =$dataSingle[0];
            $customer->email =$dataSingle[1];
            $customer->password =$dataSingle[2];
            $customer->save();
        }
    }
}
