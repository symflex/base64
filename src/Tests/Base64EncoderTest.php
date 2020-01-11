<?php

namespace Symflex\Component\Base64\Tests;

use PHPUnit\Framework\TestCase;
use Symflex\Component\Base64\Base64Encoder;

class Base64EncoderTest extends TestCase
{
    protected $encoder;

    protected function setUp(): void
    {
        $this->encoder = new Base64Encoder();
    }

    public function testEncode()
    {

    }

    public function testDecode()
    {

    }

    public function testEncodeUrl()
    {

    }

    public function testDecodeUrl()
    {

    }

    public function dataProvider()
    {
        return [
            'source' => '',
            'encoded' => ''
        ];
    }
}