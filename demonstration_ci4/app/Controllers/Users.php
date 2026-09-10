<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'admin01', 'full_name' => 'Andrew De Jesus', 'role' => 'Administrator'],
            ['username' => 'manager01', 'full_name' => 'James Ivan Frondarina', 'role' => 'Store Manager'],
            ['username' => 'cashier01', 'full_name' => 'Maryclaire Jashley Dela Cruz', 'role' => 'Cashier'],
            ['username' => 'cashier02', 'full_name' => 'Trina Marielle Viloria', 'role' => 'Cashier'],
            ['username' => 'stock01', 'full_name' => 'Mark Benedict Castro', 'role' => 'Inventory Clerk'],
        ];

        return view('pages/users', [
            'title'      => 'User Accounts',
            'activePage' => 'users',
            'users'      => $users,
        ]);
    }
}
