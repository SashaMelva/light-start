<?php

trait UpperNameTrait {
    ...
    }
    
    class User {
    ...
        public string $name;
        public function __construct(string $name){
            $this->name = $name;
        }
    }
    
    class Customer {
    ...
        public string $name;
        public function __construct(string $name){
            $this->name = $name;
        }
    }
    
    assert(
        (new User('vova'))->upperName() == 'VOVA'
    );
    
    assert(
        (new Customer('vova'))->upperName() == 'VOVA'
    );
