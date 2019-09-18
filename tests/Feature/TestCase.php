<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\CreatesApplication;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function getPaginateStructure($dataStructure = [])
    {
        return [
            'current_page',
            'data' => $dataStructure,
            'total',
            'per_page',
            'path',
            'from',
        ];
    }

    public function post($uri, array $data = [], array $headers = [])
    {
        $headers['Accept'] = 'application/json';
        return parent::post($uri, $data, $headers);
    }

    public function put($uri, array $data = [], array $headers = [])
    {
        $headers['Accept'] = 'application/json';
        return parent::put($uri, $data, $headers);
    }
}
