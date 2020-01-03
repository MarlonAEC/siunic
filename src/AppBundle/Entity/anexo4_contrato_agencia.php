<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexo4_contrato_agencia
 *
 * @ORM\Table(name="anexo4_contrato_agencia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexo4_contrato_agenciaRepository")
 */
class anexo4_contrato_agencia
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
     * @ORM\ManyToOne(targetEntity="contrato_agencia_persona_juridica", cascade={"all"})
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank(message="No debe estar vacío")
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="municipio", type="string", length=50)
     */
    private $municipio;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;
    
    public function __toString() {
        return $this->getId()? "Anexo 4 al Contrato: ".$this->getContrato():'';
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
     * Set municipio.
     *
     * @param string $municipio
     *
     * @return anexo4_contrato_agencia
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
     * Set direccion.
     *
     * @param string $direccion
     *
     * @return anexo4_contrato_agencia
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
     * @param \AppBundle\Entity\contrato_agencia_persona_juridica $contrato
     *
     * @return anexo4_contrato_agencia
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
