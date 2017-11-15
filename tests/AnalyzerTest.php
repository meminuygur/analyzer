<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 11.11.2017
 * Time: 05:03
 */


class AnalyzerTest extends PHPUnit_Framework_TestCase
{


    public function testAfterCharsValid()
    {

        $text = 'football vs soccer';
        $letter = 'f';
        $analyzer = new Meminuygur\Analyzer\Analyzer();
        $analyzer->setPhrase($text);
        $this->assertTrue($analyzer->getAfterChars($letter) == array('o'));
        //unset($var);
    }


}
