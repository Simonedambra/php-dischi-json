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
        'img' => 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD…FGS8A5R+JgrvHNdEUzCUkLe62qpWTZlqPHyftWyTIfJ//2Q==',
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
        'img' => 'https://cdns-images.dzcdn.net/images/cover/79234ae…062515617a1fa06d4be75/1900x1900-000000-80-0-0.jpg',
    ],
    [
        'title' => '100 MESSAGGI',
        'artista' => 'Lazza',
        'anno-prod' => '2024',
        'img' => 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD…iizooQnuXMpFy5lSEKUgmC6CBCXQTALoIGJq7hIBOkM//2Q==',
    ],
    [
        'title' => 'Vai!',
        'artista' => 'Alfa',
        'anno-prod' => '2024',
        'img' => 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD…71Hmf+CirUW6/Zf3/AKMX4f8ARzyqd7x+9qtRaCZSiiiQj//Z',
    ],
    [
        'title' => 'Acqua passata',
        'artista' => 'Capo Plaza',
        'anno-prod' => '2024',
        'img' => 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD…PjM7RvL8fpHNqsr/MqFChViTC/mNBXwCFCixKqwoUKCP/2Q==',
    ],

];

header('content-type: application/json');
echo json_encode($disc);
