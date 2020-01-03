<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexo4_contrato_compra_venta
 *
 * @ORM\Table(name="anexo4_contrato_compra_venta")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexo4_contrato_compra_ventaRepository")
 */
class anexo4_contrato_compra_venta
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
     * @ORM\ManyToOne(targetEntity="contrato_compra_venta")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id", nullable=false)
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="municipio", type="string", length=255)
     */
    private $municipio;

    /**
     * @var string
     *
     * @ORM\Column(name="unidades_comerciales", type="string", length=255)
     */
    private $unidadesComerciales;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="horario_atencion", type="string", length=255)
     */
    private $horarioAtencion;
    
    public function __toString() {
        return $this->getId() ? 'Anexo 4 al contrato: '.$this->getContrato()->getNumeroContrato():'';
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
     * Set municipio.
     *
     * @param string $municipio
     *
     * @return anexo4_contrato_compra_venta
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio.
     *
     * @return string
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set unidadesComerciales.
     *
     * @param string $unidadesComerciales
     *
     * @return anexo4_contrato_compra_venta
     */
    public function setUnidadesComerciales($unidadesComerciales)
    {
        $this->unidadesComerciales = $unidadesComerciales;

        return $this;
    }

    /**
     * Get unidadesComerciales.
     *
     * @return string
     */
    public function getUnidadesComerciales()
    {
        return $this->unidadesComerciales;
    }

    /**
     * Set direccion.
     *
     * @param string $direccion
     *
     * @return anexo4_contrato_compra_venta
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
     * Set horarioAtencion.
     *
     * @param string $horarioAtencion
     *
     * @return anexo4_contrato_compra_venta
     */
    public function setHorarioAtencion($horarioAtencion)
    {
        $this->horarioAtencion = $horarioAtencion;

        return $this;
    }

    /**
     * Get horarioAtencion.
     *
     * @return string
     */
    public function getHorarioAtencion()
    {
        return $this->horarioAtencion;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_compra_venta $contrato
     *
     * @return anexo4_contrato_compra_venta
     */
    public function setContrato(\AppBundle\Entity\contrato_compra_venta $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_compra_venta
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}
