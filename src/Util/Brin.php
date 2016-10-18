<?php
namespace TeamDeployment\SOMtodayPHPApi\Util;


use Curl\Curl;
use TeamDeployment\SOMtodayPHPApi\Exception\BrinLookupException;

/**
 * @package somtoday-php-api
 * @author Rick Bakker <rickbakkr@gmail.com>
 * @author Bart Wesselink <bartwesselink99@gmail.com>
 * @license MIT
 */
class Brin
{
    /**
     * @param string $schoolIdentifier
     * @return string
     * @throws BrinLookupException
     */
    public static function lookupBrin($schoolIdentifier) {
        $curl = new Curl();
        $curl->get('http://servers.somtoday.nl/');

        if($curl->error) {
            throw new BrinLookupException();
        } else {
            $serverList = json_decode($curl->response, true);

            if(is_array($serverList)) {
                foreach($serverList[0]['instellingen'] as $settings)
                {
                    if($settings['afkorting'] == $schoolIdentifier)
                    {
                        return $settings['brin'];
                    }
                }

            }

            throw new BrinLookupException();
        }
    }
}