<?php

use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{

    public function getData(): array
    {
        return [
            'io' => 'false',
            'www' => 'true',
            '' => 'nan'
        ];
    }

    public function testShould_ReturnValue() : void
    {
        //Risky
    }

    public function testShould_HasKey(): void
    {
        $arrayEmail = $this->getData();

        $this->assertArrayHasKey('', $arrayEmail);
    }

    public function testShould_ContainsSpecialCount(): void
    {
        $arrayEmail = $this->getData();

        $this->assertCount(3, $arrayEmail);

        $this->assertEquals('true', $arrayEmail['www']);

        $this->assertEquals(1, 1);

        $this->assertEquals(2, 2);
    }

}
