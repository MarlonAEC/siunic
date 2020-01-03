<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexo2_contrato_areas_internet
 *
 * @ORM\Table(name="anexo2_contrato_areas_internet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexo2_contrato_areas_internetRepository")
 */
class anexo2_contrato_areas_internet
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
     * @ORM\OneToOne(targetEntity="contrato_areas_internet", cascade={"all"})
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     */
    private $contrato;

    /**
     * @var float
     *
     * @ORM\Column(name="ancho_banda_areas_entidad", type="float")
     */
    private $anchoBandaAreasEntidad;

    /**
     * @var float
     *
     * @ORM\Column(name="ancho_banda_cibercafes", type="float")
     */
    private $anchoBandaCibercafes;

    /**
     * @var float
     *
     * @ORM\Column(name="ancho_banda_venta_servicio", type="float")
     */
    private $anchoBandaVentaServicio;

    public function __toString() {
        return $this->getId()?"Anexo 2 al Contrato".$this->getContrato()->getNumeroContrato():"";
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
     * Set anchoBandaAreasEntidad.
     *
     * @param float $anchoBandaAreasEntidad
     *
     * @return anexo2_contrato_areas_internet
     */
    public function setAnchoBandaAreasEntidad($anchoBandaAreasEntidad)
    {
        $this->anchoBandaAreasEntidad = $anchoBandaAreasEntidad;

        return $this;
    }

    /**
     * Get anchoBandaAreasEntidad.
     *
     * @return float
     */
    public function getAnchoBandaAreasEntidad()
    {
        return $this->anchoBandaAreasEntidad;
    }

    /**
     * Set anchoBandaCibercafes.
     *
     * @param float $anchoBandaCibercafes
     *
     * @return anexo2_contrato_areas_internet
     */
    public function setAnchoBandaCibercafes($anchoBandaCibercafes)
    {
        $this->anchoBandaCibercafes = $anchoBandaCibercafes;

        return $this;
    }

    /**
     * Get anchoBandaCibercafes.
     *
     * @return float
     */
    public function getAnchoBandaCibercafes()
    {
        return $this->anchoBandaCibercafes;
    }

    /**
     * Set anchoBandaVentaServicio.
     *
     * @param float $anchoBandaVentaServicio
     *
     * @return anexo2_contrato_areas_internet
     */
    public function setAnchoBandaVentaServicio($anchoBandaVentaServicio)
    {
        $this->anchoBandaVentaServicio = $anchoBandaVentaServicio;

        return $this;
    }

    /**
     * Get anchoBandaVentaServicio.
     *
     * @return float
     */
    public function getAnchoBandaVentaServicio()
    {
        return $this->anchoBandaVentaServicio;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_areas_internet $contrato
     *
     * @return anexo2_contrato_areas_internet
     */
    public function setContrato(\AppBundle\Entity\contrato_areas_internet $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_areas_internet
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}
