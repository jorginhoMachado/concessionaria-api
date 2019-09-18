<?php

use App\Constants\Attribute;
use App\Models\Marca;
use Illuminate\Database\Seeder;

class MarcaPt1Seeder extends Seeder
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
                Attribute::NO_MARCA => 'ABARTH',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'ALFA ROMEO',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'ASTON MARTIN',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'AUDI',
                Attribute::TS_CRIADO => new \DateTime(),],
            [
                Attribute::NO_MARCA => 'BENTLEY',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'BMW',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'CATERHAM',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'CHEVROLET',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'CHRYSLER',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'CITROEN',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'CORVETTE',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'DACIA',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'DAEWOO',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'DAIHATSU',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'DODGE',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'DS',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'DUCATI',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'FERRARI',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'FIAT',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'FORD',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'GALLOPER',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'HARLEY DAVIDSON',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'HONDA',
                Attribute::TS_CRIADO => new \DateTime(),
            ]
        ];
        $this->model->insert($data);
    }
}
