<?php
    require_once "src/Game.php";

    class GameTest extends PHPUnit_Framework_TestCase
    {
        function test_compareForOne()
        {
            // Arrange
            $test_newGame = new Game;
            $input_word = "lol";

            // Act
            $result = $test_newGame->compareLetters($input_word);

            // Assert
            $this->assertEquals(3, $result);
        }

        function test_compareForTwo()
        {
            // Arrange
            $test_newGame = new Game;
            $input_word = "dog";

            // Act
            $result = $test_newGame->compareLetters($input_word);

            // Assert
            $this->assertEquals(5, $result);
        }


    }
 ?>
