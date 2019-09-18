<?php

use App\Constants\Attribute;
use App\Models\Carroceria;
use Illuminate\Database\Seeder;

class CarroceriaPt2Seeder extends Seeder
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
                Attribute::NO_CARROCERIA => 'Inacabada',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Inacabada/Cabine Estendida',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Inacabada/Cabine Linear',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Limusine',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Mec Operacional',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Mec Operacional/Cabine Linear',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Mec Operacional/Cabine Tripla',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'polícia',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Prancha',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Prancha/Cabine Suplementar',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Prancha/Mec Operacional',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Prancha/Mec Operacional/Cabine Estendida',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Roll-on-Roll-of/Cabine Suplementar',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'SideCar',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Silo',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Silo/Basculante',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Silo/Basculante/Cabine Dupla',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Silo/Cabine Suplementar',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Tanque',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Tanque/Cabine Suplementar',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Tanque/Mec Operacional/Cabine Estendida',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Tanque Produto Perigoso',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Tanque Produto Perigoso/Cabine Estendida',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Tanque Produto Perigoso/Cabine Suplementar',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Tanque Produto Perigoso/Mec Operacional/Cabine Linear',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Trailler',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Transporte de Militar',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Transporte de Granito/Cabine Suplementar',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Transporte de Presos',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Transporte Recreativo',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Transporte de Trabalhadores',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Transporte de Toras',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Transporte de Toras/Mec Operacional/Cabine Estendida',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Transporte de Valores',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Transporte de Valores/ Mec Operacional',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Trío Elétrico',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Não se aplica',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CARROCERIA => 'Nenhuma',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
        ];
        $this->model->insert($data);
    }
}
