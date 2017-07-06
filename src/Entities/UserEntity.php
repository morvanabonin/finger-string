<?php

namespace FingerString\Entities;

use FingerString\Entities\Traits\CreatedAtTrait;
use FingerString\Entities\Traits\DeletedTrait;
use FingerString\Entities\Traits\WatchedTrait;

/**
 * UserEntity
 */
class UserEntity
{
    use CreatedAtTrait, DeletedTrait, WatchedTrait;

    /**
     * @var $id
     */
    protected $id;

    /**
     * @var $name
     */
    protected $name;

    /**
     * @var $username
     */
    protected $username;

    /**
     * @var $email
     */
    protected $email;

    /**
     * @var $password
     */
    protected $password;

    /**
     * Return the user's identifier.
     *
     * @return int
     */
    public function getIdentifier()
    {
        return $this->id;
    }

    /**
     * @param $id int
     */
    public function setIdentifier($id)
    {
        $this->id = $id;
    }

    /**
     * Return the user's name.
     *
     * @return int
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name string
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Return the user's name.
     *
     * @return int
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param $username string
     */
    public function setUsername($username)
    {
        $this->name = $username;
    }

    /**
     * @return $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }


}