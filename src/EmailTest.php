<?php

use PHPUnit\Framework\TestCase;

/** @test */
final class EmailTest extends TestCase
{
    public function testEmailAddress(): void
    {
        $arrayEmail = [
            'io' => 'false',
            'www' => 'true',
            '' => 'nan'
        ];

        $this->assertArrayHasKey('', $arrayEmail);

        $this->assertCount(3, $arrayEmail);

        $this->assertEquals('true', $arrayEmail['www']);

        $this->assertEquals(1,1);

        $this->assertEquals(2,2);
    }

}
