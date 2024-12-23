<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//importamos spatie
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos=[
            //table article
            'Show-Article',
            'Create-Article',
            'Edit-Article',
            'Delete-Article',
            //table category
            'Show-category',
            'Create-category',
            'Edit-category',
            'Delete-category',
            //table income
            'Show-income',
            'Create-income',
            'Edit-income',
            'Delete-income',
            //table IncomeDetail
            'Show-incomeDetail',
            'Create-incomeDetail',
            'Edit-incomeDetail',
            'Delete-incomeDetail',
            //table Person
            'Show-person',
            'Create-person',
            'Edit-person',
            'Delete-person',
        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
