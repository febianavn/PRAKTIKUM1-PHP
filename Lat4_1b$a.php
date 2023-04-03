<?php
//class mobil
Class Mobil {
		public $nama;
		public $merk;
		public $a;
		
		public function setInfo($a){
		$this->baru = $a;
		
	}
	
	public function getInfo(){
		return $this-> baru;
	}
}

//bagian main
//main
$ferrari=new Mobil();
$ferrari->baru="xxx";
$ferrari->baru="aaa";
echo "Type Mobil : ". $ferrari->getInfo();

?>