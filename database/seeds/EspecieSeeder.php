<?php

use App\Constants\Attribute;
use App\Models\Especie;
use Illuminate\Database\Seeder;

class EspecieSeeder extends Seeder
{
    /** @var Especie $model */
    public $model;

    /**
     * EspecieSeeder constructor.
     * @param Especie $model
     */
    public function __construct(Especie $model)
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
                Attribute::NO_ESPECIE => 'Passageiro',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_ESPECIE => 'Carga',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_ESPECIE => 'Misto',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_ESPECIE => 'Competição',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_ESPECIE => 'Tração',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_ESPECIE => 'Especial',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_ESPECIE => 'Coleção',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
        ];
        $this->model->insert($data);
    }
}
