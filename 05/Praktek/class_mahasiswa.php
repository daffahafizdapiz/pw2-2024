<?php

class Mahasiswa 
{
    public $namaMahasiswa, $nim, $domisili, $prodi, $ipk;

    function __construct($namaMahasiswa, $nim, $domisili, $prodi, $ipk)
    {
        $this->namaMahasiswa =$namaMahasiswa;
        $this->nim =$nim;
        $this->domisili =$domisili;
        $this->prodi =$prodi;
        $this->ipk =$ipk;
    }

    function setPredikatIPK($ipk)
    {
        if ($ipk > 3.5) {
            echo "Cumlaude";
        } else {
            echo "You did a great job!";
        }
    }
}
$mahasiswa = new Mahasiswa("Daffa", "0110223104", "Nanggewer", "TI", "3.9");
echo "1. ", "Nama Lengkap : " . $mahasiswa->namaMahasiswa;
echo "<br>";
echo "2. ","NIM : " . $mahasiswa->nim;
echo "<br>";
echo "3. ","Domisili : " . $mahasiswa->domisili;
echo "<br>";
echo "4. ","Prodi : " . $mahasiswa->prodi;
echo "<br>";
echo "5. ","IPK : " . $mahasiswa->ipk;
echo "<br>";
echo "<br>";
$mahasiswa->setPredikatIPK($mahasiswa->ipk);
?>