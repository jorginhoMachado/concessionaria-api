<?php

namespace Tests\Feature\Http\Controller;

use Tests\Feature\TestCase;

abstract class ExampleTest extends TestCase
{
    public function testDefaultApiPage()
    {
        $response = $this->get('api');
        $response->assertStatus(404);
    }
}
