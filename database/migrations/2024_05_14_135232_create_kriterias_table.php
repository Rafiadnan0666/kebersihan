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
        Schema::create('kriteria', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('lantai_bersih')->comment('Tidak ada pakaian dan handuk diatas kasur');
            $table->tinyInteger('jendela_pintu_bersih')->comment('Jendela dan pintu bersih dan tidak berdebu');
            $table->tinyInteger('kamar_rapi_bersih')->comment('Kamar dalam keadaan rapi dan bersih');
            $table->tinyInteger('tidak_kasur_disimpan_dibawah')->comment('Tidak ada kasur disimpan dibawah');
            $table->tinyInteger('alat_makan_mandi_disimpan_tempatnya')->comment('Alat makan dan mandi disimpan pada tempatnya');
            $table->tinyInteger('tidak_pakaian_bergantungan_sembarangan')->comment('Pakaian tidak bergantungan sembarangan');
            $table->tinyInteger('toilet_kamar_bersih')->comment('Toilet kamar bersih tidak berlumut');
            $table->unsignedBigInteger('place_id');
            $table->foreign('place_id')->references('id')->on('place');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kriteria');
    }
};
