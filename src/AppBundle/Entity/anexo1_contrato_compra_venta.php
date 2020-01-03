<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexo1_contrato_compra_venta
 *
 * @ORM\Table(name="anexo1_contrato_compra_venta")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexo1_contrato_compra_ventaRepository")
 */
class anexo1_contrato_compra_venta
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
     * @ORM\Column(name="descripcion_producto", type="string", length=255)
     */
    private $descripcionProducto;

    /**
     * @var float
     *
     * @ORM\Column(name="precio_unitario", type="float")
     */
    private $precioUnitario;

    /**
     * @var float
     *
     * @ORM\Column(name="porciento_comision_venta", type="float")
     */
    private $porcientoComisionVenta;

    /**
     * @var float
     *
     * @ORM\Column(name="porciento_descuento", type="float")
     */
    private $porcientoDescuento;

    /**
     * @var int
     *
     * @ORM\Column(name="termino_garantia", type="integer")
     */
    private $terminoGarantia;

    public function __toString() {
        return $this->getId() ? 'Anexo 1 al contrato: '.$this->getContrato()->getNumeroContrato():'';
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
     * Set descripcionProducto.
     *
     * @param string $descripcionProducto
     *
     * @return anexo1_contrato_compra_venta
     */
    public function setDescripcionProducto($descripcionProducto)
    {
        $this->descripcionProducto = $descripcionProducto;

        return $this;
    }

    /**
     * Get descripcionProducto.
     *
     * @return string
     */
    public function getDescripcionProducto()
    {
        return $this->descripcionProducto;
    }

    /**
     * Set precioUnitario.
     *
     * @param float $precioUnitario
     *
     * @return anexo1_contrato_compra_venta
     */
    public function setPrecioUnitario($precioUnitario)
    {
        $this->precioUnitario = $precioUnitario;

        return $this;
    }

    /**
     * Get precioUnitario.
     *
     * @return float
     */
    public function getPrecioUnitario()
    {
        return $this->precioUnitario;
    }

    /**
     * Set porcientoComisionVenta.
     *
     * @param float $porcientoComisionVenta
     *
     * @return anexo1_contrato_compra_venta
     */
    public function setPorcientoComisionVenta($porcientoComisionVenta)
    {
        $this->porcientoComisionVenta = $porcientoComisionVenta;

        return $this;
    }

    /**
     * Get porcientoComisionVenta.
     *
     * @return float
     */
    public function getPorcientoComisionVenta()
    {
        return $this->porcientoComisionVenta;
    }

    /**
     * Set porcientoDescuento.
     *
     * @param float $porcientoDescuento
     *
     * @return anexo1_contrato_compra_venta
     */
    public function setPorcientoDescuento($porcientoDescuento)
    {
        $this->porcientoDescuento = $porcientoDescuento;

        return $this;
    }

    /**
     * Get porcientoDescuento.
     *
     * @return float
     */
    public function getPorcientoDescuento()
    {
        return $this->porcientoDescuento;
    }

    /**
     * Set terminoGarantia.
     *
     * @param int $terminoGarantia
     *
     * @return anexo1_contrato_compra_venta
     */
    public function setTerminoGarantia($terminoGarantia)
    {
        $this->terminoGarantia = $terminoGarantia;

        return $this;
    }

    /**
     * Get terminoGarantia.
     *
     * @return int
     */
    public function getTerminoGarantia()
    {
        return $this->terminoGarantia;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_compra_venta $contrato
     *
     * @return anexo1_contrato_compra_venta
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
