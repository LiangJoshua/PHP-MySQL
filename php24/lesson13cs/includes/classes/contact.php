<?php

/**
 * contact.php
 * 
 * Contact class file
 * 
 */
/**
 * Contact class
 */
class Contact
{

    /**
     *
     * First Name
     *
     * @var string
     */
    public $first_name;

    /**
     *
     * Last Name
     *
     * @var string
     */
    public $last_name;

    /**
     *
     * Position in the company
     *
     * @var string
     */
    public $position;

    /**
     *
     * Email address
     *
     * @var string
     */
    public $email;

    /**
     * Phone number
     *
     * @var string
     */
    public $phone;

    /**
     *
     * Create a full name by concatenating first and last names
     *
     * @return string
     */
    public function name()
    {
        $name = $this->first_name . ' ' . $this->last_name;
        return $name;
    }
}
