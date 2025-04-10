<?php

class Calculator
{
    public function tambah($angka1, $angka2)
    {
        return $angka1 + $angka2;
    }

    public function kurang($angka1, $angka2)
    {
        return $angka1 - $angka2;
    }

    public function kali($angka1, $angka2)
    {
        return $angka1 * $angka2;
    }

    public function bagi($angka1, $angka2)
    {
        if ($angka2 == 0) {
            throw new Exception("Angka kedua tidak boleh nol.");
        }
        return $angka1 / $angka2;
    }
}
