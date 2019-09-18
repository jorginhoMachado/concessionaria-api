<?php

use App\Constants\Attribute;
use App\Models\Carroceria;
use Illuminate\Database\Seeder;

class CarroceriaPt1Seeder extends Seeder
{
    /** @var Carroceria $model */
    public $model;

    /**
     * CarroceriaPt1Seeder constructor.
     * @param Carroceria $model
     */
    public function __construct(Carroceria $model)
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
                Attribute::NO_CARROCERIA => 'Ambulância',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Bombeiro',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Basculante',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Basculante/Mec Operacional',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Basculante/Cabine Linear',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Cabine Linear/Prancha/Mec Operacional',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Cabine Suplementar',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Comércio',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Contêiner',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Contêiner/Carroceria Aberta',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Contêiner/Carroceria Aberta/Cabine Dupla',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Contêiner/Carroceria Aberta/Linear',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Carroceria Aberta',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Carroceria Aberta/Cabine Estendida',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Carroceria Aberta/Intercambiável/Cabine Suplementar',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Carroceria Aberta/Mec Operacional/Cabine Suplementar',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Carroceria Fechada',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Carroceria Fechada/Cabine Suplementar',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Comboio',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Furgão',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Funeral',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
        ];
        $this->model->insert($data);
    }
}
