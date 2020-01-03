<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexocps_levantamiento_redes_tecnicas
 *
 * @ORM\Table(name="anexocps_levantamiento_redes_tecnicas")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexocps_levantamiento_redes_tecnicasRepository")
 */
class anexocps_levantamiento_redes_tecnicas
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
     * @var int
     *
     * @ORM\Column(name="dias_limite", type="integer")
     */
    private $diasLimite;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var int
     *
     * @ORM\Column(name="instrumento_pago", type="integer")
     */
    private $instrumentoPago;
    
    public function __toString() {
        return $this->getId() ? 'Redes Técnicas del contrato: '.$this->getContrato()->getNumeroContrato():'';
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
     * Set diasLimite.
     *
     * @param int $diasLimite
     *
     * @return anexocps_levantamiento_redes_tecnicas
     */
    public function setDiasLimite($diasLimite)
    {
        $this->diasLimite = $diasLimite;

        return $this;
    }

    /**
     * Get diasLimite.
     *
     * @return int
     */
    public function getDiasLimite()
    {
        return $this->diasLimite;
    }

    /**
     * Set direccion.
     *
     * @param string $direccion
     *
     * @return anexocps_levantamiento_redes_tecnicas
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion.
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set instrumentoPago.
     *
     * @param int $instrumentoPago
     *
     * @return anexocps_levantamiento_redes_tecnicas
     */
    public function setInstrumentoPago($instrumentoPago)
    {
        $this->instrumentoPago = $instrumentoPago;

        return $this;
    }

    /**
     * Get instrumentoPago.
     *
     * @return int
     */
    public function getInstrumentoPago()
    {
        return $this->instrumentoPago;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_prestacion_servicios $contrato
     *
     * @return anexocps_levantamiento_redes_tecnicas
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
