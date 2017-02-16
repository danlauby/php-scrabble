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

        function compareLetters($new_word)
        {
            $input_letters = str_split($new_word);
            $score = 0;

            $letters_add_one = ['a', 'e', 'i', 'o', 'u', 'l', 'n', 'r', 's', 't' ];
            $letters_add_two = ['d', 'g'];
            $letters_add_three = ['b', 'c', 'm', 'p'];
            $letters_add_four = ['f', 'h', 'v', 'w', 'y'];
            $letters_add_five = ['k'];


            foreach ($input_letters as $input_letter) {
                $position_one = array_search($input_letter, $letters_add_one);
                $position_two = array_search($input_letter, $letters_add_two);
                $position_three = array_search($input_letter, $letters_add_three);
                $position_four = array_search($input_letter, $letters_add_four);
                $position_five = array_search($input_letter, $letters_add_five);

                if ($position_one !== false) {
                    $score++;
                } elseif ($position_two !== false) {
                    $score += 2;
                } elseif ($position_three !== false) {
                    $score += 3;
                } elseif ($position_four !== false) {
                    $score += 4;
                } elseif ($position_five !== false) {
                    $score += 5;
                }
            }
            return $score;
        }
    }
 ?>
