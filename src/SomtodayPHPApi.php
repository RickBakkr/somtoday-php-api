<?php
namespace TeamDeployment\SOMtodayPHPApi;

use TeamDeployment\SOMtodayPHPApi\Authentication\Authenticator;

/**
 * @package somtoday-php-api
 * @author Rick Bakker <rickbakkr@gmail.com>
 * @author Bart Wesselink <bartwesselink99@gmail.com>
 * @license MIT
 */
class SOMtodayPHPApi
{
    /**
     * @param $schoolIdentifier
     * @param $username
     * @param $password
     * @param $studentName
     */
    public function login($schoolIdentifier, $username, $password, $studentName)
    {
        Authenticator::login($schoolIdentifier, $username, $password, $studentName);
    }

}