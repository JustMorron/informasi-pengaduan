<?php

namespace Database\Factories;

use App\Models\Complaint;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComplaintFactory extends Factory
{
    protected $model = Complaint::class;

    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(5),
            'isi_complaint' => $this->faker->paragraph(3),
            'status' => $this->faker->randomElement(['pending', 'diproses', 'selesai']),
        ];
    }
}
