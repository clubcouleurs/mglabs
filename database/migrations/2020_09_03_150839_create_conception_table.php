<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConceptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conception', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            
            $table->string('type');
            $table->text('logo')->nullable();
            $table->text('texte_additionnels')->nullable();
            $table->string('dimensions');
            $table->string('couleurs')->nullable();
            $table->text('description_client')->nullable();
            $table->text('activities_client')->nullable();

            $table->text('positionnement')->nullable();
            $table->string('cible')->nullable();
            $table->string('age_cible')->nullable();
            $table->string('sex_cible')->nullable();
            $table->text('activities_cible')->nullable();
            

            $table->string('tel')->nullable();
            $table->string('rs_entreprise')->nullable();
            $table->string('slogan')->nullable();
            $table->string('style')->nullable();
            $table->string('font')->nullable();
            $table->string('tel')->nullable();

            $table->timestamps('lancer_at');
            $table->timestamps('validate_at');

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
        Schema::dropIfExists('conception');
    }
}
