<?php

require_once 'Pembayaran.php';
require_once 'cetak.php';

class VirtualAccount extends Pembayaran implements Cetak {

    public function prosesPembayaran(){
        if($this->validasi()){
            return "Pembayaran Virtual Account berhasil";
        }
        return "Jumlah tidak valid";
    }

    public function cetakStruk(){

        return "
        Metode : Virtual Account <br>
        Jumlah : Rp $this->jumlah <br>
        Diskon : Rp ".$this->diskon()."<br>
        Pajak : Rp ".$this->pajak()."<br>
        Total Bayar : Rp ".$this->totalBayar()."
        ";
    }
}
?>
 