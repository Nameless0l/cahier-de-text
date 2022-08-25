<?php
namespace App\Model;
class User {
     /**
     * @var string
     */
    private $password;
    /**
     * @var string
     */
    private $username;


    /**
     * Get the value of username
     *
     * @return  string
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     */ 
    public function setUsername(string $username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     *
     * @return  string
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */ 
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }
}

?>