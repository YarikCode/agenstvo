<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;
use App\Models\Group;
use App\Models\User;
use App\Models\DrivingLesson;
use App\Models\TheoreticalLesson;
use App\Models\Usluga;
use App\Models\Application;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user_names = ['Иванов Иван Иванович', 'Батуев Геннадий Васильевич', 'Калашникова Марианна Климентьевна', 'Алексеенко Снежана Николаевна'];
        $user_emails = ['ivanov@mail.ru', 'venyabatuev@mail.ru', 'kalash@mail.ru', 'snezhan123@mail.ru'];
        $password = Hash::make('user');
        $user_numbers = ['+7 (918) 345-78-13', '+7 (964) 190-87-13', '+7 (918) 156-01-15', '+7 (918) 156-01-15'];
        $user_statuses = ['Admin', 'Новый пользователь', 'Новый пользователь', 'Новый пользователь'];
        for($i = 0; $i < count($user_names); $i++){
            User::create(['name' => $user_names[$i], 'email' => $user_emails[$i], 'password' => $password, 'number' => $user_numbers[$i], 'status' => $user_statuses[$i]]);
        }


        $names = ['Загородный дом', 'Квартира в новостройке'];
        $descriptions = ['Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.', 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.'];
        $prices = ['3500000', '2400000'];
        $files = ['moto.jpg', 'avto.jpg'];
        for($i = 0; $i < count($names); $i++){
            Usluga::create(['name' => $names[$i], 'description' => $descriptions[$i], 'price' => $prices[$i], 'image' => $files[$i]]);
        }

        $users_id = ['1', '2'];
        $uslugi_id = ['1', '2'];
        for($i = 0; $i < count($users_id); $i++){
            Application::create(['user_id' => $users_id[$i], 'usluga_id' => $uslugi_id[$i]]);
        }
    }
}
