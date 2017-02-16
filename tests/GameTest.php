<?php
    require_once "src/Game.php";

    class GameTest extends PHPUnit_Framework_TestCase
    {
        function test_compareForOne()
        {
            // Arrange
            $test_newGame = new Game;
            $input_word = "head";

            // Act
            $result = $test_newGame->compareLetters($input_word);

            // Assert
            $this->assertEquals(8, $result);
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

        function test_compareForThree()
        {
            // Arrange
            $test_newGame = new Game;
            $input_word = "bump";

            // Act
            $result = $test_newGame->compareLetters($input_word);

            // Assert
            $this->assertEquals(10, $result);
        }

        function test_compareForFour()
        {
            // Arrange
            $test_newGame = new Game;
            $input_word = "wave";

            // Act
            $result = $test_newGame->compareLetters($input_word);

            // Assert
            $this->assertEquals(10, $result);
        }

        function test_compareForFive()
        {
            // Arrange
            $test_newGame = new Game;
            $input_word = "milk";

            // Act
            $result = $test_newGame->compareLetters($input_word);

            // Assert
            $this->assertEquals(19, $result);
        }



    }
 ?>
