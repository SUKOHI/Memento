# Memento
A PHP package mainly developed for Laravel to check result using boolean value.

Installation&setting for Laravel
====

After installation using composer, add the followings to the array in  app/config/app.php

    'providers' => array(  
        ...Others...,  
        'Sukohi\Memento\MementoServiceProvider',
    )

Also

    'aliases' => array(  
        ...Others...,  
        'Memento' => 'Sukohi\Memento\Facades\Memento',
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
