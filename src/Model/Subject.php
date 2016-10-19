<?php
namespace TeamDeployment\SOMtodayPHPApi\Model;

/**
 * @package somtoday-php-api
 * @author Rick Bakker <rickbakkr@gmail.com>
 * @author Bart Wesselink <bartwesselink99@gmail.com>
 * @license MIT
 */
class Subject
{
    /**
     * @var int
     */
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    
}