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
                return "Please answer only with 'rock', 'paper', or 'scissors'.";
            }
            elseif (($player_two != "ROCK") && ($player_two != "PAPER") && ($player_two != "SCISSORS")) {
                return "Please answer only with 'rock', 'paper', or 'scissors'.";
            }
            elseif (($player_one == "ROCK") && ($player_two == "PAPER")) {
                return "Computer Wins!";
            }
            elseif (($player_one == "ROCK") && ($player_two == "SCISSORS")) {
                return "Player One Wins!";
            }
            elseif (($player_one == "PAPER") && ($player_two == "ROCK")) {
                return "Player One Wins!";
            }
            elseif (($player_one == "PAPER") && ($player_two == "SCISSORS")) {
                return "Computer Wins!";
            }
            elseif (($player_one == "SCISSORS") && ($player_two == "ROCK")) {
                return "Computer Wins!";
            }
            elseif (($player_one == "SCISSORS") && ($player_two == "PAPER")) {
                return "Player One Wins!";
            }
            else {
                return "DRAW!";
            }

        }
    }

 ?>
