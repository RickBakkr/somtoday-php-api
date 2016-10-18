<?php
/**
 * Created by PhpStorm.
 * User: Bart Wesselink
 * Date: 18-10-2016
 * Time: 19:33
 */

namespace TeamDeployment\SOMtodayPHPApi\Authentication;

/**
 * @package somtoday-php-api
 * @author Rick Bakker <rickbakkr@gmail.com>
 * @author Bart Wesselink <bartwesselink99@gmail.com>
 * @license MIT
 */
class State
{
    /**
     * @var string
     */
    private static $brin;

    /**
     * @return string
     */
    public static function getBrin()
    {
        return self::$brin;
    }

    /**
     * @param string $brin
     */
    public static function setBrin($brin)
    {
        self::$brin = $brin;
    }
}