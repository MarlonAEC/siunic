<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexocps_conexion_centrales_telefonicas
 *
 * @ORM\Table(name="anexocps_conexion_centrales_telefonicas")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexocps_conexion_centrales_telefonicasRepository")
 */
class anexocps_conexion_centrales_telefonicas
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
     * @ORM\OneToOne(targetEntity="contrato_prestacion_servicios", cascade={"all"})
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_factura", type="string", length=255)
     */
    private $numeroFactura;
    
    public function __toString() {
        return $this->getId() ? 'Datos conexion del contrato: '.$this->getContrato()->getNumeroContrato():'';
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
     * Set numeroFactura.
     *
     * @param string $numeroFactura
     *
     * @return anexocps_conexion_centrales_telefonicas
     */
    public function setNumeroFactura($numeroFactura)
    {
        $this->numeroFactura = $numeroFactura;

        return $this;
    }

    /**
     * Get numeroFactura.
     *
     * @return string
     */
    public function getNumeroFactura()
    {
        return $this->numeroFactura;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_prestacion_servicios $contrato
     *
     * @return anexocps_conexion_centrales_telefonicas
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
