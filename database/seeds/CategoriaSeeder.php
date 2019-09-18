<?php

use App\Constants\Attribute;
use App\Models\Categoria;
use Illuminate\Database\Seeder;
use PhpParser\Builder;

class CategoriaSeeder extends Seeder
{
    /** @var Categoria $model */
    public $model;

    /**
     * CategoriaSeeder constructor.
     * @param Categoria $model
     */
    public function __construct(Categoria $model)
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
                Attribute::NO_CATEGORIA => 'ENTRADA',
                Attribute::DS_CATEGORIA => 'ENTRADA',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'HATCH PEQUENO',
                Attribute::DS_CATEGORIA => 'HATCH PEQUENO',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'HATCH MÉDIO',
                Attribute::DS_CATEGORIA => 'HATCH MÉDIO',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'SEDANS PEQUENO',
                Attribute::DS_CATEGORIA => 'SEDANS PEQUENO',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'SEDANS COMPACTOS',
                Attribute::DS_CATEGORIA => 'SEDANS COMPACTOS',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'SEDANS MÉDIO',
                Attribute::DS_CATEGORIA => 'SEDANS MÉDIO',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'SEDANS GRANDES',
                Attribute::DS_CATEGORIA => 'SEDANS GRANDES',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'SUV',
                Attribute::DS_CATEGORIA => 'SUV',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'SW MÉDIO',
                Attribute::DS_CATEGORIA => 'SW MÉDIO',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'SW GRANDE',
                Attribute::DS_CATEGORIA => 'SW GRANDE',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'MONOCAB',
                Attribute::DS_CATEGORIA => 'MONOCAB',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'GRANCAB',
                Attribute::DS_CATEGORIA => 'GRANCAB',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'SPORTS',
                Attribute::DS_CATEGORIA => 'SPORTS',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'PICK-UPS PEQUENOS',
                Attribute::DS_CATEGORIA => 'PICK-UPS PEQUENOS',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'PICK-UPS GRANDES',
                Attribute::DS_CATEGORIA => 'PICK-UPS GRANDES',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'FURGÕES',
                Attribute::DS_CATEGORIA => 'FURGÕES',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
            [
                Attribute::NO_CATEGORIA => 'FURGÕES PEQUENOS',
                Attribute::DS_CATEGORIA => 'FURGÕES PEQUENOS',
                Attribute::TS_CRIADO => new \DateTime(),
            ],
        ];
        $this->model->insert($data);
    }
}
