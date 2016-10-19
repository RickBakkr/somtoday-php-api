<?php
namespace TeamDeployment\SOMtodayPHPApi\Model;

/**
 * @package somtoday-php-api
 * @author Rick Bakker <rickbakkr@gmail.com>
 * @author Bart Wesselink <bartwesselink99@gmail.com>
 * @license MIT
 */
class User
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $fullName;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getFullName()
    {
        return $this->fullName;
    }

    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }
    
}