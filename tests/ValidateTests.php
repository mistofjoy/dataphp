<?php
use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase {
    public function test_email() {
        //email correcto
        $email = Validate::email("i@rimorsoft.com");
        $this->assertTrue($email);

        //email incorrecto
        $email = Validate::email("i@@rimorsoft.com");
        $this->assertFalse($email);
    }

    public function test_url() {
        //url correcta
        $url = Validate::url("https://platzi.com");
        $this->assertTrue($url);

        //url incorrecta
        $url = Validate::url("platzi.com");
        $this->assertFalse($url);
    }
}