<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexo1_contrato_arrendamiento_pizarras_privadas_pbx
 *
 * @ORM\Table(name="anexo1_contrato_arrendamiento_pizarras_privadas_pbx")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexo1_contrato_arrendamiento_pizarras_privadas_pbxRepository")
 */
class anexo1_contrato_arrendamiento_pizarras_privadas_pbx
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
     * @ORM\OneToOne(targetEntity="contrato_arrendamiento_pizarra_privada_pbx", cascade={"all"})
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank(message="No debe estar vacío")
     */
    private $contrato;
    /**
     *
     * @ORM\ManyToOne(targetEntity="pizarra_pbx")
     * @ORM\JoinColumn(name="id_pizarra", referencedColumnName="id", nullable=false)
     */
    private $pizarra;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad_troncos_a_instalar", type="integer")
     */
    private $cantidadTroncosAInstalar;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad_extensiones_a_instalar", type="integer")
     */
    private $cantidadExtensionesAInstalar;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad_flujos", type="integer")
     */
    private $cantidadFlujos;

    /**
     * @var float
     *
     * @ORM\Column(name="tarifa_mensual_arrendamiento", type="float")
     */
    private $tarifaMensualArrendamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_moneda", type="string", length=50)
     */
    private $tipoMoneda;

    /**
     * @var float
     *
     * @ORM\Column(name="tarifa_por_tronco", type="float")
     */
    private $tarifaPorTronco;

    /**
     * @var float
     *
     * @ORM\Column(name="tarifa_por_extensiones", type="float")
     */
    private $tarifaPorExtensiones;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_total_por_instalacion", type="float")
     */
    private $valorTotalPorInstalacion;

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
     * Set cantidadTroncosAInstalar.
     *
     * @param int $cantidadTroncosAInstalar
     *
     * @return anexo1_contrato_arrendamiento_pizarras_privadas_pbx
     */
    public function setCantidadTroncosAInstalar($cantidadTroncosAInstalar)
    {
        $this->cantidadTroncosAInstalar = $cantidadTroncosAInstalar;

        return $this;
    }

    /**
     * Get cantidadTroncosAInstalar.
     *
     * @return int
     */
    public function getCantidadTroncosAInstalar()
    {
        return $this->cantidadTroncosAInstalar;
    }

    /**
     * Set cantidadExtensionesAInstalar.
     *
     * @param int $cantidadExtensionesAInstalar
     *
     * @return anexo1_contrato_arrendamiento_pizarras_privadas_pbx
     */
    public function setCantidadExtensionesAInstalar($cantidadExtensionesAInstalar)
    {
        $this->cantidadExtensionesAInstalar = $cantidadExtensionesAInstalar;

        return $this;
    }

    /**
     * Get cantidadExtensionesAInstalar.
     *
     * @return int
     */
    public function getCantidadExtensionesAInstalar()
    {
        return $this->cantidadExtensionesAInstalar;
    }

    /**
     * Set cantidadFlujos.
     *
     * @param int $cantidadFlujos
     *
     * @return anexo1_contrato_arrendamiento_pizarras_privadas_pbx
     */
    public function setCantidadFlujos($cantidadFlujos)
    {
        $this->cantidadFlujos = $cantidadFlujos;

        return $this;
    }

    /**
     * Get cantidadFlujos.
     *
     * @return int
     */
    public function getCantidadFlujos()
    {
        return $this->cantidadFlujos;
    }

    /**
     * Set tarifaMensualArrendamiento.
     *
     * @param float $tarifaMensualArrendamiento
     *
     * @return anexo1_contrato_arrendamiento_pizarras_privadas_pbx
     */
    public function setTarifaMensualArrendamiento($tarifaMensualArrendamiento)
    {
        $this->tarifaMensualArrendamiento = $tarifaMensualArrendamiento;

        return $this;
    }

    /**
     * Get tarifaMensualArrendamiento.
     *
     * @return float
     */
    public function getTarifaMensualArrendamiento()
    {
        return $this->tarifaMensualArrendamiento;
    }

    /**
     * Set tipoMoneda.
     *
     * @param string $tipoMoneda
     *
     * @return anexo1_contrato_arrendamiento_pizarras_privadas_pbx
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
     * Set tarifaPorTronco.
     *
     * @param float $tarifaPorTronco
     *
     * @return anexo1_contrato_arrendamiento_pizarras_privadas_pbx
     */
    public function setTarifaPorTronco($tarifaPorTronco)
    {
        $this->tarifaPorTronco = $tarifaPorTronco;

        return $this;
    }

    /**
     * Get tarifaPorTronco.
     *
     * @return float
     */
    public function getTarifaPorTronco()
    {
        return $this->tarifaPorTronco;
    }

    /**
     * Set tarifaPorExtensiones.
     *
     * @param float $tarifaPorExtensiones
     *
     * @return anexo1_contrato_arrendamiento_pizarras_privadas_pbx
     */
    public function setTarifaPorExtensiones($tarifaPorExtensiones)
    {
        $this->tarifaPorExtensiones = $tarifaPorExtensiones;

        return $this;
    }

    /**
     * Get tarifaPorExtensiones.
     *
     * @return float
     */
    public function getTarifaPorExtensiones()
    {
        return $this->tarifaPorExtensiones;
    }

    /**
     * Set valorTotalPorInstalacion.
     *
     * @param float $valorTotalPorInstalacion
     *
     * @return anexo1_contrato_arrendamiento_pizarras_privadas_pbx
     */
    public function setValorTotalPorInstalacion($valorTotalPorInstalacion)
    {
        $this->valorTotalPorInstalacion = $valorTotalPorInstalacion;

        return $this;
    }

    /**
     * Get valorTotalPorInstalacion.
     *
     * @return float
     */
    public function getValorTotalPorInstalacion()
    {
        return $this->valorTotalPorInstalacion;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_arrendamiento_pizarra_privada_pbx $contrato
     *
     * @return anexo1_contrato_arrendamiento_pizarras_privadas_pbx
     */
    public function setContrato(\AppBundle\Entity\contrato_arrendamiento_pizarra_privada_pbx $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_arrendamiento_pizarra_privada_pbx
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
     * @return anexo1_contrato_arrendamiento_pizarras_privadas_pbx
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
