<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'role'=>'user' ,
            'name'=> 'user',
            'email'=> 'user@user.com' ,
            'email_verified_at'=> NULL ,
            'password'=> '$2y$10$tClS6PUlvOYm4adIqzz2VeKZev2msMjK1wwTu438ms0z6h1ZnBL72',
            'image'=> NULL,
            'remember_token'=> 'wYTbwLnbuMugq1BcpkqmXQBp35XVRd0BClA7T4LKFaUjSTBr30P2jQt2iol4' ,
        ]);
        User::create([
            'role'=>'admin' ,
            'name'=> 'admin',
            'email'=> 'admin@admin.com' ,
            'email_verified_at'=> NULL ,
            'password'=> '$$2y$10$SlKzAWD59M921.2l//9Qr.5BorPXZdearxa3xmM2hziUFPnNpComS',
            'image'=> NULL,
            'remember_token'=> NULL ,
        ]);

    }
}
