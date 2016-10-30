<?php

namespace Vendor\Generator\Name;

use Vendor\Generator\Generator;

class RealnameGenerator extends Generator
{
    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    protected $_realname;

    /**
     * Constructor checks gender user
     * @param string $gender
     */
    public function __construct(String $gender)
    {
        switch ($gender) {
            case 'Male':
                $this->gender = 'Male';
                break;
            case 'Female':
                $this->gender = 'Female';
                break;
            default:
                $this->gender = 'Male';
                break;
        }
    }

    /**
     * Function gives male realname
     */
    protected function generateMaleRealname()
    {
        $generatedName = 'John Smith';
        return $generatedName;
    }

    /**
     * Function gives female realname
     */
    protected function generateFemaleRealname()
    {
        $generatedName = 'Katy Perry';
        return $generatedName;
    }

    /**
     * Generating realname
     * @return string
     */
    protected function generateRealname()
    {
        if ($this->gender == 'Male') {
            return $this->_realname = $this->generateMaleRealname();
        }
        else {
            return $this->_realname  = $this->generateFemaleRealname();
        }
    }

    public function getData()
    {
        return $this->generateRealname();
    }
}