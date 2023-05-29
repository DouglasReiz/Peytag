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
        Schema::table('users', function (Blueprint $table) {
            $table->string('nome_loja')->nullable()->after('name');
            $table->string('endereco')->nullable()->after('email');
            $table->time('horario_funcionamento')->nullable();
            $table->string('contato_celular')->nullable();
            $table->boolean('is_whatsapp')->nullable()->default(false);
            $table->string('contato_fixo')->nullable();
            $table->string('serviços')->nullable();
            $table->string('link_instagram')->nullable();
            $table->string('link_telegram')->nullable();
            $table->string('imagem_foco')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nome_loja');
            $table->dropColumn('endereco');
            $table->dropColumn('horario_funcionamento');
            $table->dropColumn('contato_celular');
            $table->dropColumn('is_whatsapp');
            $table->dropColumn('contato_fixo');
            $table->dropColumn('serviços');
            $table->dropColumn('link_instagram');
            $table->dropColumn('link_telegram');
            $table->dropColumn('imagem_foco');
        });
    }
};
