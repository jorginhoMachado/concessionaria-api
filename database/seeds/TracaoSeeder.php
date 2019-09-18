<?php

use App\Constants\Attribute;
use App\Models\Tracao;
use Illuminate\Database\Seeder;

class TracaoSeeder extends Seeder
{
    /** @var Tracao $model */
    public $model;

    /**
     * TracaoSeeder constructor.
     * @param Tracao $model
     */
    public function __construct(Tracao $model)
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
              Attribute::NO_TRACAO => 'Automotor',
              Attribute::TS_CRIADO => new \DateTime(),
          ],
          [
             Attribute::NO_TRACAO => 'Elétrico',
             Attribute::TS_CRIADO => new \DateTime(),
          ],
          [
             Attribute::NO_TRACAO => 'Propulsão humana',
             Attribute::TS_CRIADO => new \DateTime(),
          ],
          [
              Attribute::NO_TRACAO => 'Propulsão animal',
              Attribute::TS_CRIADO => new \DateTime(),
          ],
          [
             Attribute::NO_TRACAO => 'Reboque',
             Attribute::TS_CRIADO => new \DateTime(),
          ],
          [
            Attribute::NO_TRACAO => 'Semi Reboque',
            Attribute::TS_CRIADO => new \DateTime(),
          ],
        ];
        $this->model->insert($data);
    }
}
