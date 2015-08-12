<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase {

        function test_game_defaultDraw() {
            $test_RockPaperScissors = new RockPaperScissors;
            $player_one = "rock";
            $player_two = "rock";

            $result = $test_RockPaperScissors->game($player_one, $player_two);

            $this->assertEquals("DRAW!", $result);
        }

        function test_game_correctInput() {
            $test_RockPaperScissors = new RockPaperScissors;
            $player_one = "turkey";
            $player_two = "606";

            $result = $test_RockPaperScissors->game($player_one, $player_two);

            $this->assertEquals("Please answer only with 'rock', 'paper', or 'scissors'.", $result);
        }

        function test_game_caps() {
            $test_RockPaperScissors = new RockPaperScissors;
            $player_one = "ROCK";
            $player_two = "Rock";

            $result = $test_RockPaperScissors->game($player_one, $player_two);

            $this->assertEquals("DRAW!", $result);
        }

        function test_game_playerOneRockLose() {
            $test_RockPaperScissors = new RockPaperScissors;
            $player_one = "rock";
            $player_two = "paper";

            $result = $test_RockPaperScissors->game($player_one, $player_two);

            $this->assertEquals("Player Two Wins!", $result);
        }

        function test_game_playerOneRockWin() {
            $test_RockPaperScissors = new RockPaperScissors;
            $player_one = "rock";
            $player_two = "scissors";

            $result = $test_RockPaperScissors->game($player_one, $player_two);

            $this->assertEquals("Player One Wins!", $result);
        }

        function test_game_playerOnePaperWin() {
            $test_RockPaperScissors = new RockPaperScissors;
            $player_one = "paper";
            $player_two = "rock";

            $result = $test_RockPaperScissors->game($player_one, $player_two);

            $this->assertEquals("Player One Wins!", $result);
        }

        function test_game_playerOnePaperLose() {
            $test_RockPaperScissors = new RockPaperScissors;
            $player_one = "paper";
            $player_two = "scissors";

            $result = $test_RockPaperScissors->game($player_one, $player_two);

            $this->assertEquals("Player Two Wins!", $result);
        }

        function test_game_playerOneScissorsLose() {
            $test_RockPaperScissors = new RockPaperScissors;
            $player_one = "ScIssorS";
            $player_two = "ROCK";

            $result = $test_RockPaperScissors->game($player_one, $player_two);

            $this->assertEquals("Player Two Wins!", $result);
        }

        function test_game_playerOneScissorsWin() {
            $test_RockPaperScissors = new RockPaperScissors;
            $player_one = "ScIssorS";
            $player_two = "paper";

            $result = $test_RockPaperScissors->game($player_one, $player_two);

            $this->assertEquals("Player One Wins!", $result);
        }
    }



    ?>
