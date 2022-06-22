<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserDetail;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' => 'admin',
        	'email' => 'admin@gmail.com',
            'password' => bcrypt('qweasdzxc')
        ]);
        UserDetail::create([
            'email' => 'admin@gmail.com',
            'nisn' => '1234567890',
            'namalengkap' => 'admin1',
            'ttl'=> '2022/12/22',
            'alamat' => 'alamatadmin1',
            'nohp' => '81357056860',
            'akunig' => 'fal_alf',
            'posisibermain' => 'admin',
            'riwayatssb' => 'riwayatssb',
            'prestasi' => 'prestasi',
            'tinggibadan' => '169',
            'beratbadan' => '80',
            'namaorangtua' => 'orangtua',
            'pekerjaanorangtua' => 'pekerjaan',
            'info' => 'info',
            'file' => 'file',
            'status'=>'admin',
            'id_role' => '1'
        ]);
        $user->assignRole('admin');
    }
}
