<?php

namespace ModulaR\modularBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserModel
 *
 * @ORM\MappedSuperclass
 */
class UserModel extends DataModel
{
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    protected $email = "";

    /**
     * @var integer
     *
     * @ORM\Column(name="id_role", type="integer")
     */
    protected $role = "";

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=100)
     */
    protected $firstname = "";

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=100)
     */
    protected $lastname = "";

    /**
     * @var string
     *
     * @ORM\Column(name="bio", type="text")
     */
    protected $bio ="";

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set id_role
     *
     * @param integer $role
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return integer 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set bio
     *
     * @param string $bio
     * @return User
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string 
     */
    public function getBio()
    {
        return $this->bio;
    }
}
