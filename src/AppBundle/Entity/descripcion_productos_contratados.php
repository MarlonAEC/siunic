<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * descripcion_productos_contratados
 *
 * @ORM\Table(name="descripcion_productos_contratados")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\descripcion_productos_contratadosRepository")
 */
class descripcion_productos_contratados
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
     *
     * @ORM\ManyToOne(targetEntity="contrato_comp_vent_pizarra", cascade={"all"})
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank(message="No debe estar vacío")
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="UM", type="string", length=255)
     */
    private $uM;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float")
     */
    private $precio;

    /**
     * @var float
     *
     * @ORM\Column(name="precio_total", type="float")
     */
    private $precioTotal;
    
    public function __toString() {
        return $this->getId()? "Descripción de Productos del Contrato: ".$this->getContrato()->getNumeroContrato():'';
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
     * Set descripcion.
     *
     * @param string $descripcion
     *
     * @return descripcion_productos_contratados
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion.
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set uM.
     *
     * @param string $uM
     *
     * @return descripcion_productos_contratados
     */
    public function setUM($uM)
    {
        $this->uM = $uM;

        return $this;
    }

    /**
     * Get uM.
     *
     * @return string
     */
    public function getUM()
    {
        return $this->uM;
    }

    /**
     * Set cantidad.
     *
     * @param int $cantidad
     *
     * @return descripcion_productos_contratados
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad.
     *
     * @return int
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set precio.
     *
     * @param float $precio
     *
     * @return descripcion_productos_contratados
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio.
     *
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set precioTotal.
     *
     * @param float $precioTotal
     *
     * @return descripcion_productos_contratados
     */
    public function setPrecioTotal($precioTotal)
    {
        $this->precioTotal = $precioTotal;

        return $this;
    }

    /**
     * Get precioTotal.
     *
     * @return float
     */
    public function getPrecioTotal()
    {
        return $this->precioTotal;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_comp_vent_pizarra $contrato
     *
     * @return descripcion_productos_contratados
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
