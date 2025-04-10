<?php

use PHPUnit\Framework\TestCase;
require_once 'Calculator.php';

class CalculatorTest extends TestCase
{
    protected $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testTambah()
    {
        $this->assertEquals(15, $this->calculator->tambah(10, 5), 'Penjumlahan 10 dan 5 seharusnya memberikan nilai 15');
        $this->assertEquals(100, $this->calculator->tambah(40, 60), 'Penjumlahan 40 dan 60 seharusnya memberikan nilai 100');
    }

    public function testKurang()
    {
        $this->assertEquals(5, $this->calculator->kurang(15, 10), 'Pengurangan 15 oleh 10 seharusnya memberikan nilai 5');
        $this->assertEquals(-7, $this->calculator->kurang(3, 10), 'Pengurangan 3 oleh 10 seharusnya memberikan nilai -7');
    }

    public function testKali()
    {
        $this->assertEquals(50, $this->calculator->kali(10, 5), message: 'Perkalian 10 dan 5 seharusnya memberikan nilai 50');
        $this->assertEquals(-30, $this->calculator->kali(6, -5), 'Perkalian 6 dan -5 seharusnya memberikan nilai -30');
    }

    public function testBagi()
    {
        $this->assertEquals(4, $this->calculator->bagi(20, 5), 'Pembagian 20 oleh 5 seharusnya memberikan nilai 4');
        $this->assertEquals(1.5, $this->calculator->bagi(3, 2), 'Pembagian 3 oleh 2 seharusnya memberikan nilai 1.5');
    }
}
