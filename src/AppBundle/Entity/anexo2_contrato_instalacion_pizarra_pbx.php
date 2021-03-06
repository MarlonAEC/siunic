<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexo2_contrato_instalacion_pizarra_pbx
 *
 * @ORM\Table(name="anexo2_contrato_instalacion_pizarra_pbx")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexo2_contrato_instalacion_pizarra_pbxRepository")
 */
class anexo2_contrato_instalacion_pizarra_pbx
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
     * @ORM\OneToOne(targetEntity="contrato_instalacion_pizarra_pbx", cascade={"all"})
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     */
    private $contrato;
    /**
     *
     * @ORM\ManyToOne(targetEntity="pizarra_pbx")
     * @ORM\JoinColumn(name="id_pizarra", referencedColumnName="id", nullable=false)
     */
    private $pizarra;


    /**
     * @var bool|null
     *
     * @ORM\Column(name="telefonos_asociados", type="boolean", nullable=true)
     */
    private $telefonosAsociados;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="licencia_software", type="boolean", nullable=true)
     */
    private $licenciaSoftware;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="otros_accesorios", type="boolean", nullable=true)
     */
    private $otrosAccesorios;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_moneda", type="string", length=50)
     */
    private $tipoMoneda;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad_troncos", type="integer")
     */
    private $cantidadTroncos;

    /**
     * @var float
     *
     * @ORM\Column(name="tarifa_troncos", type="float")
     */
    private $tarifaTroncos;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad_extensiones", type="integer")
     */
    private $cantidadExtensiones;

    /**
     * @var float
     *
     * @ORM\Column(name="tarifa_extensiones", type="float")
     */
    private $tarifaExtensiones;
    
    public function __toString() {
        return $this->getId() ? 'Anexo 2 al contrato:'.$this->getContrato()->getNumeroContrato():'';
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
     * Set telefonosAsociados.
     *
     * @param bool|null $telefonosAsociados
     *
     * @return anexo2_contrato_instalacion_pizarra_pbx
     */
    public function setTelefonosAsociados($telefonosAsociados = null)
    {
        $this->telefonosAsociados = $telefonosAsociados;

        return $this;
    }

    /**
     * Get telefonosAsociados.
     *
     * @return bool|null
     */
    public function getTelefonosAsociados()
    {
        return $this->telefonosAsociados;
    }

    /**
     * Set licenciaSoftware.
     *
     * @param bool|null $licenciaSoftware
     *
     * @return anexo2_contrato_instalacion_pizarra_pbx
     */
    public function setLicenciaSoftware($licenciaSoftware = null)
    {
        $this->licenciaSoftware = $licenciaSoftware;

        return $this;
    }

    /**
     * Get licenciaSoftware.
     *
     * @return bool|null
     */
    public function getLicenciaSoftware()
    {
        return $this->licenciaSoftware;
    }

    /**
     * Set otrosAccesorios.
     *
     * @param bool|null $otrosAccesorios
     *
     * @return anexo2_contrato_instalacion_pizarra_pbx
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
     * Set tipoMoneda.
     *
     * @param string $tipoMoneda
     *
     * @return anexo2_contrato_instalacion_pizarra_pbx
     */
    public function setTipoMoneda($tipoMoneda)
    {
        $this->tipoMoneda = $tipoMoneda;

        return $this;
    }

    /**
     * Get tipoMoneda.
     *
     * @return string
     */
    public function getTipoMoneda()
    {
        return $this->tipoMoneda;
    }

    /**
     * Set cantidadTroncos.
     *
     * @param int $cantidadTroncos
     *
     * @return anexo2_contrato_instalacion_pizarra_pbx
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
     * Set tarifaTroncos.
     *
     * @param float $tarifaTroncos
     *
     * @return anexo2_contrato_instalacion_pizarra_pbx
     */
    public function setTarifaTroncos($tarifaTroncos)
    {
        $this->tarifaTroncos = $tarifaTroncos;

        return $this;
    }

    /**
     * Get tarifaTroncos.
     *
     * @return float
     */
    public function getTarifaTroncos()
    {
        return $this->tarifaTroncos;
    }

    /**
     * Set cantidadExtensiones.
     *
     * @param int $cantidadExtensiones
     *
     * @return anexo2_contrato_instalacion_pizarra_pbx
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
     * Set tarifaExtensiones.
     *
     * @param float $tarifaExtensiones
     *
     * @return anexo2_contrato_instalacion_pizarra_pbx
     */
    public function setTarifaExtensiones($tarifaExtensiones)
    {
        $this->tarifaExtensiones = $tarifaExtensiones;

        return $this;
    }

    /**
     * Get tarifaExtensiones.
     *
     * @return float
     */
    public function getTarifaExtensiones()
    {
        return $this->tarifaExtensiones;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_instalacion_pizarra_pbx $contrato
     *
     * @return anexo2_contrato_instalacion_pizarra_pbx
     */
    public function setContrato(\AppBundle\Entity\contrato_instalacion_pizarra_pbx $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_instalacion_pizarra_pbx
     */
    public function getContrato()
    {
        return $this->contrato;
    }

    /**
     * Set pizarra.
     *
     * @param \AppBundle\Entity\pizarra_pbx $pizarra
     *
     * @return anexo2_contrato_instalacion_pizarra_pbx
     */
    public function setPizarra(\AppBundle\Entity\pizarra_pbx $pizarra)
    {
        $this->pizarra = $pizarra;

        return $this;
    }

    /**
     * Get pizarra.
     *
     * @return \AppBundle\Entity\pizarra_pbx
     */
    public function getPizarra()
    {
        return $this->pizarra;
    }
}
