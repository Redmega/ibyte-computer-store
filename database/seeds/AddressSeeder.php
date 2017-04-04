<?php

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete addresses table records
        DB::table('addresses')->delete();

        //insert dummy data
        DB::table('addresses')->insert(array(
          array('id' =>'Addy1','user_id' =>1, 'street'=>'123 Street','unit'=>'45', 'city'=>'Miami', 'state'=>'FL','zipcode'=>'12345','country'=>'USA','type'=>'',0,timestamps()),
          array('id' =>'Addy2','user_id' =>2, 'street'=>'123 Street','unit'=>'45', 'city'=>'Miami', 'state'=>'FL','zipcode'=>'12345','country'=>'USA','type'=>'',0,timestamps()),
          array('id' =>'Addy3','user_id' =>3, 'street'=>'123 Street','unit'=>'45', 'city'=>'Miami', 'state'=>'FL','zipcode'=>'12345','country'=>'USA','type'=>'',0,timestamps()),
          array('id' =>'Addy4','user_id' =>4, 'street'=>'123 Street','unit'=>'45', 'city'=>'Miami', 'state'=>'FL','zipcode'=>'12345','country'=>'USA','type'=>'',0,timestamps()),
          array('id' =>'Addy5','user_id' =>5, 'street'=>'123 Street','unit'=>'45', 'city'=>'Miami', 'state'=>'FL','zipcode'=>'12345','country'=>'USA','type'=>'',0,timestamps()),
          array('id' =>'Addy6','user_id' =>6, 'street'=>'123 Street','unit'=>'45', 'city'=>'Miami', 'state'=>'FL','zipcode'=>'12345','country'=>'USA','type'=>'',0,timestamps()),
          array('id' =>'Addy7','user_id' =>7, 'street'=>'123 Street','unit'=>'45', 'city'=>'Miami', 'state'=>'FL','zipcode'=>'12345','country'=>'USA','type'=>'',0,timestamps()),
          array('id' =>'Addy8','user_id' =>8, 'street'=>'123 Street','unit'=>'45', 'city'=>'Miami', 'state'=>'FL','zipcode'=>'12345','country'=>'USA','type'=>'',0,timestamps()),
          array('id' =>'Addy9','user_id' =>9, 'street'=>'123 Street','unit'=>'45', 'city'=>'Miami', 'state'=>'FL','zipcode'=>'12345','country'=>'USA','type'=>'',0,timestamps()),
          array('id' =>'Addy10','user_id' =>10, 'street'=>'123 Street','unit'=>'45', 'city'=>'Miami','state'=> 'FL','zipcode'=>'12345','country'=>'USA','type'=>'',0,timestamps()),
          array('id' =>'Addy11','user_id' =>11, 'street'=>'123 Street','unit'=>'45', 'city'=>'Miami', 'state'=>'FL','zipcode'=>'12345','country'=>'USA','type'=>'',0,timestamps()),

        ));
      }
}
