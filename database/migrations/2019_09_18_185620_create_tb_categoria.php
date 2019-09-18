<?php

use App\Constants\Attribute;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Attribute::TB_CATEGORIA, function (Blueprint $table) {
            $table->bigIncrements(Attribute::CD_CATEGORIA)
                ->comment('Código chave da tabela PK, Identity');
            $table
                ->string(Attribute::NO_CATEGORIA,250)
                ->comment('Nome da categoria');
            $table
                ->string(Attribute::DS_CATEGORIA,250)
                ->nullable()
                ->comment('Descrição da categoria');
            $table
                ->timestamp(Attribute::TS_CRIADO)
                ->comment('Data e hora de criação do registro');
            $table
                ->timestamp(Attribute::TS_ATUALIZADO)
                ->nullable()
                ->comment('Data e hora de atualização do registro');
            $table
                ->softDeletes(Attribute::TS_REMOVIDO)
                ->comment('Data e hora de atualização do registro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Attribute::TB_CATEGORIA);
    }
}
