<?php

namespace Vendor\Generator\Password;

use Vendor\Generator\Generator;

class PasswordGenerator extends Generator
{
    protected $_password;

    /**
     * @return string
     */
    protected function generatePassword()
    {
        $generatedPassword = '';
        return $this->_password = $generatedPassword;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->generatePassword();
    }

}