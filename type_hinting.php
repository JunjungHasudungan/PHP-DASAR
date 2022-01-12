<?php
class Type_hinting
{
    // int type
    // mengembalikan nilai int
    public $users = 
    [
        [
            'nama'  =>  'Hasudungan',
            'role'  =>  'Guru'
        ],
        [
            'nama'  =>  'Rendi',
            'role'  =>  'Siswa'
        ]

    ];

    public function tampilkanDataArray():array
    {
        return [
            'nama'  => 'Hasudungan'
        ];
    }

    function perkalian(int $numb_a, int $numb_b):int
    {
        return $hasil = $numb_a * $numb_b;
    }
    
    // String type
    // mengemnbalikan nilai String
    function perkenalan($nama):string
    {
        return "halo " . $nama;
    }

    // union type
    // mengembalikan nilai int atau float
    function penjumlahan($numb_a, $numb_b):int|float
    {
        return $numb_a * $numb_b;
    }
    
    function salam()
    {
        echo "salam dari method kosong";
    }

    // void type 
    // function yang tidak menggembalikan nilai
    function methodKosong():void
    {
        $this->salam();
    }
    
}

$obj = new Type_hinting();


echo $obj->perkalian(numb_a: 12, numb_b: 1); // 12
echo "<br>";
echo $obj->perkenalan(nama: "Hasudungan"); // Hasudungan
echo "<br>";
echo $obj->methodKosong(); // salam dari method kosong

echo print_r($obj->tampilkanDataArray());