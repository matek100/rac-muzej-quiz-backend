<?php

$jsonData = file_get_contents("questions.json");

$data = json_dcode($jsonData, true);

$numberOfQuestions = isset($_GET)

?>