<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * contrato_instalacion_pizarra_pbx
 *
 * @ORM\Table(name="contrato_instalacion_pizarra_pbx")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\contrato_instalacion_pizarra_pbxRepository")
 */
class contrato_instalacion_pizarra_pbx
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
     * @ORM\OneToOne(targetEntity="anexo2_contrato_instalacion_pizarra_pbx", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $anexo2;    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumn(name="id_empresa", referencedColumnName="id", nullable=false)
     */
    private $empresa;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_contrato", type="string", length=50)
     */
    private $numeroContrato;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion_instalacion", type="string", length=255)
     */
    private $direccionInstalacion;

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
    
    public function __toString() {
        return $this->getId()? 'Contrato:'.$this->getNumeroContrato():'';
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
     * @return contrato_instalacion_pizarra_pbx
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
     * Set direccionInstalacion.
     *
     * @param string $direccionInstalacion
     *
     * @return contrato_instalacion_pizarra_pbx
     */
    public function setDireccionInstalacion($direccionInstalacion)
    {
        $this->direccionInstalacion = $direccionInstalacion;

        return $this;
    }

    /**
     * Get direccionInstalacion.
     *
     * @return string
     */
    public function getDireccionInstalacion()
    {
        return $this->direccionInstalacion;
    }

    /**
     * Set fechaFirma.
     *
     * @param \DateTime $fechaFirma
     *
     * @return contrato_instalacion_pizarra_pbx
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
     * @return contrato_instalacion_pizarra_pbx
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
     * Set anexo2.
     *
     * @param \AppBundle\Entity\anexo2_contrato_instalacion_pizarra_pbx $anexo2
     *
     * @return contrato_instalacion_pizarra_pbx
     */
    public function setAnexo2(\AppBundle\Entity\anexo2_contrato_instalacion_pizarra_pbx $anexo2)
    {
        $this->anexo2 = $anexo2;

        return $this;
    }

    /**
     * Get anexo2.
     *
     * @return \AppBundle\Entity\anexo2_contrato_instalacion_pizarra_pbx
     */
    public function getAnexo2()
    {
        return $this->anexo2;
    }

    /**
     * Set empresa.
     *
     * @param \AppBundle\Entity\Empresa $empresa
     *
     * @return contrato_instalacion_pizarra_pbx
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
}
