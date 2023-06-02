<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
        $model->insert([
            'username' => 'admin',
            'useremail' => 'alwi123@email.com',
            'userpassword' => password_hash('alwi123', PASSWORD_DEFAULT),
        ]);
    }
}