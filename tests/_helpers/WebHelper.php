<?php
namespace Codeception\Module;

// here you can define custom functions for WebGuy 

class WebHelper extends \Codeception\Module
{
    public function _before(\Codeception\TestCase $test) {
        exec('php artisan migrate:refresh');
    }
}
