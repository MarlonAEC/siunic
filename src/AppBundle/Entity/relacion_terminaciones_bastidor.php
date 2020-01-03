<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * relacion_terminaciones_bastidor
 *
 * @ORM\Table(name="relacion_terminaciones_bastidor")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\relacion_terminaciones_bastidorRepository")
 */
class relacion_terminaciones_bastidor
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
     * @ORM\ManyToOne(targetEntity="terminaciones")
     * @ORM\JoinColumn(name="id_terminacion", referencedColumnName="id", nullable=false)
     */
    private $terminacion;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="relacion_bastidores")
     * @ORM\JoinColumn(name="id_bastidor", referencedColumnName="id", nullable=false)
     */
    private $bastidor;

    /**
     * @var float
     *
     * @ORM\Column(name="capacidad_total", type="float")
     */
    private $capacidadTotal;

    /**
     * @var float
     *
     * @ORM\Column(name="capacidad_a_instalar", type="float")
     */
    private $capacidadAInstalar;


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
     * Set capacidadTotal.
     *
     * @param float $capacidadTotal
     *
     * @return relacion_terminaciones_bastidor
     */
    public function setCapacidadTotal($capacidadTotal)
    {
        $this->capacidadTotal = $capacidadTotal;

        return $this;
    }

    /**
     * Get capacidadTotal.
     *
     * @return float
     */
    public function getCapacidadTotal()
    {
        return $this->capacidadTotal;
    }

    /**
     * Set capacidadAInstalar.
     *
     * @param float $capacidadAInstalar
     *
     * @return relacion_terminaciones_bastidor
     */
    public function setCapacidadAInstalar($capacidadAInstalar)
    {
        $this->capacidadAInstalar = $capacidadAInstalar;

        return $this;
    }

    /**
     * Get capacidadAInstalar.
     *
     * @return float
     */
    public function getCapacidadAInstalar()
    {
        return $this->capacidadAInstalar;
    }

    /**
     * Set terminacion.
     *
     * @param \AppBundle\Entity\terminaciones $terminacion
     *
     * @return relacion_terminaciones_bastidor
     */
    public function setTerminacion(\AppBundle\Entity\terminaciones $terminacion)
    {
        $this->terminacion = $terminacion;

        return $this;
    }

    /**
     * Get terminacion.
     *
     * @return \AppBundle\Entity\terminaciones
     */
    public function getTerminacion()
    {
        return $this->terminacion;
    }

    /**
     * Set bastidor.
     *
     * @param \AppBundle\Entity\relacion_bastidores $bastidor
     *
     * @return relacion_terminaciones_bastidor
     */
    public function setBastidor(\AppBundle\Entity\relacion_bastidores $bastidor)
    {
        $this->bastidor = $bastidor;

        return $this;
    }

    /**
     * Get bastidor.
     *
     * @return \AppBundle\Entity\relacion_bastidores
     */
    public function getBastidor()
    {
        return $this->bastidor;
    }
}
