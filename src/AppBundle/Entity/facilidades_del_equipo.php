<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * facilidades_del_equipo
 *
 * @ORM\Table(name="facilidades_del_equipo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\facilidades_del_equipoRepository")
 */
class facilidades_del_equipo
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
     *
     * @ORM\ManyToOne(targetEntity="relacion_equipos")
     * @ORM\JoinColumn(name="id_equipo", referencedColumnName="id", nullable=false)
     */
    private $equipo;

    /**
     * @var bool
     *
     * @ORM\Column(name="canal_64Kbit", type="boolean")
     */
    private $canal64Kbit;

    /**
     * @var bool
     *
     * @ORM\Column(name="canal_2Mbit", type="boolean")
     */
    private $canal2Mbit;

    /**
     * @var bool
     *
     * @ORM\Column(name="canal_34Mbit", type="boolean")
     */
    private $canal34Mbit;

    public function __toString() {
        return $this->getId()? "Facilidades del Equipo: ".$this->getEquipo()->getId():'';
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
     * Set canal64Kbit.
     *
     * @param bool $canal64Kbit
     *
     * @return facilidades_del_equipo
     */
    public function setCanal64Kbit($canal64Kbit)
    {
        $this->canal64Kbit = $canal64Kbit;

        return $this;
    }

    /**
     * Get canal64Kbit.
     *
     * @return bool
     */
    public function getCanal64Kbit()
    {
        return $this->canal64Kbit;
    }

    /**
     * Set canal2Mbit.
     *
     * @param bool $canal2Mbit
     *
     * @return facilidades_del_equipo
     */
    public function setCanal2Mbit($canal2Mbit)
    {
        $this->canal2Mbit = $canal2Mbit;

        return $this;
    }

    /**
     * Get canal2Mbit.
     *
     * @return bool
     */
    public function getCanal2Mbit()
    {
        return $this->canal2Mbit;
    }

    /**
     * Set canal34Mbit.
     *
     * @param bool $canal34Mbit
     *
     * @return facilidades_del_equipo
     */
    public function setCanal34Mbit($canal34Mbit)
    {
        $this->canal34Mbit = $canal34Mbit;

        return $this;
    }

    /**
     * Get canal34Mbit.
     *
     * @return bool
     */
    public function getCanal34Mbit()
    {
        return $this->canal34Mbit;
    }

    /**
     * Set equipo.
     *
     * @param \AppBundle\Entity\relacion_equipos $equipo
     *
     * @return facilidades_del_equipo
     */
    public function setEquipo(\AppBundle\Entity\relacion_equipos $equipo)
    {
        $this->equipo = $equipo;

        return $this;
    }

    /**
     * Get equipo.
     *
     * @return \AppBundle\Entity\relacion_equipos
     */
    public function getEquipo()
    {
        return $this->equipo;
    }
}
