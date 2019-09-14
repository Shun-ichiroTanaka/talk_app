<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        // up()には、DBに変更を加えたい処理内容を記述
        // 「ロールバック」とは、DBへの変更した処理を「戻す」ことを言います。
        // 実際の現場でもよく使われ、新たに機能を追加するなど開発をする際にDBのカラムなりを変更する事が多々あります。
        // その際に「不具合」が出てしまう事があるため、その場合に「ロールバック」をして正常だった状態までDBの状態を元に戻すことがあります。
        // php artisan migrate:rollback
        Schema::create('talks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('body');
            $table->string('photo');
            $table->string('movie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    // down()には、「ロールバック」した場合のために「変更したDBから元に戻す処理」を記述
    {
        Schema::dropIfExists('talks');
    }
}
