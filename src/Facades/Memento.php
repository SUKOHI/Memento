<?php namespace Sukohi\Memento\Facades;

use Illuminate\Support\Facades\Facade;

class Memento extends Facade {

    protected static function getFacadeAccessor() {

        return 'memento';

    }

}