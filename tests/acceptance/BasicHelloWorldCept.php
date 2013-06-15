<?php
$I = new WebGuy($scenario);
$I->wantTo('write a basic message');

$I->amOnPage('/');

$I->see('You have arrived.');

$I->fillField('message', 'This is my message!');

$I->click('Submit');

$I->see('This is my message!');

$I->see('Successfully posted your message!');