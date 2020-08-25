<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('vacancies', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->integer('salary_from')->nullable();
            $table->integer('salary_to')->nullable();
            $table->timestamp('archived_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
}
