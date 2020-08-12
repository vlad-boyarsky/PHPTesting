<?php

use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{

    public function getData(): array
    {
        return [
            ':' => '',
            'io' => 'false',
            'www' => 'true',
            '' => 'nan'
        ];
    }

    public function getEmails(string $protocolHttp, string $protocolHttps)
    {
        if($protocolHttp == 'http' && $protocolHttps != null){
            return $protocolHttp = 'http';
        }
        return $protocolHttps = 'https';
    }

    public function testShould_ReturnValueRisky(): void
    {
        //Risky
        $this->markTestIncomplete();
    }

    public function testShould_ReturnValueSkip(): void
    {
        //Skipped
        $this->markTestSkipped();
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


    /**
     * @dataProvider emailsHaveHttpDataProvider
     */

    public function testShould_GetEmailsProtocol($protocolHttp, $protocolHttps, $expected)
    {
        $protocolEmailInfo = $this->getEmails($protocolHttp, $protocolHttps);
        $this->assertEquals($expected, $protocolEmailInfo);
    }

    public function emailsHaveHttpDataProvider()
    {
        return [
            ['http', 'ht', 'http'],
            ['http', 'ht', 'http'],
            ['http', 'ht', 'http']
        ];
    }

}
