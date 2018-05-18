function ChampionSelect() {

    $("#text").children("label").remove();
    $("#img-container").children("img").remove();
    $("#builds").children("label").remove();

    var posicion=['top',
        'mid',
        'jungla',
        'support',
        'adc'
    ];

    var top=["Aatrox",
        "Akali",
        "Azir",
        "Camille",
        "ChoGath",
        "Darius",
        "Diana",
        "DrMundo",
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
        "Vladimir",
        "Yasuo",
        "Yorick"
    ];

    var mid=["Ahri",
        "Akali",
        "Anivia",
        "Annie",
        "AurelionSol",
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
        "TwistedFate",
        "Veigar",
        "VelKoz",
        "Viktor",
        "Vladimir",
        "Xerath",
        "Yasuo",
        "Zed",
        "Ziggs",
        "Zoe"
    ];

    var jungla=["Amumu",
        "Camille",
        "ChoGath",
        "Diana",
        "Elise",
        "Evelynn",
        "Fiddlesticks",
        "Gragas",
        "Graves",
        "Hecarim",
        "Ivern",
        "JarvanIV",
        "Jax",
        "KaiSa",
        "Kayn",
        "KhaZix",
        "Kindred",
        "LeeSin",
        "MasterYi",
        "Maokai",
        "Nidalee",
        "Nocturne",
        "Nunu",
        "Olaf",
        "Rammus",
        "RekSai",
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
        "XinZhao",
        "Zac"
    ];

    var support=["Alistar",
        "Amumu",
        "Annie",
        "Bard",
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
        "TahmKench",
        "Taric",
        "Teemo",
        "Thresh",
        "Veigar",
        "VelKoz",
        "Volibear",
        "Zilean",
        "Zoe",
        "Zyra"
    ];

    var adc=["Ashe",
        "Caitlyn",
        "Draven",
        "Ezreal",
        "Jhin",
        "Jinx",
        "Kaisa",
        "Kalista",
        "Kayle",
        "Kennen",
        "KogMaw",
        "Lucian",
        "MissFortune",
        "Quinn",
        "Sivir",
        "Teemo",
        "Tristana",
        "Twitch",
        "Varus",
        "Vayne",
        "Xayah"
    ];

    var pick_pos = posicion[Math.floor(Math.random() * posicion.length)];

    if(pick_pos=="top"){
        var pick_champ=top[Math.floor(Math.random() * top.length)];
    }
    else if(pick_pos=="mid"){
        pick_champ=mid[Math.floor(Math.random() * mid.length)];
    }
    else if(pick_pos=="jungla"){
        pick_champ=jungla[Math.floor(Math.random() * jungla.length)];
    }
    else if(pick_pos=="support"){
        pick_champ=support[Math.floor(Math.random() * support.length)];
    }
    else if (pick_pos=="adc"){
        pick_champ=adc[Math.floor(Math.random() * adc.length)];
    }

    $("#text").append('<label>En la siguiente partida deberas jugar con '+pick_champ+' en la posición de '+pick_pos+'</label>');
    $("#img-container").append('<img id="img-champ" src="assets/img/champions/'+pick_champ+'.jpg">');
    $("#builds").append('<label>Puedes buscar una build competente pulsando <a href="http://www.probuilds.net/champions/details/'+pick_champ+'">aquí</a></label>');

}