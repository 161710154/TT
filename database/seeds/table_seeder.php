<?php

use Illuminate\Database\Seeder;

class table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $a=  [ 
     ['NIS'=>'12344443','Nama_Siswa'=>'serli','Tempat_Lahir'=>'bandung','Tanggal_Lahir'=>'2000-05-01','Alamat'=>'Soekarno Hatta','Cita_Cita'=>'Chef','Hobi'=>'memasak'],

     ['NIS'=>'12344443','Nama_Siswa'=>'sekar','Tempat_Lahir'=>'bandung','Tanggal_Lahir'=>'2001-02-22','Alamat'=>'Baleendah','Cita_Cita'=>'Bidan','Hobi'=>'Berenang'],

     ['NIS'=>'12344443','Nama_Siswa'=>'Ririn','Tempat_Lahir'=>'bandung','Tanggal_Lahir'=>'1998-04-03','Alamat'=>'Jelekong','Cita_Cita'=>'polwan','Hobi'=>'bernyanyi'],

     ['NIS'=>'12344443','Nama_Siswa'=>'Herdi','Tempat_Lahir'=>'bandung','Tanggal_Lahir'=>'1999-05-06','Alamat'=>'Kiara Condong','Cita_Cita'=>'Polisi','Hobi'=>'Bermain_Bola'],

     ['NIS'=>'12344443','Nama_Siswa'=>'Yusuf','Tempat_Lahir'=>'bandung','Tanggal_Lahir'=>'2000-02-10','Alamat'=>'Dayeuhkolot','Cita_Cita'=>'TNI','Hobi'=>'Berenang']
     ];
     DB::table('siswas')->insert($a);
         }
}

