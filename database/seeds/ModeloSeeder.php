<?php

use App\Models\Modelo;
use Illuminate\Database\Seeder;

class ModeloSeeder extends Seeder
{
    /** @var Modelo $model */
    public $model;

    /**
     * ModeloSeeder constructor.
     * @param Modelo $model
     */
    public function __construct(Modelo $model)
    {
        $this->model = $model;
    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $this->model->insert($data);
    }
}
