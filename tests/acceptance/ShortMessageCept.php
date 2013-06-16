<?php
$I = new WebGuy($scenario);

$I->wantTo('write a too short message');

$I->amOnPage('/');

$I->see('You have arrived');

$I->fillField('message', 'Short');

$I->click('Submit');

$I->dontSee('Short');

$I->see('Message must be at least 6 characters long');