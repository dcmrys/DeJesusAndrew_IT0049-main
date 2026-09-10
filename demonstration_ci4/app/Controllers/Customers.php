<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Jovs Francis Caburao', 'email' => 'jovs.caburao@example.com', 'phone' => '0917 123 4501'],
            ['full_name' => 'Jose Paolo Ong', 'email' => 'jose.ong@example.com', 'phone' => '0918 234 5602'],
            ['full_name' => 'Jairus Galicia', 'email' => 'jairus.galicia@example.com', 'phone' => '0919 345 6703'],
            ['full_name' => 'Mathew Zachary Macalino', 'email' => 'mathew.macalino@example.com', 'phone' => '0920 456 7804'],
            ['full_name' => 'Joshua De Leon', 'email' => 'joshua.deleon@example.com', 'phone' => '0921 567 8905'],
        ];

        return view('pages/customers', [
            'title'      => 'Customer Accounts',
            'activePage' => 'customers',
            'customers'  => $customers,
        ]);
    }
}
