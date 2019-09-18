<?php

use App\Constants\Attribute;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbModelo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Attribute::TB_MODELO, function (Blueprint $table) {
            $table
                ->bigIncrements(Attribute::CD_MODELO)
                ->comment('Código chave da tabela PK, Identity');
            $table
                ->string(Attribute::NO_MODELO,250)
                ->comment('Nome do modelo do veiculo');
            $table
                ->string(Attribute::DS_ESPECIE,250)
                ->nullable()
                ->comment('Descrição do modelo do veiculo');
            $table
                ->string(Attribute::NO_VERSAO,250)
                ->nullable()
                ->comment('Versão do modelo do veiculo');
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
        Schema::dropIfExists(Attribute::TB_MARCA);
    }
}
