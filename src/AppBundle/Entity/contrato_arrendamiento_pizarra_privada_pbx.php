<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * contrato_arrendamiento_pizarra_privada_pbx
 *
 * @ORM\Table(name="contrato_arrendamiento_pizarra_privada_pbx")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\contrato_arrendamiento_pizarra_privada_pbxRepository")
 */
class contrato_arrendamiento_pizarra_privada_pbx
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
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumn(name="id_empresa", referencedColumnName="id", nullable=false)
     */
    private $empresa;

/**
     * @var string
     *
     * @ORM\Column(name="numero_contrato", type="string", length=50, unique=true)
     */
    private $numeroContrato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_firma", type="date")
     */
    private $fechaFirma;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar_firma", type="string", length=255)
     */
    private $lugarFirma;
    /**
     * @ORM\OneToOne(targetEntity="anexo1_contrato_arrendamiento_pizarras_privadas_pbx", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $anexo1;
    
    public function __toString() {
        return $this->getId() ? 'Contrato: '.$this->getNumeroContrato():'';
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
     * Set numeroContrato.
     *
     * @param string $numeroContrato
     *
     * @return contrato_arrendamiento_pizarra_privada_pbx
     */
    public function setNumeroContrato($numeroContrato)
    {
        $this->numeroContrato = $numeroContrato;

        return $this;
    }

    /**
     * Get numeroContrato.
     *
     * @return string
     */
    public function getNumeroContrato()
    {
        return $this->numeroContrato;
    }

    /**
     * Set fechaFirma.
     *
     * @param \DateTime $fechaFirma
     *
     * @return contrato_arrendamiento_pizarra_privada_pbx
     */
    public function setFechaFirma($fechaFirma)
    {
        $this->fechaFirma = $fechaFirma;

        return $this;
    }

    /**
     * Get fechaFirma.
     *
     * @return \DateTime
     */
    public function getFechaFirma()
    {
        return $this->fechaFirma;
    }

    /**
     * Set lugarFirma.
     *
     * @param string $lugarFirma
     *
     * @return contrato_arrendamiento_pizarra_privada_pbx
     */
    public function setLugarFirma($lugarFirma)
    {
        $this->lugarFirma = $lugarFirma;

        return $this;
    }

    /**
     * Get lugarFirma.
     *
     * @return string
     */
    public function getLugarFirma()
    {
        return $this->lugarFirma;
    }

    /**
     * Set empresa.
     *
     * @param \AppBundle\Entity\Empresa $empresa
     *
     * @return contrato_arrendamiento_pizarra_privada_pbx
     */
    public function setEmpresa(\AppBundle\Entity\Empresa $empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa.
     *
     * @return \AppBundle\Entity\Empresa
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set anexo1.
     *
     * @param \AppBundle\Entity\anexo1_contrato_arrendamiento_pizarras_privadas_pbx|null $anexo1
     *
     * @return contrato_arrendamiento_pizarra_privada_pbx
     */
    public function setAnexo1(\AppBundle\Entity\anexo1_contrato_arrendamiento_pizarras_privadas_pbx $anexo1 = null)
    {
        $this->anexo1 = $anexo1;

        return $this;
    }

    /**
     * Get anexo1.
     *
     * @return \AppBundle\Entity\anexo1_contrato_arrendamiento_pizarras_privadas_pbx|null
     */
    public function getAnexo1()
    {
        return $this->anexo1;
    }
}
