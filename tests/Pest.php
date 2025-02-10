<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| O Pest permite definir quais classes e traits serão utilizadas nos testes.
|
*/

uses(TestCase::class)->in('Feature');

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| Aqui você pode definir extensões para a função "expect()".
|
*/

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

/*
|--------------------------------------------------------------------------
| Funções Auxiliares
|--------------------------------------------------------------------------
|
| Você pode adicionar funções globais que ajudam nos testes.
|
*/

function something()
{
    // ..
}
