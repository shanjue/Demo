<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HomeTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testHome()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }
    public function testKutholshinlink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->click('@kutholshin-link')
                ->assertSee('Kutholshin');
        });
    }
}
