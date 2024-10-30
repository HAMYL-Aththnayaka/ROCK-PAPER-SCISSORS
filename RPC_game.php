<?php
// Choices
$choices = ["Rock", "Paper", "Scissors"];

// Check if a user choice is made
if (isset($_GET['choice'])) {
    $userChoice = $_GET['choice'];
    $computerChoice = $choices[array_rand($choices)];
    
    // Determine the outcome
    if ($userChoice == $computerChoice) {
        $result = "It's a tie!";
    } elseif (
        ($userChoice == "Rock" && $computerChoice == "Scissors") ||
        ($userChoice == "Scissors" && $computerChoice == "Paper") ||
        ($userChoice == "Paper" && $computerChoice == "Rock")
    ) {
        $result = "You win!";
    } else {
        $result = "You lose!";
    }
} else {
    $userChoice = null;
    $computerChoice = null;
    $result = "Choose Rock, Paper, or Scissors to start the game!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rock, Paper, Scissors</title>
</head>
<body>
    <h1>Rock, Paper, Scissors Game</h1>
    <p>Your choice: <?= $userChoice ? $userChoice : 'None' ?></p>
    <p>Computer's choice: <?= $computerChoice ? $computerChoice : 'None' ?></p>
    <h2><?= $result ?></h2>

    <h3>Choose your move:</h3>
    <a href="?choice=Rock">Rock</a> |
    <a href="?choice=Paper">Paper</a> |
    <a href="?choice=Scissors">Scissors</a>
</body>
</html>
