<?php

namespace Symflex\Component\Base64;

/**
 * Interface Encoder
 * @package Symflex\Component\Base64
 */
interface Encoder
{
    public const PADDING_LENGTH   = 4;
    public const REMAINDER_SYMBOL = '=';
    public const REPLACE_SYMBOLS  = [
        '+' => '-',
        '/' => '_'
    ];

    /**
     * @param string $data
     * @return string
     */
    public function encode(string $data): string;

    /**
     * @param string $data
     * @return mixed
     */
    public function decode(string $data);

    /**
     * @param string $data
     * @return string
     */
    public function encodeUri(string $data): string;

    /**
     * @param string $data
     * @return string
     */
    public function decodeUri(string $data): string;
}
