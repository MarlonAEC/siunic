<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexo5_contrato_agencia
 *
 * @ORM\Table(name="anexo5_contrato_agencia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexo5_contrato_agenciaRepository")
 */
class anexo5_contrato_agencia
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
     * @ORM\Column(name="provincia", type="string", length=50)
     * @Assert\NotBlank(message="No debe estar vacío")
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="municipio", type="string", length=50)
     * @Assert\NotBlank(message="No debe estar vacío")
     */
    private $municipio;

    /**
     * @var string
     *
     * @ORM\Column(name="punto_venta", type="string", length=255)
     * @Assert\NotBlank(message="No debe estar vacío")
     */
    private $puntoVenta;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     * @Assert\NotBlank(message="No debe estar vacío")
     */
    private $direccion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono_contacto", type="string", length=255, nullable=true)
     * 
     */
    private $telefonoContacto;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="contrato_agencia_persona_juridica", cascade={"all"})
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank(message="No debe estar vacío")
     */
    private $contrato;

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
     * Set provincia.
     *
     * @param string $provincia
     *
     * @return anexo5_contrato_agencia
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia.
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set municipio.
     *
     * @param string $municipio
     *
     * @return anexo5_contrato_agencia
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio.
     *
     * @return string
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set puntoVenta.
     *
     * @param string $puntoVenta
     *
     * @return anexo5_contrato_agencia
     */
    public function setPuntoVenta($puntoVenta)
    {
        $this->puntoVenta = $puntoVenta;

        return $this;
    }

    /**
     * Get puntoVenta.
     *
     * @return string
     */
    public function getPuntoVenta()
    {
        return $this->puntoVenta;
    }

    /**
     * Set direccion.
     *
     * @param string $direccion
     *
     * @return anexo5_contrato_agencia
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
     * Set telefonoContacto.
     *
     * @param string|null $telefonoContacto
     *
     * @return anexo5_contrato_agencia
     */
    public function setTelefonoContacto($telefonoContacto = null)
    {
        $this->telefonoContacto = $telefonoContacto;

        return $this;
    }

    /**
     * Get telefonoContacto.
     *
     * @return string|null
     */
    public function getTelefonoContacto()
    {
        return $this->telefonoContacto;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_agencia_persona_juridica $contrato
     *
     * @return anexo5_contrato_agencia
     */
    public function setContrato(\AppBundle\Entity\contrato_agencia_persona_juridica $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_agencia_persona_juridica
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}
