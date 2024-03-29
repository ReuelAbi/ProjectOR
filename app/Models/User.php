<?php
namespace App\Models;

class User implements \JsonSerializable
{
    // Declaring variables:
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $phone;
    private $role;
    private $credentials;
    
    // Creating a parameterized constructor to handle registrations:
    public function __construct($id, $firstName, $lastName, $username, $password, $email, $phone, $role)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->role = $role;
        
        //Encapsulating the User Login credentials into the user model
        $this->credentials = new userCredentials($username,$password);
    }
    
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
    
    // GETTERS AND SETTERS:
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    
    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    
    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    
    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->credentials->getUsername();
    }
    
    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
    
    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->credentials->getPassword();
    }
    
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }
    
    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    
    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }
    
    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }
    /**
     * @return mixed
     */
}