<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * descripcion_productos_servicios
 *
 * @ORM\Table(name="descripcion_productos_servicios")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\descripcion_productos_serviciosRepository")
 */
class descripcion_productos_servicios
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
     * @var string
     *
     * @ORM\Column(name="descripcion_producto_servicio", type="string", length=255)
     */
    private $descripcionProductoServicio;

    /**
     * @var float
     *
     * @ORM\Column(name="precio_unitario", type="float")
     */
    private $precioUnitario;

    /**
     * @var float
     *
     * @ORM\Column(name="porciento_comision_ventas", type="float")
     */
    private $porcientoComisionVentas;

    /**
     * @var float
     *
     * @ORM\Column(name="porciento_descuento_volumen_compra", type="float")
     */
    private $porcientoDescuentoVolumenCompra;

    /**
     * @var int
     *
     * @ORM\Column(name="termino_garantias_meses", type="integer")
     */
    private $terminoGarantiasMeses;
    
    public function __toString() {
        return $this->getId()? "Descripción de Produc-Serv del Contrato: ".$this->getContrato()->getNumeroContrato():'';
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
     * Set descripcionProductoServicio.
     *
     * @param string $descripcionProductoServicio
     *
     * @return descripcion_productos_servicios
     */
    public function setDescripcionProductoServicio($descripcionProductoServicio)
    {
        $this->descripcionProductoServicio = $descripcionProductoServicio;

        return $this;
    }

    /**
     * Get descripcionProductoServicio.
     *
     * @return string
     */
    public function getDescripcionProductoServicio()
    {
        return $this->descripcionProductoServicio;
    }

    /**
     * Set precioUnitario.
     *
     * @param float $precioUnitario
     *
     * @return descripcion_productos_servicios
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
     * Set porcientoComisionVentas.
     *
     * @param float $porcientoComisionVentas
     *
     * @return descripcion_productos_servicios
     */
    public function setPorcientoComisionVentas($porcientoComisionVentas)
    {
        $this->porcientoComisionVentas = $porcientoComisionVentas;

        return $this;
    }

    /**
     * Get porcientoComisionVentas.
     *
     * @return float
     */
    public function getPorcientoComisionVentas()
    {
        return $this->porcientoComisionVentas;
    }

    /**
     * Set porcientoDescuentoVolumenCompra.
     *
     * @param float $porcientoDescuentoVolumenCompra
     *
     * @return descripcion_productos_servicios
     */
    public function setPorcientoDescuentoVolumenCompra($porcientoDescuentoVolumenCompra)
    {
        $this->porcientoDescuentoVolumenCompra = $porcientoDescuentoVolumenCompra;

        return $this;
    }

    /**
     * Get porcientoDescuentoVolumenCompra.
     *
     * @return float
     */
    public function getPorcientoDescuentoVolumenCompra()
    {
        return $this->porcientoDescuentoVolumenCompra;
    }

    /**
     * Set terminoGarantiasMeses.
     *
     * @param int $terminoGarantiasMeses
     *
     * @return descripcion_productos_servicios
     */
    public function setTerminoGarantiasMeses($terminoGarantiasMeses)
    {
        $this->terminoGarantiasMeses = $terminoGarantiasMeses;

        return $this;
    }

    /**
     * Get terminoGarantiasMeses.
     *
     * @return int
     */
    public function getTerminoGarantiasMeses()
    {
        return $this->terminoGarantiasMeses;
    }
}
