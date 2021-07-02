<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'dashboard_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_read',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_read',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_read',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'profile_access',
            ],
            [
                'id'    => 18,
                'title' => 'post_access',
            ],
            [
                'id'    => 19,
                'title' => 'post_create',
            ],
            [
                'id'    => 20,
                'title' => 'post_read',
            ],
            [
                'id'    => 21,
                'title' => 'post_update',
            ],
            [
                'id'    => 22,
                'title' => 'post_delete',
            ],
            [
                'id'    => 23,
                'title' => 'category_access',
            ],
            [
                'id'    => 24,
                'title' => 'category_create',
            ],
            [
                'id'    => 25,
                'title' => 'category_read',
            ],
            [
                'id'    => 26,
                'title' => 'category_update',
            ],
            [
                'id'    => 27,
                'title' => 'category_delete',
            ],
            [
                'id'    => 28,
                'title' => 'inbox_access',
            ],
            [
                'id'    => 29,
                'title' => 'message_delete',
            ],
            [
                'id'    => 30,
                'title' => 'portfolio_access',
            ],
            [
                'id'    => 31,
                'title' => 'portfolio_create',
            ],
            [
                'id'    => 32,
                'title' => 'portfolio_read',
            ],
            [
                'id'    => 33,
                'title' => 'portfolio_update',
            ],
            [
                'id'    => 34,
                'title' => 'portfolio_delete',
            ],
            [
                'id'    => 35,
                'title' => 'user_management_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
