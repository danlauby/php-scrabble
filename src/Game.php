<?php
    class Game
    {
        private $word;

        function __construct($new_word)
        {
            $this->word = $new_word;
        }

        function setWord($new_word)
        {
            $this->word = (string) $new_word;
        }

        function getWord()
        {
            return $this->word;
        }

        function compareForOne($new_word)
        {
            
        }

    }
 ?>
