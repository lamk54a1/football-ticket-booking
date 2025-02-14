<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGameIdToStandsTable extends Migration
{
    public function up()
    {
        Schema::table('stands', function (Blueprint $table) {
            $table->foreignId('game_id')->nullable()->constrained()->onDelete('cascade'); // Thêm nullable để tránh lỗi
        });
    }

    public function down()
    {
        Schema::table('stands', function (Blueprint $table) {
            $table->dropForeign(['game_id']);
            $table->dropColumn('game_id');
        });
    }
}
