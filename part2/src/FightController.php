<?php


class FightController
{
    public function execute(){

        require_once 'src/Knight.php';

        $knights = array(
            new Knight($_POST['vorname1'], $_POST['strength1']),
            new Knight($_POST['vorname2'], $_POST['strength2']),
            new Knight($_POST['vorname3'], $_POST['strength3']),
        );

        $roundCounter = 0;

        while (count($knights) > 1) {
            $roundCounter++;

            echo "<h1>Round $roundCounter </h1>";
            echo '<div class="fight-message">';
            foreach ($knights as $knight) {
                echo $knight;
            }
            echo '</div>';

            $fightingKnightsIndexes = array_rand($knights, 2);
            shuffle($fightingKnightsIndexes);

            $attackingKnight = $knights[$fightingKnightsIndexes[0]];
            $defendingKnight = $knights[$fightingKnightsIndexes[1]];

            $attackingKnight->attack($defendingKnight);

            if (!$defendingKnight->isAlive()) {
                unset($knights[$fightingKnightsIndexes[1]]);
            }
        }

        echo '<h1>And the Winner is</h1>';
        echo '<div class="fight-message">';
        foreach ($knights as $knight) {
            echo $knight;
        }
        echo '</div>';

    }

}