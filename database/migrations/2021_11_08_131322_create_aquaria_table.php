<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAquariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aquaria', function (Blueprint $table) {
            $table->id();
            $table->string('glass_type');
            $table->decimal('size');
            $table->string('unit')->default('litres');
            $table->string('shape');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        DB::table('aquaria')->insert(
            [     
                [
                    'glass_type' => 'Laminated', 
                    'size' => 100,
                    'shape' => 'Square'
                ],     
                [
                    'glass_type' => 'Shatterproof', 
                    'size' => 70,
                    'shape' => 'Rectangle'
                ],
                [
                    'glass_type' => 'Float', 
                    'size' => 150,
                    'shape' => 'Pyramid'
                ],
                [
                    'glass_type' => 'Tinted', 
                    'size' => 75,
                    'shape' => 'Square'
                ]
            ]
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aquaria');
    }
}
