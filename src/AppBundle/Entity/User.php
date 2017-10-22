<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user", repositoryClass="AppBundle\Repository\UserRepository")
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
    
    /**
     * @ORM\Column(name="github_id", type="string", nullable=true)
     */
    protected $githubId;
    
    /**
     * @ORM\Column(name="github_access_token", type="string", nullable=true)
     */
    protected $githubAccessToken;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * Get id
     * @return int
     */
    function getId()
    {
        return $this->id;
    }

    /**
     * Set id
     * @param int $id
     */
    function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get Google id
     * @return string
     */
    function getGoogleId()
    {
        return $this->googleId;
    }

    /**
     * Set Google id
     * @param string $googleId
     */
    function setGoogleId($googleId)
    {
        $this->googleId = $googleId;
    }

    /**
     * Get Google access token
     * @return string
     */
    function getGoogleAccessToken()
    {
        return $this->googleAccessToken;
    }

    /**
     * Set Google access token
     * @param string $googleAccessToken
     */
    function setGoogleAccessToken($googleAccessToken)
    {
        $this->googleAccessToken = $googleAccessToken;
    }
    
    /**
     * Get Github id
     * @return string
     */
    function getGithubId()
    {
        return $this->githubId;
    }

    /**
     * Set Github id
     * @param string $githubId
     */
    function setGithubId($githubId)
    {
        $this->githubId = $githubId;
    }

    /**
     * Get Github access token
     * @return string
     */
    function getGithubAccessToken()
    {
        return $this->githubAccessToken;
    }

    /**
     * Set Github access token
     * @param string $githubAccessToken
     */
    function setGithubAccessToken($githubAccessToken)
    {
        $this->githubAccessToken = $githubAccessToken;
    }
}