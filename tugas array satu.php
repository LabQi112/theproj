<?php
    $organisasi = array(
        "keagamaan" => array(
            "ketua" => "budi",
            "wakil" => "dodi",
            "anggota" => "anhar"
        ),
        "kebersihan" => array(
            "ketua" => "nadhif",
            "wakil" => "",
            "anggota" => "jamil"
        ),
        "kemanusiaan" => array(
            "ketua" => "anas",
            "wakil" => "ihsan"
        )
    );
    // print_r($organisasi);
            foreach ($organisasi as $key => $value) {
                $index = 1;
                $divisi = $key;
                foreach ($value as $key => $value) {
                    if(empty($value)){
                        echo $index.". "."Divisi ".$divisi." tidak mempunyai ".$key."<br>";                        
                    } else {
                        echo $index.". "."Divisi ".$divisi." mempunyai ".$key." dengan nama ".$value."<br>";
                    }
                    $index++;
                }
                echo "<br>";
            }
    
?>
