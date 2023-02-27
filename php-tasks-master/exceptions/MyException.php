<?php

class MyException {

    private $e;

    public function mythrow($i) {
        if ($i % 2 == 0){
            throw new \Exception("Число {$i} не может быть чётным \\");
        }
        
    }

    public function tryRead() {
        try {
            $i = MyException::mythrow(rand(1, 20));
        } catch (\Exception $e) {
            echo $e->getMessage();
            return 'exception';
        } finally {
            return 'passed';
        }
    }
}
$result = new MyException();
print_r($result->tryRead());
