<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OfferRepository")
 * @ORM\Table(name="offer")
 */
class Offer
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
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
}
