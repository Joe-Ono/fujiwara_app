<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')  // 紐付け先がBigIncrements型の場合のみ使用できる
                ->constrained()  // テーブル名が異なる場合は引数にしてい
                ->cascadeOnDelete()   // 紐付け先が削除された場合の動作
                ->cascadeOnUpdate();  // 紐付け先が更新された場合の動作
            // 上記以外の方法
            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
            $table->string('title');
            $table->string('body');
            $table->string('start');
            $table->string('end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
