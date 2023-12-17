<?php

class ClsUser
{
    private $_ID;
    private $_username;
    private $_firstName;
    private $_lastName;
    private $_password;
    private $_email;

    // CONSTRUCTOR
    public function __construct($username, $email)
    {
        $this->_username = $username;
        $this->_email = $email;
    }

    // ID

    public function setID($ID)
    {
        $this->_ID = $ID;
    }

    public function getID()
    {
        return  $this->_ID;
    }

    //PASSWORD

    public function setPassword($password)
    {
        $this->_password = $password;
    }

    public function getPassword()
    {
        return $this->_password;
    }

    // FULL NAME

    public function getFullName()
    {
        return $this->_firstName . ' ' . $this->_lastName;
    }

    // USERNAME

    public function getUsername()
    {
        return $this->_username;
    }

    public function setUsername($username)
    {
        $this->_username = $username;
    }

    // FIRST NAME

    public function getFirstName()
    {
        return $this->_firstName;
    }

    public function setFirstName($firstName)
    {
        $this->_firstName = $firstName;
    }


    // LAST NAME

    public function getLastName()
    {
        return $this->_lastName;
    }

    public function setLastName($lastName)
    {
        $this->_lastName = $lastName;
    }


    // EMAIL

    public function setEmail($email)
    {
        $this->_email = $email;
    }

    public function getEmail()
    {
        return $this->_email;
    }
}

?>
