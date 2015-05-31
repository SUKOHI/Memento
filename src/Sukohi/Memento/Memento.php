<?php namespace Sukohi\Memento;

class Memento {

    private $_results = [];

    public function set($closure) {

        if(is_callable($closure)) {

            $this->_results[] = $closure();

        } else {

            $this->_results[] = $closure;

        }

        return $this;

    }

    public function allTrue() {

        return (!in_array(false, $this->_results));

    }

    public function allFalse() {

        return (!in_array(true, $this->_results));

    }

    public function hasTrue() {

        return (in_array(true, $this->_results));

    }

    public function hasFalse() {

        return (in_array(false, $this->_results));

    }

}