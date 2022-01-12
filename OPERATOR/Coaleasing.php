<?php
$siswa = [
    [
        'nama'  => 'Hasudungan',
        'nig'   => 21004,
        'role'  => 'guru'
    ],
    [
        'nama'  => 'Renata',
        'nig'   => 21004,
        'siswa' => 'siswa'
    ]
];

echo $data = print_r($siswa) ?? "null";