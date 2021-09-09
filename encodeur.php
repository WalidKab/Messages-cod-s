<?php
function remplacerLesLettres()
{
    $phrase = $_POST['listen'];
    $change = str_replace("a", "V489", $phrase);
    $change2 = str_replace("b", "pPr0pP", $change);
    $change3 = str_replace("c", "punk", $change2);
    $change4 = str_replace("d", "c0", $change3);
    $change5 = str_replace("e", "€uro$", $change4);
    $change6 = str_replace("f", "tor", $change5);
    $change7 = str_replace("g", "RoDor&", $change6);
    $change8 = str_replace("r", "tor", $change7);
    $change9 = str_replace("h", "n4IN", $change8);
    $change10 = str_replace("i", "p0p", $change9);
    $change11 = str_replace("j", "gir", $change10);
    $change12 = str_replace("k", "ZAyzay", $change11);
    $change13 = str_replace("l", "ece", $change12);
    $change14 = str_replace("m", "ou7i", $change13);
    $change15 = str_replace("n", "pOpa", $change14);
    $change16 = str_replace("o", "coùcouR&la", $change15);
    $change17 = str_replace("p", "Lim%", $change16);
    $change18 = str_replace("q", "lit£ø", $change17);
    $change19 = str_replace("s", "sO°ur", $change18);
    $change20 = str_replace("t", "µar3Nab", $change19);
    $change21 = str_replace("u", "yv", $change20);
    $change22 = str_replace("v", "TrUa", $change21);
    $change23 = str_replace("w", "fleXxx", $change22);
    $change24 = str_replace("x", "prod79iGy", $change23);
    $change25 = str_replace("y", "pdl", $change24);
    $change26 = str_replace("z", "²rl", $change25);
    $change01 = str_replace("A", "tuRnB4ll", $change26);
    $change02 = str_replace("B", "rèy#", $change01);
    $change03 = str_replace("C", "rüëÛ", $change02);
    $change04 = str_replace("D", "0000", $change03);
    $change05 = str_replace("E", "ZEva", $change04);
    $change06 = str_replace("F", "joil", $change05);
    $change07 = str_replace("G", "--&--", $change06);
    $change08 = str_replace("H", "7+9=de", $change07);
    $change09 = str_replace("I", "p1", $change08);
    $change010 = str_replace("J", "N3p{ta", $change09);
    $change011 = str_replace("K", "vg+88", $change010);
    $change012 = str_replace("L", "background-color#354", $change011);
    $change013 = str_replace("M", "lolo 05£ii", $change012);
    $change014 = str_replace("N", "çSc EZN01", $change013);
    $change015 = str_replace("O", "Pol_yyyy", $change014);
    $change016 = str_replace("P", "Bracko", $change015);
    $change017 = str_replace("Q", "mMmhuùm", $change016);
    $change018 = str_replace("R", "j<3", $change017);
    $change019 = str_replace("S", "F%èP£", $change018);
    $change020 = str_replace("T", "Pôä", $change019);
    $change021 = str_replace("U", "456PP", $change020);
    $change022 = str_replace("V", "LMléBeutE", $change021);
    $change023 = str_replace("W", "#1", $change022);
    $change024 = str_replace("X", "waLid", $change023);
    $change025 = str_replace("Y", "²&²&", $change024);
    $final = str_replace("Z", "Vas3", $change025);
    echo "<h1>Phrase initiale :</h1> <h2>$phrase</h2></br><h1>Message codé :</h1><h3>$final</h3>";
    echo '<form method="post">';
    echo '<input type="text" class="listen" name="listen" value="' . $phrase . '"/><div class="result"></div>';
    echo '<input type="submit" value="Submit">';
    echo '</form>';
}

remplacerLesLettres("");
?>