<?php

use App\Constants\Attribute;
use App\Models\Marca;
use Illuminate\Database\Seeder;

class MarcaPt3Seeder extends Seeder
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
                Attribute::NO_MARCA => 'RENAULT',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'ROLLS-ROYCE',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'ROVER',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'SAAB',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'SEAT',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'SKODA',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'SMART',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'SSANG YONG',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'SUBARU',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'SUZUKI',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'TATA',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'TESLA',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'TOYOTA',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'Triumph',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'VOLKSWAGEM',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'VOLVO',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_MARCA => 'YAMAHA',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
        ];
        $this->model->insert($data);
    }
}
