<?php
namespace TeamDeployment\SOMtodayPHPApi\Model;

/**
 * @package somtoday-php-api
 * @author Rick Bakker <rickbakkr@gmail.com>
 * @author Bart Wesselink <bartwesselink99@gmail.com>
 * @license MIT
 */
class Homework
{
    /**
     * @var int
     */
    private $beginDateTimestamp;
    /**
     * @var int
     */
    private $endDateTimestamp;
    /**
     * @var string
     */
    private $classHour
    /**
     * @var string
     */
    private $classroom;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $subject;
    /**
     * @var string
     */
    private $product;
    /**
     * @var string
     */
    private $teachers;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $abbreviation;
    /**
     * @var int
     */
    private $appointmentId;
    /**
     * @var string
     */
    private $type;
    /**
     * @var string
     */
    private $homework;
    /**
     * @var boolean
     */
    private $done;
    /**
     * @var boolean
     */
    private $test;
    /**
     * @var int
     */
    private $homeworkId;

    public function getBeginDateTimestamp()
    {
        return $this->beginDateTimestamp;
    }

    public function setBeginDateTimestamp($beginDateTimestamp)
    {
        $this->beginDateTimestamp = $beginDateTimestamp;
    }

    public function getEndDateTimestamp()
    {
        return $this->endDateTimestamp;
    }

    public function setEndDateTimestamp($endDateTimestamp)
    {
        $this->endDateTimestamp = $endDateTimestamp;
    }

    public function getClassroom()
    {
        return $this->classroom;
    }

    public function setClassroom($classroom)
    {
        $this->classroom = $classroom;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct($product)
    {
        $this->product = $product;
    }

    public function getTeachers()
    {
        return $this->teachers;
    }

    public function setTeachers($teachers)
    {
        $this->teachers = $teachers;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getAbbreviation()
    {
        return $this->abbreviation;
    }

    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;
    }

    public function getAppointmentId()
    {
        return $this->appointmentId;
    }

    public function setAppointmentId($appointmentId)
    {
        $this->appointmentId = $appointmentId;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getHomework()
    {
        return $this->homework;
    }

    public function setHomework($homework)
    {
        $this->homework = $homework;
    }

    public function getDone()
    {
        return $this->done;
    }

    public function setDone($done)
    {
        $this->done = $done;
    }

    public function getTest()
    {
        return $this->test;
    }

    public function setTest($test)
    {
        $this->test = $test;
    }

    public function getHomeworkId()
    {
        return $this->homeworkId;
    }

    public function setHomeworkId($homeworkId)
    {
        $this->homeworkId = $homeworkId;
    }
}