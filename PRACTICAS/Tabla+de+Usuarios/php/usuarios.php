<?php

header('Content-type: applications/json; charset=utf-8');

$respuesta = [
  [
    "id" => "f3adc817-0fe1-4bb1-8422-31fbb7000512",
    "edad" => 60,
    "pais" => "Anguilla",
    "correo" => "harrellacosta@shepard.com",
    "nombre" => "Harrell"
  ],
  [
    "id" => "0e21b8a0-7724-485e-a9b2-ad3971e79cce",
    "edad" => 41,
    "pais" => "France",
    "correo" => "gregoryacosta@shepard.com",
    "nombre" => "Gregory"
  ],
  [
    "id" => "4f967faf-1d45-4e5a-90bb-f69c9a6fc212",
    "edad" => 34,
    "pais" => "Yemen",
    "correo" => "bobbieacosta@shepard.com",
    "nombre" => "Bobbie"
  ],
  [
    "id" => "e1f7e5a8-fc39-4bc2-9d66-62545adc4046",
    "edad" => 55,
    "pais" => "Gambia",
    "correo" => "camposacosta@shepard.com",
    "nombre" => "Campos"
  ],
  [
    "id" => "58e029ae-3658-4cc5-891c-aa625bae5459",
    "edad" => 56,
    "pais" => "Equatorial Guinea",
    "correo" => "tanyaacosta@shepard.com",
    "nombre" => "Tanya"
  ],
  [
    "id" => "7d6536c8-2eb7-4eee-af35-c5c703525e6a",
    "edad" => 43,
    "pais" => "Hong Kong",
    "correo" => "margieacosta@shepard.com",
    "nombre" => "Margie"
  ],
  [
    "id" => "394945f7-c251-4d18-911d-1b135c127a5c",
    "edad" => 46,
    "pais" => "Nepal",
    "correo" => "violetacosta@shepard.com",
    "nombre" => "Violet"
  ],
  [
    "id" => "032f5768-0cc7-4564-a1a9-9524ea4fb773",
    "edad" => 55,
    "pais" => "Virgin Islands (US)",
    "correo" => "samanthaacosta@shepard.com",
    "nombre" => "Samantha"
  ],
  [
    "id" => "757f4d8f-f1b0-4d6f-8f68-11265ce939bb",
    "edad" => 36,
    "pais" => "Niger",
    "correo" => "maddoxacosta@shepard.com",
    "nombre" => "Maddox"
  ],
  [
    "id" => "b6c88d0b-a198-42f2-80d0-3edc918fff32",
    "edad" => 68,
    "pais" => "Bahrain",
    "correo" => "grahamacosta@shepard.com",
    "nombre" => "Graham"
  ],
  [
    "id" => "9f9f5a2d-70c9-4247-a54f-a3f22e7273fa",
    "edad" => 56,
    "pais" => "Antigua and Barbuda",
    "correo" => "agnesacosta@shepard.com",
    "nombre" => "Agnes"
  ],
  [
    "id" => "aa408bde-ada6-4ac3-945e-cb35b020e0d9",
    "edad" => 44,
    "pais" => "Liechtenstein",
    "correo" => "guerreroacosta@shepard.com",
    "nombre" => "Guerrero"
  ],
  [
    "id" => "f9bea610-56ef-432c-8064-fa0475b35bdc",
    "edad" => 57,
    "pais" => "Chad",
    "correo" => "pearsonacosta@shepard.com",
    "nombre" => "Pearson"
  ],
  [
    "id" => "786c59e9-b987-460f-877a-2169049442f9",
    "edad" => 21,
    "pais" => "Vanuatu",
    "correo" => "paigeacosta@shepard.com",
    "nombre" => "Paige"
  ],
  [
    "id" => "54c666cc-709e-4a20-97f6-c2ac70493ce9",
    "edad" => 23,
    "pais" => "French Polynesia",
    "correo" => "dianneacosta@shepard.com",
    "nombre" => "Dianne"
  ],
  [
    "id" => "c9f0e924-5b80-4552-9dcd-62256e6401e8",
    "edad" => 54,
    "pais" => "Brazil",
    "correo" => "hannahacosta@shepard.com",
    "nombre" => "Hannah"
  ],
  [
    "id" => "d0c65f0f-d638-46a1-91b9-238cb0a6c35e",
    "edad" => 26,
    "pais" => "Papua New Guinea",
    "correo" => "breweracosta@shepard.com",
    "nombre" => "Brewer"
  ],
  [
    "id" => "d40400b0-70e6-4e94-91e7-2eaf5a9cd556",
    "edad" => 64,
    "pais" => "East Timor",
    "correo" => "rollinsacosta@shepard.com",
    "nombre" => "Rollins"
  ],
  [
    "id" => "5529d651-a9b7-435f-820d-e4f0d8275b25",
    "edad" => 75,
    "pais" => "Switzerland",
    "correo" => "barreraacosta@shepard.com",
    "nombre" => "Barrera"
  ],
  [
    "id" => "0d203c22-7816-412e-b76b-fe47677302f1",
    "edad" => 34,
    "pais" => "Marshall Islands",
    "correo" => "merleacosta@shepard.com",
    "nombre" => "Merle"
  ]
];

echo json_encode($respuesta);

