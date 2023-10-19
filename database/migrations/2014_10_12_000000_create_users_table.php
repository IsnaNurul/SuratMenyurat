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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password');
            $table->text('alamat');
            $table->string('telp');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->bigInteger('id_unit_kerja')->unsigned();
            $table->enum('role', ['admin', 'operator']);
            $table->foreign('id_unit_kerja')->references('id')->on('unit_kerjas')->onUpdate('cascade')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
