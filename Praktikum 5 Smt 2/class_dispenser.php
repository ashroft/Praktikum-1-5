<?php
class Dispenser
{
    protected $volume = 0;
    protected $hargaSegelas;
    private $volumeGelas = 250;
    private $saldo = 20000;
    private $jumlahGelas = 20   ;

    public function default(int $vol, int $saldo, int $jmlgelas, int $volgelas)
    {
        $this->volume = $vol;
        $this->saldo = $saldo;
        $this->jumlahGelas = $jmlgelas;
        $this->volumeGelas = $volgelas;
    }

    public function cetakDispenser()
    {
        echo "Volume Air Galon " . $this->volume . " ml
        </br>Saldo yang Dimiliki " . $this->saldo . "
        </br>Jumlah Gelas " . $this->jumlahGelas . "
        </br>Volume Gelas " . $this->volumeGelas;
    }

    public function isiGalon(int $vol)
    {
        if ($vol > 0) {
            $this->volume = $vol;
            echo "Volume Air Galon Telah Terisi Sebesar " . $this->volume . " ml";
        } else {
            echo "Volume Air Tidak Bisa Kurang Dari 0";
        }
    }

    public function isiGelas()
    {
        if ($this->volume >= $this->volumeGelas && $this->jumlahGelas > 0) {
            $this->jumlahGelas--;
            $this->volume = $this->volume - $this->volumeGelas;
            $this->saldo = $this->saldo + $this->hargaSegelas;
            echo "Anda Telah Menuangkan Air Ke Dalam Gelas Ukuran " . $this->volumeGelas . " ml Dengan Harga " . $this->hargaSegelas;
        } elseif ($this->jumlahGelas <= 0) {
            echo "Tidak Ada Gelas Yang Tersedia, Silakan Isi Ulang Gelas Terlebih Dahulu";
        } elseif ($this->volume < $this->volumeGelas) {
            echo "Volume Air Galon Tidak Mencukupi";
        }
    }

    public function isiUlangGelas(int $gelas) 
    {
        $harga = 500;
        $totalHarga = $harga * $gelas;
        if ($this->saldo >= $totalHarga && $totalHarga >= $harga) {
            $this->saldo = $this->saldo - $totalHarga;
            $this->jumlahGelas = $this->jumlahGelas + $gelas;
            echo "Anda Telah Mengisi Ulang Gelas Sebanyak " . $gelas . " Gelas dengan Harga " . $totalHarga . " Atau " . $harga . "/pcs";
        } else 
            echo "Saldo Anda Tidak Mencukupi Untuk Melakukan Isi Ulang";
        }
    }
class Minuman extends Dispenser
{
    public function __construct(string $nama, int $harga)
    {
        $this->namaMinuman = $nama;
        $this->hargaSegelas = $harga;
    }

}