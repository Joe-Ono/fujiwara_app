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
        Schema::create('groupuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('group_name');
            $table->string('representative_name');
            $table->string('email');
            $table->string('post_code');
            $table->string('adrress');
            $table->string('phone_number');
            $table->string('workplace');
            $table->string('workplace_phone_number');
            $table->date('date_of_use');
            $table->time('time_of_use');
            $table->string('facilities_to_use');
            $table->string('equipment_to_use');
            $table->text('activity_contents');
            $table->string('member1_name');
            $table->string('member1_adress');
            $table->string('member2_name');
            $table->string('member2_adress');
            $table->string('member3_name');
            $table->string('member3_adress');
            $table->string('member4_name');
            $table->string('member4_adress');
            $table->string('member5_name');
            $table->string('member5_adress');
            $table->string('member6_name');
            $table->string('member6_adress');
            $table->string('member7_name');
            $table->string('member7_adress');
            $table->string('member8_name');
            $table->string('member8_adress');
            $table->string('member9_name');
            $table->string('member9_adress');
            $table->string('member10_name');
            $table->string('member10_adress');
            $table->string('member11_name');
            $table->string('member11_adress');
            $table->string('member12_name');
            $table->string('member12_adress');
            $table->string('member13_name');
            $table->string('member13_adress');
            $table->string('member14_name');
            $table->string('member14_adress');
            $table->string('member15_name');
            $table->string('member15_adress');
            $table->string('member16_name');
            $table->string('member16_adress');
            $table->string('member17_name');
            $table->string('member17_adress');
            $table->string('member18_name');
            $table->string('member18_adress');
            $table->string('member19_name');
            $table->string('member19_adress');
            $table->string('member20_name');
            $table->string('member20_adress');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groupuses');
    }
};
