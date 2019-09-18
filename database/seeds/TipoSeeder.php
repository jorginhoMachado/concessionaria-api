<?php

use App\Constants\Attribute;
use App\Models\Tipo;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /** @var Tipo $model */
    public $model;

    /**
     * TipoSeeder constructor.
     * @param Tipo $model
     */
    public function __construct(Tipo $model)
    {
        $this->model = $model;
    }


    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $data = [
            [
                Attribute::NO_TIPO => 'Bicicleta',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Ciclomotor',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Motoneta',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Motocicleta',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Triciclo',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Quadriciclo',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Automóvel',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Microônibus',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Ônibus',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Bonde',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Reboque',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Semi reboque',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Charrete',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Camioneta',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Caminhonete',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Caminhão',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Caminhão Trator',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Trator de Rodas',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Trator de Esteiras',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Trator Misto',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Chassi Plataforma',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Utilitário',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Motor Casa',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Carroça',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_TIPO => 'Carro-de-mão',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
        ];
        $this->model->insert($data);
    }
}
