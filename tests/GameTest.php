<?php
    require_once "src/Game.php";

    class GameTest extends PHPUnit_Framework_TestCase
    {
        function test_compareForOne()
        {
            // Arrange
            $test_newGame = new Game;
            $input_word = "hello";

            // Act
            $result = $test_newGame->compareForOne($input_word);

            // Assert
            $this->assertEquals(3, $result);
        }
    }
 ?>
