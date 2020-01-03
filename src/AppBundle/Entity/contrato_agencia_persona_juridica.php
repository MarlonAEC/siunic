<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;

/**
 * contrato_agencia_persona_juridica
 *
 * @ORM\Table(name="contrato_agencia_persona_juridica")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\contrato_agencia_persona_juridicaRepository")
 */
class contrato_agencia_persona_juridica
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
     * @Assert\NotBlank(message="No debe estar vacío")
     */
    private $empresa;
    /**
     * @ORM\OneToOne(targetEntity="anexo3_contrato_agencia", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $anexo3;
    /**
     * @ORM\OneToMany(targetEntity="anexo4_contrato_agencia", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $anexo4;
    /**
     * @ORM\OneToMany(targetEntity="anexo5_contrato_agencia", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $anexo5;

    /**
     * @var string
     * @Assert\NotBlank(message="No debe estar vacío")
     * @ORM\Column(name="numero_contrato", type="string", length=50, unique=true) 
     */
    private $numeroContrato;


    /**
     * @var bool
     *
     * @ORM\Column(name="momento_pago", type="boolean")
     */
    private $momentoPago;

    /**
     * @var \DateTime
     * @Assert\NotBlank(message="No debe estar vacío")
     * @ORM\Column(name="fecha_firma", type="date", nullable = false)
     */
    private $fechaFirma;

    /**
     * @var string
     * 
     * @ORM\Column(name="lugar_firma", type="string", length=50)
     */
    private $lugarFirma;
    
     /**
     * @ORM\OneToMany(targetEntity="datos_cuentas_bancarias_etecsa", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $datosCuentasBancarias;

    public function __toString() {
        return $this->getId() ? $this->getNumeroContrato() : '';
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->anexo4 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->anexo5 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->datosCuentasBancarias = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return contrato_agencia_persona_juridica
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
     * Set momentoPago.
     *
     * @param bool $momentoPago
     *
     * @return contrato_agencia_persona_juridica
     */
    public function setMomentoPago($momentoPago)
    {
        $this->momentoPago = $momentoPago;

        return $this;
    }

    /**
     * Get momentoPago.
     *
     * @return bool
     */
    public function getMomentoPago()
    {
        return $this->momentoPago;
    }

    /**
     * Set fechaFirma.
     *
     * @param \DateTime $fechaFirma
     *
     * @return contrato_agencia_persona_juridica
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
     * @return contrato_agencia_persona_juridica
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
     * @return contrato_agencia_persona_juridica
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
     * Set anexo3.
     *
     * @param \AppBundle\Entity\anexo3_contrato_agencia|null $anexo3
     *
     * @return contrato_agencia_persona_juridica
     */
    public function setAnexo3(\AppBundle\Entity\anexo3_contrato_agencia $anexo3 = null)
    {
        $this->anexo3 = $anexo3;

        return $this;
    }

    /**
     * Get anexo3.
     *
     * @return \AppBundle\Entity\anexo3_contrato_agencia|null
     */
    public function getAnexo3()
    {
        return $this->anexo3;
    }

    /**
     * Add anexo4.
     *
     * @param \AppBundle\Entity\anexo4_contrato_agencia $anexo4
     *
     * @return contrato_agencia_persona_juridica
     */
    public function addAnexo4(\AppBundle\Entity\anexo4_contrato_agencia $anexo4)
    {
        $this->anexo4[] = $anexo4;

        return $this;
    }

    /**
     * Remove anexo4.
     *
     * @param \AppBundle\Entity\anexo4_contrato_agencia $anexo4
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeAnexo4(\AppBundle\Entity\anexo4_contrato_agencia $anexo4)
    {
        return $this->anexo4->removeElement($anexo4);
    }

    /**
     * Get anexo4.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnexo4()
    {
        return $this->anexo4;
    }

    /**
     * Add anexo5.
     *
     * @param \AppBundle\Entity\anexo5_contrato_agencia $anexo5
     *
     * @return contrato_agencia_persona_juridica
     */
    public function addAnexo5(\AppBundle\Entity\anexo5_contrato_agencia $anexo5)
    {
        $this->anexo5[] = $anexo5;

        return $this;
    }

    /**
     * Remove anexo5.
     *
     * @param \AppBundle\Entity\anexo5_contrato_agencia $anexo5
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeAnexo5(\AppBundle\Entity\anexo5_contrato_agencia $anexo5)
    {
        return $this->anexo5->removeElement($anexo5);
    }

    /**
     * Get anexo5.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnexo5()
    {
        return $this->anexo5;
    }

    /**
     * Add datosCuentasBancaria.
     *
     * @param \AppBundle\Entity\datos_cuentas_bancarias_etecsa $datosCuentasBancaria
     *
     * @return contrato_agencia_persona_juridica
     */
    public function addDatosCuentasBancaria(\AppBundle\Entity\datos_cuentas_bancarias_etecsa $datosCuentasBancaria)
    {
        $this->datosCuentasBancarias[] = $datosCuentasBancaria;

        return $this;
    }

    /**
     * Remove datosCuentasBancaria.
     *
     * @param \AppBundle\Entity\datos_cuentas_bancarias_etecsa $datosCuentasBancaria
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeDatosCuentasBancaria(\AppBundle\Entity\datos_cuentas_bancarias_etecsa $datosCuentasBancaria)
    {
        return $this->datosCuentasBancarias->removeElement($datosCuentasBancaria);
    }

    /**
     * Get datosCuentasBancarias.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDatosCuentasBancarias()
    {
        return $this->datosCuentasBancarias;
    }
}
