<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 11.11.2017
 * Time: 05:03
 */


class AnalyzerTest extends PHPUnit_Framework_TestCase
{


    public function testBeforeCharsValid()
    {

        $text = 'football vs soccer';
        $letter = 'f';
        $analyzer = new Meminuygur\Analyzer\Analyzer();
        $analyzer->setPhrase($text);
        $this->assertTrue($analyzer->getBeforeChars($letter) == array('o'));

    }


    public function testAfterCharsIsEmpty()
    {

        $text = 'football vs soccer';
        $letter = 'f';
        $analyzer = new Meminuygur\Analyzer\Analyzer();
        $analyzer->setPhrase($text);
        $this->assertFalse($analyzer->getAfterChars($letter));

    }

    public function testAfterChars()
    {

        $text = 'football vs soccer';
        $letter = 'o';
        $analyzer = new Meminuygur\Analyzer\Analyzer();
        $analyzer->setPhrase($text);
        $this->assertTrue($analyzer->getAfterChars($letter) == ['f', 'o', 's']);

    }

    public function testMaxDistance()
    {

        $text = 'football vs soccer';
        $letter = 'o';
        $analyzer = new Meminuygur\Analyzer\Analyzer();
        $analyzer->setPhrase($text);
        $this->assertTrue($analyzer->getMaxDistance($letter) == 11);

    }

    public function testCountChar()
    {

        $text = 'football vs soccer';
        $letter = 'o';
        $analyzer = new Meminuygur\Analyzer\Analyzer();
        $analyzer->setPhrase($text);
        $this->assertTrue($analyzer->getCountValue($letter) == 3);
    }


}
