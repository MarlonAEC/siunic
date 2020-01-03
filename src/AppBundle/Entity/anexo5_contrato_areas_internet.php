<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexo5_contrato_areas_internet
 *
 * @ORM\Table(name="anexo5_contrato_areas_internet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexo5_contrato_areas_internetRepository")
 */
class anexo5_contrato_areas_internet
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
     * @var string
     *
     * @ORM\Column(name="unidad_comercial_designada", type="string", length=255)
     */
    private $unidadComercialDesignada;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    public function __toString() {
        return $this->getId()?"Anexo 5 al Contrato".$this->getContrato()->getNumeroContrato():"";
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
     * Set unidadComercialDesignada.
     *
     * @param string $unidadComercialDesignada
     *
     * @return anexo5_contrato_areas_internet
     */
    public function setUnidadComercialDesignada($unidadComercialDesignada)
    {
        $this->unidadComercialDesignada = $unidadComercialDesignada;

        return $this;
    }

    /**
     * Get unidadComercialDesignada.
     *
     * @return string
     */
    public function getUnidadComercialDesignada()
    {
        return $this->unidadComercialDesignada;
    }

    /**
     * Set direccion.
     *
     * @param string $direccion
     *
     * @return anexo5_contrato_areas_internet
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
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_areas_internet $contrato
     *
     * @return anexo5_contrato_areas_internet
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
