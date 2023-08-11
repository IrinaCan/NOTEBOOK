<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->postJson('store', [
            'name' => 'Sally Pretty Main',
            'company' => 'Pretty',
            'phone' => '357357357',
            'email' => 'sallysallymain@yandex.ru',
            'birthday' => '2000-09-08',
            'foto' => 'image/sally.png'
        ]);

        $response
            ->assertStatus(200);
            

        $response->dump();
    }
}
