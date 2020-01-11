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
     * @return string
     */
    public function decode(string $data): string;

    /**
     * @param string $data
     * @return string
     */
    public function encodeUrl(string $data): string;

    /**
     * @param string $data
     * @return string
     */
    public function decodeUrl(string $data): string;
}
