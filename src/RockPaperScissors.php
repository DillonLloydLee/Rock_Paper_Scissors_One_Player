<?php
    Class RockPaperScissors {

        function game($player_one, $player_two) {

            $player_one = strtoupper ( $player_one );
            $player_two = strtoupper ( $player_two );

            if (($player_one != "ROCK") && ($player_one != "PAPER") && ($player_one != "SCISSORS")) {
                return "Please answer only with 'rock', 'paper', or 'scissors'.";
            }
            elseif (($player_two != "ROCK") && ($player_two != "PAPER") && ($player_two != "SCISSORS")) {
                return "Please answer only with 'rock', 'paper', or 'scissors'.";
            }
            elseif (($player_one == "ROCK") && ($player_two == "PAPER")) {
                return "Player Two Wins!";
            }
            elseif (($player_one == "ROCK") && ($player_two == "SCISSORS")) {
                return "Player One Wins!";
            }
            elseif (($player_one == "PAPER") && ($player_two == "ROCK")) {
                return "Player One Wins!";
            }
            elseif (($player_one == "PAPER") && ($player_two == "SCISSORS")) {
                return "Player Two Wins!";
            }
            elseif (($player_one == "SCISSORS") && ($player_two == "ROCK")) {
                return "Player Two Wins!";
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
