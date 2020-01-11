<?php
declare(strict_types=1);

namespace Symflex\Component\Base64;

/**
 * Class Base64Encoder
 * @package Symflex\Component\Base64
 */
class Base64Encoder implements Encoder
{
    /**
     * @param string $data
     * @return string
     */
    public function encode(string $data): string
    {
        return base64_encode($data);
    }

    /**
     * @param string $data
     * @return string
     */
    public function decode(string $data): string
    {
        return base64_decode($data);
    }

    /**
     * @param string $data
     * @return string
     */
    public function encodeUrl(string $data): string
    {
        return rtrim(strtr(base64_encode($data), self::REPLACE_SYMBOLS), self::REMAINDER_SYMBOL);
    }

    /**
     * @param string $data
     * @return string
     */
    public function decodeUrl(string $data): string
    {
        return
            base64_decode(
                str_pad(
                    strtr($data, array_flip(self::REPLACE_SYMBOLS)),
                    strlen($data) % self::PADDING_LENGTH,
                    self::REMAINDER_SYMBOL,
                    STR_PAD_RIGHT
                )
            );
    }
}
