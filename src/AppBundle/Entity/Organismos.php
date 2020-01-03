<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Organismos
 *
 * @ORM\Table(name="organismos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrganismosRepository")
 */
class Organismos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Assert\Regex(pattern = "/\D/")
     * @ORM\Column(name="organismo", type="string", length=255)
     */
    private $organismo;
    
    
    public function __toString() {
        return $this->getId() ? $this->getOrganismo() : '';
    }


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set organismo.
     *
     * @param string $organismo
     *
     * @return Organismos
     */
    public function setOrganismo($organismo)
    {
        $this->organismo = $organismo;

        return $this;
    }

    /**
     * Get organismo.
     *
     * @return string
     */
    public function getOrganismo()
    {
        return $this->organismo;
    }
}
