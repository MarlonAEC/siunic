<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * tarifas_conexion_pizarras
 *
 * @ORM\Table(name="tarifas_conexion_pizarras")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\tarifas_conexion_pizarrasRepository")
 */
class tarifas_conexion_pizarras
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
     * @ORM\Column(name="servicio", type="string", length=255)
     */
    private $servicio;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda_pago", type="string", length=255)
     */
    private $monedaPago;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_arrendada", type="integer")
     */
    private $cantArrendada;

    /**
     * @var float
     *
     * @ORM\Column(name="cuota_una_vez", type="float")
     */
    private $cuotaUnaVez;

    /**
     * @var float
     *
     * @ORM\Column(name="couta_mensual", type="float")
     */
    private $coutaMensual;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tarifa_consumo", type="float", nullable=true)
     */
    private $tarifaConsumo;
    
    public function __toString() {
        return $this->getId() ? 'Tarifas del contrato: '.$this->getContrato()->getNumeroContrato():'';
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
     * Set servicio.
     *
     * @param string $servicio
     *
     * @return tarifas_conexion_pizarras
     */
    public function setServicio($servicio)
    {
        $this->servicio = $servicio;

        return $this;
    }

    /**
     * Get servicio.
     *
     * @return string
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * Set monedaPago.
     *
     * @param string $monedaPago
     *
     * @return tarifas_conexion_pizarras
     */
    public function setMonedaPago($monedaPago)
    {
        $this->monedaPago = $monedaPago;

        return $this;
    }

    /**
     * Get monedaPago.
     *
     * @return string
     */
    public function getMonedaPago()
    {
        return $this->monedaPago;
    }

    /**
     * Set cantArrendada.
     *
     * @param int $cantArrendada
     *
     * @return tarifas_conexion_pizarras
     */
    public function setCantArrendada($cantArrendada)
    {
        $this->cantArrendada = $cantArrendada;

        return $this;
    }

    /**
     * Get cantArrendada.
     *
     * @return int
     */
    public function getCantArrendada()
    {
        return $this->cantArrendada;
    }

    /**
     * Set cuotaUnaVez.
     *
     * @param float $cuotaUnaVez
     *
     * @return tarifas_conexion_pizarras
     */
    public function setCuotaUnaVez($cuotaUnaVez)
    {
        $this->cuotaUnaVez = $cuotaUnaVez;

        return $this;
    }

    /**
     * Get cuotaUnaVez.
     *
     * @return float
     */
    public function getCuotaUnaVez()
    {
        return $this->cuotaUnaVez;
    }

    /**
     * Set coutaMensual.
     *
     * @param float $coutaMensual
     *
     * @return tarifas_conexion_pizarras
     */
    public function setCoutaMensual($coutaMensual)
    {
        $this->coutaMensual = $coutaMensual;

        return $this;
    }

    /**
     * Get coutaMensual.
     *
     * @return float
     */
    public function getCoutaMensual()
    {
        return $this->coutaMensual;
    }

    /**
     * Set tarifaConsumo.
     *
     * @param float|null $tarifaConsumo
     *
     * @return tarifas_conexion_pizarras
     */
    public function setTarifaConsumo($tarifaConsumo = null)
    {
        $this->tarifaConsumo = $tarifaConsumo;

        return $this;
    }

    /**
     * Get tarifaConsumo.
     *
     * @return float|null
     */
    public function getTarifaConsumo()
    {
        return $this->tarifaConsumo;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_prestacion_servicios $contrato
     *
     * @return tarifas_conexion_pizarras
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
