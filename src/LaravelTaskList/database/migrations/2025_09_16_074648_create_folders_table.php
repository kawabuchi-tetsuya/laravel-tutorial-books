<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoldersTable extends Migration
{
    // テーブルを明示的に指定する
    protected $table = 'folders';

    /**
     * Run the migrations.
     * folders テーブルと各列を作成する
     * 
     * @return void
     */
    public function up()
    {
        /**
         * folders Table create
         * column1 -> カラム名:id, 型:INTEGER, オプション:AUTO_INCREMENT
         * column2 -> カラム名:title, 型:VARCHAR(20)
         * column3 -> カラム名:created_at, 型:TIMESTAMP
         * column4 -> カラム名:updated_at, 型:TIMESTAMP
         */
        Schema::create('folders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * folders テーブルを削除する
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('folders');
    }
}
