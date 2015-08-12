<?php
    Class RockPaperScissors {

        function game($player_one) {

            $player_one = strtoupper ( $player_one );
            $number = rand(1, 3);
            if ($number == 1) {
                $player_two = "ROCK";
            }
            elseif ($number == 2) {
                $player_two = "PAPER";
            }
            elseif ($number == 3) {
                $player_two = "SCISSORS";
            }

            if (($player_one != "ROCK") && ($player_one != "PAPER") && ($player_one != "SCISSORS")) {
                $answer = array("Please answer only with", "'rock,' 'paper,' or 'scissors!'", " ");
                return $answer;
            }
            elseif (($player_two != "ROCK") && ($player_two != "PAPER") && ($player_two != "SCISSORS")) {
                $answer = array("Please answer only with", "'rock,' 'paper,' or 'scissors!'", " ");
                return $answer;
            }
            elseif (($player_one == "ROCK") && ($player_two == "PAPER")) {
                $answer = array("You played rock!", "The computer played paper!", "THE COMPUTER WINS!");
                return $answer;
            }
            elseif (($player_one == "ROCK") && ($player_two == "SCISSORS")) {
                $answer = array("You played rock!", "The computer played scissors!", "YOU WIN!");
                return $answer;
            }
            elseif (($player_one == "PAPER") && ($player_two == "ROCK")) {
                $answer = array("You played paper!", "The computer played rock!", "YOU WIN!");
                return $answer;
            }
            elseif (($player_one == "PAPER") && ($player_two == "SCISSORS")) {
                $answer = array("You played paper!", "The computer played scissors!", "THE COMPUTER WINS!");
                return $answer;
            }
            elseif (($player_one == "SCISSORS") && ($player_two == "ROCK")) {
                $answer = array("You played scissors!", "The computer played rock!", "THE COMPUTER WINS!");
                return $answer;
            }
            elseif (($player_one == "SCISSORS") && ($player_two == "PAPER")) {
                $answer = array("You played scissors!", "The computer played paper!", "YOU WIN!");
                return $answer;
            }
            else {
                $answer = array("You and the computer", "played the same thing!",  "IT'S A DRAW!");
                return $answer;
            }

        }
    }

 ?>
