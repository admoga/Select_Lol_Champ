<?php
    $posicion = array('top',
        'mid',
        'jungla',
        'support',
        'adc'
    );

    $top = array("Aatrox",
        "Akali",
        "Azir",
        "Camille",
        "Cho'Gath",
        "Darius",
        "Diana",
        "Dr. Mundo",
        "Ekko",
        "Fiora",
        "Fizz",
        "Galio",
        "Gangplank",
        "Garen",
        "Gnar",
        "Gragas",
        "Heimerdinger",
        "Illaoi",
        "Irelia",
        "Jax",
        "Jayce",
        "Kayle",
        "Kennen",
        "Kled",
        "Malphite",
        "Maokai",
        "Mordekaiser",
        "Nasus",
        "Nautilus",
        "Olaf",
        "Ornn",
        "Pantheon",
        "Poppy",
        "Quinn",
        "Renekton",
        "Rengar",
        "Riven",
        "Rumble",
        "Shen",
        "Singed",
        "Sion",
        "Swain",
        "Syndra",
        "Teemo",
        "Trundle",
        "Tryndamere",
        "Urgot",
        "Varus",
        "Vladimir",
        "Yasuo",
        "Yorick",
    );

    $mid = array("Ahri",
        "Akali",
        "Anivia",
        "Annie",
        "Aurelion Sol",
        "Azir",
        "Brand",
        "Cassiopeia",
        "Corki",
        "Diana",
        "Ekko",
        "Fizz",
        "Galio",
        "Heimerdinger",
        "Jayce",
        "Karma",
        "Karthus",
        "Kassadin",
        "Katarina",
        "Kayle",
        "LeBlanc",
        "Lissandra",
        "Lucian",
        "Lux",
        "Malzahar",
        "Morgana",
        "Orianna",
        "Ryze",
        "Swain",
        "Syndra",
        "Talon",
        "Twisted Fate",
        "Veigar",
        "VelKoz",
        "Viktor",
        "Vladimir",
        "Xerath",
        "Yasuo",
        "Zed",
        "Ziggs",
        "Zoe",
    );

    $jungla = array("Amumu",
        "Camille",
        "Cho'Gath",
        "Diana",
        "Elise",
        "Evelynn",
        "Fiddlesticks",
        "Gragas",
        "Graves",
        "Hecarim",
        "Ivern",
        "Jarvan IV",
        "Jax",
        "Kai'Sa",
        "Kayn",
        "Kha'Zix",
        "Kindred",
        "Lee Sin",
        "Maestro Yi",
        "Maokai",
        "Nidalee",
        "Nocturne",
        "Nunu",
        "Olaf",
        "Rammus",
        "Rek'Sai",
        "Rengar",
        "Sejuani",
        "Shaco",
        "Shyvana",
        "Skarner",
        "Teemo",
        "Tryndamere",
        "Twitch",
        "Udyr",
        "Vi",
        "Volibear",
        "Warwick",
        "Wukong",
        "Xin Zhao",
        "Yasuo",
        "Zac",
    );

    $support = array("Alistar",
        "Amumu",
        "Annie",
        "Bardo",
        "Blitzcrank",
        "Brand",
        "Braum",
        "Fiddlesticks",
        "Janna",
        "Karma",
        "Leona",
        "Lulu",
        "Lux",
        "Malphite",
        "Maokai",
        "Morgana",
        "Nami",
        "Nautilus",
        "Nunu",
        "Ornn",
        "Rakan",
        "Shen",
        "Sona",
        "Soraka",
        "Tahm Kench",
        "Taric",
        "Teemo",
        "Thresh",
        "Veigar",
        "VelKoz",
        "Volibear",
        "Zilean",
        "Zoe",
        "Zyra"
    );

    $adc = array("Ashe",
        "Caitlyn",
        "Draven",
        "Ezreal",
        "Jhin",
        "Jinx",
        "Kai'Sa",
        "Kalista",
        "Kayle",
        "Kennen",
        "Kog'Maw",
        "Lucian",
        "Miss Fortune",
        "Quinn",
        "Sivir",
        "Teemo",
        "Tristana",
        "Twitch",
        "Varus",
        "Vayne",
        "Xayah",
    );

    $pick_pos=array_rand($posicion, 1);

    if($pick_pos==0){
        $pick_champ=array_rand($top, 1);
        $text_champ=$top[$pick_champ];
    }
    else if($pick_pos==1){
        $pick_champ=array_rand($mid, 1);
        $text_champ=$mid[$pick_champ];
    }
    else if($pick_pos==2){
        $pick_champ=array_rand($jungla, 1);
        $text_champ=$jungla[$pick_champ];
    }
    else if($pick_pos==3){
        $pick_champ=array_rand($support, 1);
        $text_champ=$support[$pick_champ];
    }
    else{
        $pick_champ=array_rand($adc, 1);
        $text_champ=$adc[$pick_champ];
    }

?>

<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    <title>Select LoL Champ</title>
</head>
<body>
    <div id="container" align="center">
        <label id="text">La siguiente partida la deberás jugar con <b><?php echo $text_champ; ?></b> en la posición de <b><?php echo $posicion[$pick_pos]; ?></b></label>
    </div>
</body>
</html>
