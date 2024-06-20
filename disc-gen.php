<?php


$disc = [
    [
        'title' => 'Billie Jean',
        'artista' => 'Michael Jackson',
        'anno-prod' => '1983',
        'img' => 'https://m.media-amazon.com/images/I/51IfDW-cshL._AC_SY450_.jpg',
    ],
    [
        'title' => 'Bohemian Rhapsody',
        'artista' => 'Queen',
        'anno-prod' => '1975',
        'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvUQvgYPYeStpXv7uCyH1YNYYwAqxoelLcPQ&usqp=CAU',
    ],
    [
        'title' => 'Without Me',
        'artista' => 'Eminem',
        'anno-prod' => '2002',
        'img' => 'https://i.scdn.co/image/ab67616d00001e026ca5c90113b30c3c43ffb8f4',
    ],
    [
        'title' => 'The Real Slim Shady',
        'artista' => 'Eminem',
        'anno-prod' => '2000',
        'img' => '	https://m.media-amazon.com/images/I/91Dc4ZPRcxL._UF1000,1000_QL80_.jpg',
    ],
    [
        'title' => 'Equilibrio',
        'artista' => 'Sfera Ebbasta',
        'anno-prod' => '2016',
        'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCP_aycYwCodL09lQAlfXGHAInjPzKSPsFLA&usqp=CAU',
    ],
    [
        'title' => '100 MESSAGGI',
        'artista' => 'Lazza',
        'anno-prod' => '2024',
        'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-50Sj-o2KUhSvUeLicCUJWjsQCy7lJOrWGw&s
',
    ],
    [
        'title' => 'Vai!',
        'artista' => 'Alfa',
        'anno-prod' => '2024',
        'img' => '	https://www.cromosomimedia.com/wp-content/uploads/2024/01/ALFA.png',
    ],
    [
        'title' => 'Acqua passata',
        'artista' => 'Capo Plaza',
        'anno-prod' => '2024',
        'img' => '	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScHOSaFYvhnZnNFguqluImQHegAi6zFDPbCA&usqp=CAU',
    ],

];

header('content-type: application/json');
echo json_encode($disc);
