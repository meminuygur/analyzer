<?php namespace Meminuygur\Analyzer;


Class Analyzer{


    public $phrase;

    public $phrase_array;



    /**
     * @param $phrase
     */
    public function setPhrase($phrase){

        if( strlen($phrase) < 255 ) {

            $this->phrase = $phrase;

            $this->phrase_array = str_split($phrase);

        } else{

            throw new Exception('Phrase cannot be over 255');

        }



    }

    /**
     * @return mixed
     */
    public function getPhrase(){

        return !is_null($this->phrase) ? $this->phrase : false ;

    }


    /**
     * @return mixed
     */
    public function getPhraseArray(){

        return $this->phrase_array;

    }


    /**
     * @param $char
     * @return mixed
     */
    public function getMaxDistance($char){

        $keys = array_keys($this->phrase_array, $char);

        return max($keys) != min($keys) ? (max($keys) - min($keys) - 1) : null;


    }


    /**
     * @param $char
     * @return mixed
     */
    public function getCountValue($char){

        return array_count_values($this->phrase_array)[$char];

    }


    /**
     * @param $char
     * @return array|bool
     */
    public function getBeforeChars($char){

        $keys =  array_keys($this->phrase_array, $char);

        $before_chars = [];

        foreach( $keys as $key) {

            if( $key < count($this->phrase_array)-1 ) {

                $before_chars[] = $this->phrase_array[$key+1];

            }

        }

        return (count($before_chars) > 0 ? $before_chars : false);

    }


    /**
     * @param $char
     * @return array|bool
     */
    public function getAfterChars($char){

        $keys =  array_keys($this->phrase_array, $char);

        $after_chars = [];

        foreach( $keys as $key) {

            if( $key > 0 ) {

                $after_chars[] = $this->phrase_array[$key-1];

            }

        }

        return (count($after_chars) > 0 ? $after_chars : false);


    }






}