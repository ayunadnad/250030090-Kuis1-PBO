<?php

function hitungNilaiAkhirTugas($tugas,$uts,$uas){
    $nilaiakhir = ($tugas * 0.30) + ($uts * 0.30) +($uas * 0.40);

    if ($nilaiakhir <= 70){
        $status = "Tidak Lulus";
    } else {
        $status = "Lulus";
    }

    //output
    echo "Output:<br>";
    echo "Nilai Akhir: " .round($nilaiakhir), "<br>";
    echo "Status: $status <br>";
    } 

    hitungNilaiAkhirTugas(80,85,83);

?>