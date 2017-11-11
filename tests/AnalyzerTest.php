<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 11.11.2017
 * Time: 05:03
 */


class AnalyzerTest extends PHPUnit_Framework_TestCase
{


    public function testIsThereAnySyntaxError(){
        $var = new Meminuygur\Analyzer\Analyzer();
        $this->assertTrue(is_object($var));
        unset($var);
    }


}
