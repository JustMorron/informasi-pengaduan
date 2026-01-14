<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Masyarakat;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class MasyarakatFactory extends Factory
{
    protected $model = Masyarakat::class;

    public function definition(): array
    {
        $user = User::create([
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'role' => 'masyarakat',
        ]);

        return [
            'user_id' => $user->id,
            'nik' => $this->faker->unique()->numerify('################'),
            'pekerjaan' => $this->faker->jobTitle(),
            'alamat' => $this->faker->address(),
            'tanggal_lahir' => $this->faker->date(),
            'no_hp' => $this->faker->phoneNumber(),
            'status_pernikahan' => $this->faker->randomElement(['Belum Menikah', 'Menikah', 'Cerai']),
        ];
    }
}
