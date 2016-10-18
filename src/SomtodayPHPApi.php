<?php
/**
 * Created by PhpStorm.
 * User: Bart Wesselink
 * Date: 18-10-2016
 * Time: 18:51
 */

namespace TeamDeployment\SOMtodayPHPApi;


use TeamDeployment\SOMtodayPHPApi\Authentication\Authenticator;

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