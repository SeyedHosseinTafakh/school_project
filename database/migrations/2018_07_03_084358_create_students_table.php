<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('code_melli');
            $table->string('name_mostaar')->nullable();
            $table->string('tarikh_tavalod');
            $table->string('shenasname_harf')->nullable();
            $table->string('shenasname_adad')->nullabel();
            $table->string('shenasname_raghami')->nullabel();
//            $table->string('shomare_chand_raghami');
            $table->string('roosta_tavalod');
            $table->string('ostane_tavalod');
            $table->string('shahrestan_tavalod');
            $table->string('din');
            $table->string('mazhab');
            $table->string('address_daghigh');
            $table->string('address_ostan');
//            $table->string('address_shahrestan');
//            $table->string('address');
            $table->integer('chandomin_bachehye_khanevade');
            $table->string('email');
            $table->string('code_posti');
            $table->string('mahale_sodoor_ostan');
            $table->string('mahale_sodoor_shahrestan');
            $table->string('mahale_sodoor_bakhsh');
            $table->string('phone_manzel');
            $table->string('esme_phone_zaroori');
            $table->string('phone_zaroori_sabet');
            $table->string('phone_zaroori_hamrah');
            $table->string('phone_zaroori_nesbat_ba_daneshamooz');

            $table->integer('father_id');
            $table->integer('mother_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
