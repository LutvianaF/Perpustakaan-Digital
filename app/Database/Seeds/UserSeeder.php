<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'username' => 'admin',
                'password' => password_hash('hellouniverse!', PASSWORD_BCRYPT),
                'id_role'  => 2,
            ],
            [
                'username' => 'dev',
                'password' => password_hash('hellobyte!', PASSWORD_BCRYPT),
                'id_role'  => 3,
            ],
            [
                'username' => 'user',
                'password' => password_hash('helloworld!', PASSWORD_BCRYPT),
                'id_role' => 4,
            ],
        ];

        $this->db->table('users')->insertBatch($users);
    }
}
