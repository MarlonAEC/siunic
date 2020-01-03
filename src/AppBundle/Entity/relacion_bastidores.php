<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * relacion_bastidores
 *
 * @ORM\Table(name="relacion_bastidores")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\relacion_bastidoresRepository")
 */
class relacion_bastidores
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
     * @var string
     *
     * @ORM\Column(name="propietario", type="string", length=50)
     */
    private $propietario;

    /**
     * @var bool
     *
     * @ORM\Column(name="proteccion", type="boolean")
     */
    private $proteccion;

    /**
     * @var string
     *
     * @ORM\Column(name="modo_montaje_bastidor_nuevo", type="text")
     */
    private $modoMontajeBastidorNuevo;

    /**
     * @var float
     *
     * @ORM\Column(name="bastidor_ancho", type="float")
     */
    private $bastidorAncho;

    /**
     * @var float
     *
     * @ORM\Column(name="bastidor_profundidad", type="float")
     */
    private $bastidorProfundidad;

    /**
     * @var float
     *
     * @ORM\Column(name="bastidor_alto", type="float")
     */
    private $bastidorAlto;

    /**
     * @var float
     *
     * @ORM\Column(name="base_bastidor_ancho", type="float")
     */
    private $baseBastidorAncho;

    /**
     * @var float
     *
     * @ORM\Column(name="base_bastidor_profundidad", type="float")
     */
    private $baseBastidorProfundidad;

    /**
     * @var float
     *
     * @ORM\Column(name="base_bastidor_alto", type="float")
     */
    private $baseBastidorAlto;

    /**
     * @var bool
     *
     * @ORM\Column(name="bastidor_PDU", type="boolean")
     */
    private $bastidorPDU;


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
     * Set propietario.
     *
     * @param string $propietario
     *
     * @return relacion_bastidores
     */
    public function setPropietario($propietario)
    {
        $this->propietario = $propietario;

        return $this;
    }

    /**
     * Get propietario.
     *
     * @return string
     */
    public function getPropietario()
    {
        return $this->propietario;
    }

    /**
     * Set proteccion.
     *
     * @param bool $proteccion
     *
     * @return relacion_bastidores
     */
    public function setProteccion($proteccion)
    {
        $this->proteccion = $proteccion;

        return $this;
    }

    /**
     * Get proteccion.
     *
     * @return bool
     */
    public function getProteccion()
    {
        return $this->proteccion;
    }

    /**
     * Set modoMontajeBastidorNuevo.
     *
     * @param string $modoMontajeBastidorNuevo
     *
     * @return relacion_bastidores
     */
    public function setModoMontajeBastidorNuevo($modoMontajeBastidorNuevo)
    {
        $this->modoMontajeBastidorNuevo = $modoMontajeBastidorNuevo;

        return $this;
    }

    /**
     * Get modoMontajeBastidorNuevo.
     *
     * @return string
     */
    public function getModoMontajeBastidorNuevo()
    {
        return $this->modoMontajeBastidorNuevo;
    }

    /**
     * Set bastidorAncho.
     *
     * @param float $bastidorAncho
     *
     * @return relacion_bastidores
     */
    public function setBastidorAncho($bastidorAncho)
    {
        $this->bastidorAncho = $bastidorAncho;

        return $this;
    }

    /**
     * Get bastidorAncho.
     *
     * @return float
     */
    public function getBastidorAncho()
    {
        return $this->bastidorAncho;
    }

    /**
     * Set bastidorProfundidad.
     *
     * @param float $bastidorProfundidad
     *
     * @return relacion_bastidores
     */
    public function setBastidorProfundidad($bastidorProfundidad)
    {
        $this->bastidorProfundidad = $bastidorProfundidad;

        return $this;
    }

    /**
     * Get bastidorProfundidad.
     *
     * @return float
     */
    public function getBastidorProfundidad()
    {
        return $this->bastidorProfundidad;
    }

    /**
     * Set bastidorAlto.
     *
     * @param float $bastidorAlto
     *
     * @return relacion_bastidores
     */
    public function setBastidorAlto($bastidorAlto)
    {
        $this->bastidorAlto = $bastidorAlto;

        return $this;
    }

    /**
     * Get bastidorAlto.
     *
     * @return float
     */
    public function getBastidorAlto()
    {
        return $this->bastidorAlto;
    }

    /**
     * Set baseBastidorAncho.
     *
     * @param float $baseBastidorAncho
     *
     * @return relacion_bastidores
     */
    public function setBaseBastidorAncho($baseBastidorAncho)
    {
        $this->baseBastidorAncho = $baseBastidorAncho;

        return $this;
    }

    /**
     * Get baseBastidorAncho.
     *
     * @return float
     */
    public function getBaseBastidorAncho()
    {
        return $this->baseBastidorAncho;
    }

    /**
     * Set baseBastidorProfundidad.
     *
     * @param float $baseBastidorProfundidad
     *
     * @return relacion_bastidores
     */
    public function setBaseBastidorProfundidad($baseBastidorProfundidad)
    {
        $this->baseBastidorProfundidad = $baseBastidorProfundidad;

        return $this;
    }

    /**
     * Get baseBastidorProfundidad.
     *
     * @return float
     */
    public function getBaseBastidorProfundidad()
    {
        return $this->baseBastidorProfundidad;
    }

    /**
     * Set baseBastidorAlto.
     *
     * @param float $baseBastidorAlto
     *
     * @return relacion_bastidores
     */
    public function setBaseBastidorAlto($baseBastidorAlto)
    {
        $this->baseBastidorAlto = $baseBastidorAlto;

        return $this;
    }

    /**
     * Get baseBastidorAlto.
     *
     * @return float
     */
    public function getBaseBastidorAlto()
    {
        return $this->baseBastidorAlto;
    }

    /**
     * Set bastidorPDU.
     *
     * @param bool $bastidorPDU
     *
     * @return relacion_bastidores
     */
    public function setBastidorPDU($bastidorPDU)
    {
        $this->bastidorPDU = $bastidorPDU;

        return $this;
    }

    /**
     * Get bastidorPDU.
     *
     * @return bool
     */
    public function getBastidorPDU()
    {
        return $this->bastidorPDU;
    }

    /**
     * Set equipo.
     *
     * @param \AppBundle\Entity\relacion_equipos $equipo
     *
     * @return relacion_bastidores
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
