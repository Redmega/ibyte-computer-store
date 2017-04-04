<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert(array(
           array('id'=>1,'email'=>'john@clivern.com','first_name'=>'john', 'last_name'=>'Don','password'=>"ju1234",'admin'=>false ),
           array('id'=>2,'email'=>'jane@clivern.com','first_name'=>'jane', 'last_name'=>'Dane','password'=>"e3qfga",'admin'=>false ),
           array('id'=>3,'email'=>'jack@clivern.com','first_name'=>'jack', 'last_name'=>'Dack','password'=>"a432fg",'admin'=>true ),
           array('id'=>4,'email'=>'jill@clivern.com','first_name'=>'jill', 'last_name'=>'Dill','password'=>"at43g",'admin'=>false ),
           array('id'=>5,'email'=>'jim@clivern.com','first_name'=>'jim', 'last_name'=>'Dim','password'=>"sfdgre",'admin'=>false ),
      
         ));
    }
}
