<?php


class indexController
{
    public function execute(){

        echo '<form method="post" action="/index.php?action=fight">
            <h3>Fighter 1</h3>
                Name:<input type="text" name = "vorname1">
    
                Strength: <input type="number" name = "strength1">
    
            <h3>Fighter 2</h3>
                Name:<input type="text" name = "vorname2">
    
                Strength: <input type="number" name = "strength2">
    
            <h3>Fighter 3</h3>
                Name:<input type="text" name = "vorname3">
    
                Strength: <input type="number" name = "strength3" ><br><br>
    
            <input type="submit" value="Submit">
    </form>';
    }
}
