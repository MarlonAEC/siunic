<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * tipos_distancias_arrendadas
 *
 * @ORM\Table(name="tipos_distancias_arrendadas")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\tipos_distancias_arrendadasRepository")
 */
class tipos_distancias_arrendadas
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
     * @ORM\ManyToOne(targetEntity="contrato_arrendamiento_redes", cascade={"all"})
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank(message="No debe estar vacío")
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_distancia_arrendada", type="string", length=255)
     */
    private $tipoDistanciaArrendada;
    /**
     * @var string
     * 
     * @ORM\Column(name="desde", type="string", length=255)
     */
    private $desde;
    /**
     * @var string
     * 
     * @ORM\Column(name="hasta", type="string", length=255)
     */
    private $hasta;
    /**
     * @var float
     * 
     * @ORM\Column(name="distancia", type="float")
     */
    private $distancia;

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
     * Set tipoDistanciaArrendada.
     *
     * @param string $tipoDistanciaArrendada
     *
     * @return tipos_distancias_arrendadas
     */
    public function setTipoDistanciaArrendada($tipoDistanciaArrendada)
    {
        $this->tipoDistanciaArrendada = $tipoDistanciaArrendada;

        return $this;
    }

    /**
     * Get tipoDistanciaArrendada.
     *
     * @return string
     */
    public function getTipoDistanciaArrendada()
    {
        return $this->tipoDistanciaArrendada;
    }

    /**
     * Set desde.
     *
     * @param string $desde
     *
     * @return tipos_distancias_arrendadas
     */
    public function setDesde($desde)
    {
        $this->desde = $desde;

        return $this;
    }

    /**
     * Get desde.
     *
     * @return string
     */
    public function getDesde()
    {
        return $this->desde;
    }

    /**
     * Set hasta.
     *
     * @param string $hasta
     *
     * @return tipos_distancias_arrendadas
     */
    public function setHasta($hasta)
    {
        $this->hasta = $hasta;

        return $this;
    }

    /**
     * Get hasta.
     *
     * @return string
     */
    public function getHasta()
    {
        return $this->hasta;
    }

    /**
     * Set distancia.
     *
     * @param float $distancia
     *
     * @return tipos_distancias_arrendadas
     */
    public function setDistancia($distancia)
    {
        $this->distancia = $distancia;

        return $this;
    }

    /**
     * Get distancia.
     *
     * @return float
     */
    public function getDistancia()
    {
        return $this->distancia;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_arrendamiento_redes $contrato
     *
     * @return tipos_distancias_arrendadas
     */
    public function setContrato(\AppBundle\Entity\contrato_arrendamiento_redes $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_arrendamiento_redes
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}
