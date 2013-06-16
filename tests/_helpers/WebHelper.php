<?php
namespace Codeception\Module;

// here you can define custom functions for WebGuy 

class WebHelper extends \Codeception\Module
{
    public function _before(\Codeception\TestCase $test) {
        exec('mysql -u root -e \'drop database if exists gommunity;\'');
        exec('mysql -u root -e \'create database gommunity;\'');
        exec('php artisan migrate:install');
        exec('php artisan migrate');
    }
}
