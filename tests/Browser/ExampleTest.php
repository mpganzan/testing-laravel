<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;
use App\Data;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $val = 'Email';
        $this->browse(function ($browser) {
            $val = 'Name';
            $browser->visit('/')
                    ->assertSee($val)
                    ->assertDontSee('Middle');
        });
    }
    
    public function testPutDataToDb()
    {

        $user = factory(Data::class)->create();

        $this->assertDatabaseHas('datas', [
            'fname' => 'Bradly'
        ]);
    }

    
}
