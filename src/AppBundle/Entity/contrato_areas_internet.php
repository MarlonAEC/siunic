<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * contrato_areas_internet
 *
 * @ORM\Table(name="contrato_areas_internet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\contrato_areas_internetRepository")
 */
class contrato_areas_internet
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
     * @var int
     *
     * @ORM\Column(name="dias_para_efectuar_pago", type="integer")
     */
    private $diasParaEfectuarPago;

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
     * @ORM\OneToOne(targetEntity="anexo1_contrato_areas_internet", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $anexo1;
    /**
     * @ORM\OneToOne(targetEntity="anexo2_contrato_areas_internet", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $anexo2;
    /**
     * @ORM\OneToOne(targetEntity="anexo5_contrato_areas_internet", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $anexo5;
 
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
     * @return contrato_areas_internet
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
     * Set diasParaEfectuarPago.
     *
     * @param int $diasParaEfectuarPago
     *
     * @return contrato_areas_internet
     */
    public function setDiasParaEfectuarPago($diasParaEfectuarPago)
    {
        $this->diasParaEfectuarPago = $diasParaEfectuarPago;

        return $this;
    }

    /**
     * Get diasParaEfectuarPago.
     *
     * @return int
     */
    public function getDiasParaEfectuarPago()
    {
        return $this->diasParaEfectuarPago;
    }

    /**
     * Set fechaFirma.
     *
     * @param \DateTime $fechaFirma
     *
     * @return contrato_areas_internet
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
     * @return contrato_areas_internet
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
     * @return contrato_areas_internet
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
     * @param \AppBundle\Entity\anexo1_contrato_areas_internet|null $anexo1
     *
     * @return contrato_areas_internet
     */
    public function setAnexo1(\AppBundle\Entity\anexo1_contrato_areas_internet $anexo1 = null)
    {
        $this->anexo1 = $anexo1;

        return $this;
    }

    /**
     * Get anexo1.
     *
     * @return \AppBundle\Entity\anexo1_contrato_areas_internet|null
     */
    public function getAnexo1()
    {
        return $this->anexo1;
    }

    /**
     * Set anexo2.
     *
     * @param \AppBundle\Entity\anexo2_contrato_areas_internet|null $anexo2
     *
     * @return contrato_areas_internet
     */
    public function setAnexo2(\AppBundle\Entity\anexo2_contrato_areas_internet $anexo2 = null)
    {
        $this->anexo2 = $anexo2;

        return $this;
    }

    /**
     * Get anexo2.
     *
     * @return \AppBundle\Entity\anexo2_contrato_areas_internet|null
     */
    public function getAnexo2()
    {
        return $this->anexo2;
    }

    /**
     * Set anexo5.
     *
     * @param \AppBundle\Entity\anexo5_contrato_areas_internet|null $anexo5
     *
     * @return contrato_areas_internet
     */
    public function setAnexo5(\AppBundle\Entity\anexo5_contrato_areas_internet $anexo5 = null)
    {
        $this->anexo5 = $anexo5;

        return $this;
    }

    /**
     * Get anexo5.
     *
     * @return \AppBundle\Entity\anexo5_contrato_areas_internet|null
     */
    public function getAnexo5()
    {
        return $this->anexo5;
    }
}
