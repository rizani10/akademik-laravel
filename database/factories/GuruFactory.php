<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'nama' => $this->faker->name(),
            // 'nip' => $this->faker->randomDigit(),
            // 'nuptk' => $this->faker->randomDigit(),
            // 'jk' => 'Laki-Laki',
            // 'tempat_lahir' => $this->faker->country(),
            // 'tanggal_lahir' => $this->$faker->date('Y_m_d'),
            // 'alamat' => $this->faker->address(),
            // 'agama' => 'Islam',
            // 'kepegawaian' => 'PNS',
            // 'jenis_ptk' => 'Tenaga Administrasi',
            // 'no_hp' => $this->faker->randomNumber(12),
        ];
    }
}
