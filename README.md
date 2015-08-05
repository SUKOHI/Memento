# Memento
A PHP package mainly developed for Laravel to check result using boolean value.  
(This is for Laravel 5+. [For Laravel 4.2](https://github.com/SUKOHI/Memento/tree/1.0))


Installation
====

Add this package name in composer.json

    "require": {
      "sukohi/memento": "2.*"
    }

Execute composer command.

    composer update

Register the service provider in app.php

    'providers' => array(  
        ...Others...,  
        Sukohi\Memento\MementoServiceProvider::class,
    )

Also alias

    'aliases' => array(  
        ...Others...,  
        'Memento'   => Sukohi\Memento\Facades\Memento::class
    )

Usage
====

    $boolean = true;
    $memento = \Memento::set($boolean)
                ->set(function(){

                    return \Item::where('id', 1)->exists();

                });

    if($memento->allTrue()) {

        echo 'All True';

    }

    if($memento->allFalse()) {

        echo 'All False';

    }

    if($memento->hasTrue()) {

        echo 'Has True';

    }

    if($memento->hasFalse()) {

        echo 'Has False';

    }
        
License
====

This package is licensed under the MIT License.

Copyright 2015 Sukohi Kuhoh
