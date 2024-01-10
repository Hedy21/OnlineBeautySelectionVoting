<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNoOfVoteToVotersTable extends Migration
{
    public function up()
{
    Schema::table('voters', function (Blueprint $table) {
        $table->integer('noOfVote')->default(1)->nullable();
    });
}


    public function down()
    {
        Schema::table('voters', function (Blueprint $table) {
            $table->dropColumn('noOfVote');
        });
    }
}
