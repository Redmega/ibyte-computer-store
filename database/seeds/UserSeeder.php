<?php
use App\Models\User;
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
      DB::table('users')->insert(array(
        array('id'=>0,'email'=>'admin@example.com','first_name'=>'Admin', 'last_name'=>'Admin','password'=>bcrypt("password"),'admin'=>true )
      ));

       factory(User::class, 50)->create();
    }
}
