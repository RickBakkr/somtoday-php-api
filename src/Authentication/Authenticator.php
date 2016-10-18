<?php
namespace TeamDeployment\SOMtodayPHPApi\Authentication;

use TeamDeployment\SOMtodayPHPApi\Util\Brin;

/**
 * @package somtoday-php-api
 * @author Rick Bakker <rickbakkr@gmail.com>
 * @author Bart Wesselink <bartwesselink99@gmail.com>
 * @license MIT
 */
class Authenticator
{
    /**
     * Authenticator constructor.
     * @param $schoolIdentifier
     * @param $username
     * @param $password
     * @param $studentName
     */
    public static function login($schoolIdentifier, $username, $password, $studentName)
    {
        State::setBrin(Brin::lookupBrin($schoolIdentifier));
    }
}