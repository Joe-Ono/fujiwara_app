<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Groupuse;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Company::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Userを10件作成し、Userをeachで繰り返す
        \App\Models\User::factory(2)->create()->each(function ($user) {
            // Eventの作成時にuser_idに作成したユーザーIDを渡す
            \App\Models\Event::factory(10)
                ->create(['user_id' => $user->id]);
        });
        // MemoSeeder（シーダークラス）の呼び出し
        $this->call(GroupuseSeeder::class);

    }
}
