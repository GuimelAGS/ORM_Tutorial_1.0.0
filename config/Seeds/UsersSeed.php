<?php
declare(strict_types=1);

// config/Seeds/UsersSeed.php
use Migrations\BaseSeed;

class UsersSeed extends BaseSeed
{
    public function run(): void
    {
        $data = [
            [
                'email' => 'cakephp@example.com',
                'password' => 'secret',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}