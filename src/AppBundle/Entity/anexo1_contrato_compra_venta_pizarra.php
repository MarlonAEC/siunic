<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexo1_contrato_compra_venta_pizarra
 *
 * @ORM\Table(name="anexo1_contrato_compra_venta_pizarra")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexo1_contrato_compra_venta_pizarraRepository")
 */
class anexo1_contrato_compra_venta_pizarra
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
     * @ORM\OneToOne(targetEntity="contrato_comp_vent_pizarra", cascade={"all"})
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank(message="No debe estar vacío")
     */
    private $contrato;

    /**
     * @var bool
     *
     * @ORM\Column(name="pizarra_pbx", type="boolean")
     */
    private $pizarraPbx;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=50)
     */
    private $modelo;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad_troncos", type="integer")
     */
    private $cantidadTroncos;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad_extensiones", type="integer")
     */
    private $cantidadExtensiones;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="telefonos_asociados_pbx", type="boolean", nullable=true)
     */
    private $telefonosAsociadosPbx;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="licencias_o_software", type="boolean", nullable=true)
     */
    private $licenciasOSoftware;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="otros_accesorios", type="boolean", nullable=true)
     */
    private $otrosAccesorios;
    
    public function __toString() {
        return $this->getId()?"Anexo 1 al Contrato".$this->getContrato()->getNumeroContrato():"";
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
     * Set pizarraPbx.
     *
     * @param bool $pizarraPbx
     *
     * @return anexo1_contrato_compra_venta_pizarra
     */
    public function setPizarraPbx($pizarraPbx)
    {
        $this->pizarraPbx = $pizarraPbx;

        return $this;
    }

    /**
     * Get pizarraPbx.
     *
     * @return bool
     */
    public function getPizarraPbx()
    {
        return $this->pizarraPbx;
    }

    /**
     * Set modelo.
     *
     * @param string $modelo
     *
     * @return anexo1_contrato_compra_venta_pizarra
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
     * Set cantidadTroncos.
     *
     * @param int $cantidadTroncos
     *
     * @return anexo1_contrato_compra_venta_pizarra
     */
    public function setCantidadTroncos($cantidadTroncos)
    {
        $this->cantidadTroncos = $cantidadTroncos;

        return $this;
    }

    /**
     * Get cantidadTroncos.
     *
     * @return int
     */
    public function getCantidadTroncos()
    {
        return $this->cantidadTroncos;
    }

    /**
     * Set cantidadExtensiones.
     *
     * @param int $cantidadExtensiones
     *
     * @return anexo1_contrato_compra_venta_pizarra
     */
    public function setCantidadExtensiones($cantidadExtensiones)
    {
        $this->cantidadExtensiones = $cantidadExtensiones;

        return $this;
    }

    /**
     * Get cantidadExtensiones.
     *
     * @return int
     */
    public function getCantidadExtensiones()
    {
        return $this->cantidadExtensiones;
    }

    /**
     * Set telefonosAsociadosPbx.
     *
     * @param bool|null $telefonosAsociadosPbx
     *
     * @return anexo1_contrato_compra_venta_pizarra
     */
    public function setTelefonosAsociadosPbx($telefonosAsociadosPbx = null)
    {
        $this->telefonosAsociadosPbx = $telefonosAsociadosPbx;

        return $this;
    }

    /**
     * Get telefonosAsociadosPbx.
     *
     * @return bool|null
     */
    public function getTelefonosAsociadosPbx()
    {
        return $this->telefonosAsociadosPbx;
    }

    /**
     * Set licenciasOSoftware.
     *
     * @param bool|null $licenciasOSoftware
     *
     * @return anexo1_contrato_compra_venta_pizarra
     */
    public function setLicenciasOSoftware($licenciasOSoftware = null)
    {
        $this->licenciasOSoftware = $licenciasOSoftware;

        return $this;
    }

    /**
     * Get licenciasOSoftware.
     *
     * @return bool|null
     */
    public function getLicenciasOSoftware()
    {
        return $this->licenciasOSoftware;
    }

    /**
     * Set otrosAccesorios.
     *
     * @param bool|null $otrosAccesorios
     *
     * @return anexo1_contrato_compra_venta_pizarra
     */
    public function setOtrosAccesorios($otrosAccesorios = null)
    {
        $this->otrosAccesorios = $otrosAccesorios;

        return $this;
    }

    /**
     * Get otrosAccesorios.
     *
     * @return bool|null
     */
    public function getOtrosAccesorios()
    {
        return $this->otrosAccesorios;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_comp_vent_pizarra $contrato
     *
     * @return anexo1_contrato_compra_venta_pizarra
     */
    public function setContrato(\AppBundle\Entity\contrato_comp_vent_pizarra $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_comp_vent_pizarra
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}
