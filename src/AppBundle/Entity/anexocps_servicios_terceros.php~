<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexocps_servicios_terceros
 *
 * @ORM\Table(name="anexocps_servicios_terceros")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexocps_servicios_tercerosRepository")
 */
class anexocps_servicios_terceros
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
     * @ORM\ManyToOne(targetEntity="contrato_prestacion_servicios", cascade={"all"})
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank(message="No debe estar vacío")
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_servicio", type="string", length=255)
     */
    private $descripcionServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="obra", type="string", length=255)
     */
    private $obra;

    /**
     * @var int
     *
     * @ORM\Column(name="dias_limites", type="integer")
     */
    private $diasLimites;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_cuc", type="float")
     */
    private $montoCuc;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_cup", type="float")
     */
    private $montoCup;
    
    public function __toString() {
        return $this->getId() ? 'Servicios a Terceros del contrato: '.$this->getContrato()->getNumeroContrato():'';
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
     * Set descripcionServicio.
     *
     * @param string $descripcionServicio
     *
     * @return anexocps_servicios_terceros
     */
    public function setDescripcionServicio($descripcionServicio)
    {
        $this->descripcionServicio = $descripcionServicio;

        return $this;
    }

    /**
     * Get descripcionServicio.
     *
     * @return string
     */
    public function getDescripcionServicio()
    {
        return $this->descripcionServicio;
    }

    /**
     * Set obra.
     *
     * @param string $obra
     *
     * @return anexocps_servicios_terceros
     */
    public function setObra($obra)
    {
        $this->obra = $obra;

        return $this;
    }

    /**
     * Get obra.
     *
     * @return string
     */
    public function getObra()
    {
        return $this->obra;
    }

    /**
     * Set diasLimites.
     *
     * @param int $diasLimites
     *
     * @return anexocps_servicios_terceros
     */
    public function setDiasLimites($diasLimites)
    {
        $this->diasLimites = $diasLimites;

        return $this;
    }

    /**
     * Get diasLimites.
     *
     * @return int
     */
    public function getDiasLimites()
    {
        return $this->diasLimites;
    }

    /**
     * Set montoCuc.
     *
     * @param float $montoCuc
     *
     * @return anexocps_servicios_terceros
     */
    public function setMontoCuc($montoCuc)
    {
        $this->montoCuc = $montoCuc;

        return $this;
    }

    /**
     * Get montoCuc.
     *
     * @return float
     */
    public function getMontoCuc()
    {
        return $this->montoCuc;
    }

    /**
     * Set montoCup.
     *
     * @param float $montoCup
     *
     * @return anexocps_servicios_terceros
     */
    public function setMontoCup($montoCup)
    {
        $this->montoCup = $montoCup;

        return $this;
    }

    /**
     * Get montoCup.
     *
     * @return float
     */
    public function getMontoCup()
    {
        return $this->montoCup;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_prestacion_servicios $contrato
     *
     * @return anexocps_servicios_terceros
     */
    public function setContrato(\AppBundle\Entity\contrato_prestacion_servicios $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_prestacion_servicios
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}
