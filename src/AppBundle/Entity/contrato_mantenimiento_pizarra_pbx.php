<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * contrato_mantenimiento_pizarra_pbx
 *
 * @ORM\Table(name="contrato_mantenimiento_pizarra_pbx")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\contrato_mantenimiento_pizarra_pbxRepository")
 */
class contrato_mantenimiento_pizarra_pbx
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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaFirma.
     *
     * @param \DateTime $fechaFirma
     *
     * @return contrato_mantenimiento_pizarra_pbx
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
     * @return contrato_mantenimiento_pizarra_pbx
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
     * @return contrato_mantenimiento_pizarra_pbx
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
