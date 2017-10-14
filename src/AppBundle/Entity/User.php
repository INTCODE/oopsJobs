<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(name="google_id", type="string", nullable=true)
     */
    protected $googleId;
    
    /**
     * @ORM\Column(name="google_access_token", type="string", nullable=true)
     */
    protected $googleAccessToken;

    public function __construct()
    {
        parent::__construct();
    }
    
    function getId()
    {
        return $this->id;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function getGoogleId()
    {
        return $this->googleId;
    }

    function setGoogleId($googleId)
    {
        $this->googleId = $googleId;
    }

    function getGoogleAccessToken()
    {
        return $this->googleAccessToken;
    }

    function setGoogleAccessToken($googleAccessToken)
    {
        $this->googleAccessToken = $googleAccessToken;
    }
}