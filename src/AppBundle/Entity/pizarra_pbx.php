<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * pizarra_pbx
 *
 * @ORM\Table(name="pizarra_pbx")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\pizarra_pbxRepository")
 */
class pizarra_pbx
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
     *
     * @ORM\Column(name="modelo", type="string", length=50)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=50)
     */
    private $marca;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad_extensiones_disponibles", type="integer")
     */
    private $cantidadExtensionesDisponibles;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad_troncos_disponibles", type="integer")
     */
    private $cantidadTroncosDisponibles;
    
    public function __toString() {
        return $this->getId() ? $this->getModelo().'-'.$this->getMarca():'';
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
     * Set modelo.
     *
     * @param string $modelo
     *
     * @return pizarra_pbx
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo.
     *
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set marca.
     *
     * @param string $marca
     *
     * @return pizarra_pbx
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca.
     *
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set cantidadExtensionesDisponibles.
     *
     * @param int $cantidadExtensionesDisponibles
     *
     * @return pizarra_pbx
     */
    public function setCantidadExtensionesDisponibles($cantidadExtensionesDisponibles)
    {
        $this->cantidadExtensionesDisponibles = $cantidadExtensionesDisponibles;

        return $this;
    }

    /**
     * Get cantidadExtensionesDisponibles.
     *
     * @return int
     */
    public function getCantidadExtensionesDisponibles()
    {
        return $this->cantidadExtensionesDisponibles;
    }

    /**
     * Set cantidadTroncosDisponibles.
     *
     * @param int $cantidadTroncosDisponibles
     *
     * @return pizarra_pbx
     */
    public function setCantidadTroncosDisponibles($cantidadTroncosDisponibles)
    {
        $this->cantidadTroncosDisponibles = $cantidadTroncosDisponibles;

        return $this;
    }

    /**
     * Get cantidadTroncosDisponibles.
     *
     * @return int
     */
    public function getCantidadTroncosDisponibles()
    {
        return $this->cantidadTroncosDisponibles;
    }
}
