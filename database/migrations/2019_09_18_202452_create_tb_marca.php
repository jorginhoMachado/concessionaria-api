<?php

use App\Constants\Attribute;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbMarca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Attribute::TB_MARCA, function (Blueprint $table) {
            $table
                ->bigIncrements(Attribute::CD_MARCA)
                ->comment('Código chave da tabela PK, Identity');
            $table
                ->string(Attribute::NO_MARCA,250)
                ->comment('Nome da marca do veiculo');
            $table
                ->string(Attribute::DS_NACIONALIDADE,250)
                ->comment('Nacionalidade da marca');
            $table
                ->string(Attribute::SG_NACIONALIDADE,3)
                ->comment('Sigla da nacionalidade da marca');
            $table
                ->integer(Attribute::NR_FUNDACAO)
                ->comment('Ano de fundação da marca');
            $table
                ->string(Attribute::NO_FUNDADOR,250)
                ->comment('Nome do fundador da marca');
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
