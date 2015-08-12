<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase {

        function test_game_playerTwoRock() {
            $test_RockPaperScissors = new RockPaperScissors;
            $player_one = "rock";

            $result = $test_RockPaperScissors->game($player_one);

            $this->assertTrue($result == "DRAW!" || $result == "Player One Wins!" || $result == "Computer Wins!");
        }
    }

    ?>
