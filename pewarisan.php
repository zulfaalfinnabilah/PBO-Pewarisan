<?php 
// class parent
class fullmember{
 
	// property class fullmember
    public $nama_member;
    public $umur_member;	
 
 	// method pada class fullmember
	function m_nama($namam){
        $this->nama_member=$namam;
    }
    function m_umur($umurm){
        $this->umur_member=$umurm;
	}
	
}
 
// class turunan atau sub class dari class fullmember
// kita menghubungkan class dengan syntax extends
class trainee extends fullmember{
 
	// property class traine
    public $nama_traine;
    public $umur_traine;
    public $lamalatihan_traine;
 
 	// method pada class traine
	function t_nama($namat){
        $this->nama_traine=$namat;
    }
    function t_umur($umurt){
        $this->umur_traine=$umurt;
    }
    function t_latihan($latihant){
        $this->lama_latihan=$latihant;
	}
}
 
// instansiasi class trainee
$pewarisan = new trainee;
 
// pengisian data
$pewarisan->m_nama(" Rena  ");
$pewarisan->m_umur(" 15 ");
$pewarisan->t_nama(" Ulfa Nafina");
$pewarisan->t_umur(" 20 ");
$pewarisan->t_latihan(" 20 minute");
 
// menampilkan isi property
echo "Full Member". "<br/>". "<hr/r>";
echo "Nama :" . $pewarisan -> nama_member . "<br/>";
echo "Umur :" . $pewarisan -> umur_member . "<br/>";
echo "<br>". "Trainee". "</br>". "<hr/>";
echo "Nama :" . $pewarisan -> nama_traine . "<br/>";
echo "Umur :" . $pewarisan -> umur_traine . "<br/>";
echo "Lama latihan :" . $pewarisan -> lama_latihan . "<br/>";
?>