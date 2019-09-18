<?php

use App\Constants\Attribute;
use App\Models\Marca;
use Illuminate\Database\Seeder;

class MarcaPt2Seeder extends Seeder
{
    /** @var Marca $model */
    public $model;

    /**
     * MarcaPt1Seeder constructor.
     * @param Marca $model
     */
    public function __construct(Marca $model)
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
                Attribute::NO_MARCA => 'HUMMER',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'HYUNDAI',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'JAGUAR',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'JEEP',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'KASINSKI',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'KAWASAKI',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'KIA',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'LADA',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'LAMBORGHINI',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'LANCIA',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'LAND ROVER',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'LEXUS',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'LOTUS',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'MASERATI',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'MAYBACH',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'MAZDA',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'MERCENDES-BENZ',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'MG',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'MINI',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'MITSUBISHI',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'MORGAN',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'NISSAN',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'OPEL',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'PEUGEOT',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'PORSCHE',
                Attribute::TS_CRIADO => new \DateTime(),
            ]
        ];
        $this->model->insert($data);
    }
}
