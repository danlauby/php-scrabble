<?php
    class Game
    {
        // private $word;
        //
        // function __construct($new_word)
        // {
        //     $this->word = $new_word;
        // }
        //
        // function setWord($new_word)
        // {
        //     $this->word = (string) $new_word;
        // }
        //
        // function getWord()
        // {
        //     return $this->word;
        // }

        function compareForOne($new_word)
        {
            $letters_to_test = ['a', 'e', 'i', 'o', 'u', 'l', 'n', 'r', 's', 't' ];
            $input_letters = str_split($new_word);
            $score = 0;
            $matches = array_intersect($letters_to_test, $input_letters);

            foreach($matches as $match) {
                $score++;
            }
            return $score;
        }

    }
 ?>
