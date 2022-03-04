<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;
use Config\Constants\UserConst;
use App\Models\User;

class InsertDataIntoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        User::create([
            'name'     => 'user1',
            'type'     => config('constants.userType.QA.value'),
            'email'    => 'user1@gmail.com',
            'password' => Hash::make('iamqa')
        ]);

        User::create([
            'name'     => 'user2',
            'type'     => config('constants.userType.RD.value'),
            'email'    => 'user2@gmail.com',
            'password' => Hash::make('iamrd')
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
