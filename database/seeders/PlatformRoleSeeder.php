<?php

namespace Database\Seeders;

use App\Models\PlatformRole;
use Illuminate\Database\Seeder;

class PlatformRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'admin',     'label' => 'Administrador'],
            ['name' => 'moderator', 'label' => 'Moderador'],
            ['name' => 'editor',    'label' => 'Editor'],
            ['name' => 'creator',   'label' => 'Creador de contenido'],
            ['name' => 'user',      'label' => 'Usuario'],
            ['name' => 'guest',     'label' => 'Invitado'],
        ];

        foreach ($roles as $role) {
            PlatformRole::updateOrCreate(
                ['name' => $role['name']],
                ['label' => $role['label']]
            );
        }
    }
}
