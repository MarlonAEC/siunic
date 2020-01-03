<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * contrato_recarga_por_pos
 *
 * @ORM\Table(name="contrato_recarga_por_pos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\contrato_recarga_por_posRepository")
 */
class contrato_recarga_por_pos
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
     * @ORM\OneToOne(targetEntity="anexo2_contrato_recarga_por_pos", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $anexo2;
    /**
     * @ORM\OneToOne(targetEntity="anexo4_contrato_recarga_por_pos", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $anexo4;
    /**
     * @ORM\OneToMany(targetEntity="equipamiento_gsm_pos", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $equipamientoGSM;
    /**
     * @ORM\OneToMany(targetEntity="tarjetas_sim", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $tarjetasSIM;
    
    /**
     * @var string
     *
     * @ORM\Column(name="numero_contrato", type="string", length=50, unique=true)
     */
    private $numeroContrato;

    /**
     * @var float
     *
     * @ORM\Column(name="retribucion_a_emplear", type="float")
     */
    private $retribucionAEmplear;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda_pago", type="string", length=50)
     */
    private $monedaPago;

    /**
     * @var string
     *
     * @ORM\Column(name="modalidad_pago", type="string", length=50)
     */
    private $modalidadPago;

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
        return $this->getId() ? 'Contrato '.$this->getNumeroContrato(): '';
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->equipamientoGSM = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tarjetasSIM = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return contrato_recarga_por_pos
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
     * Set retribucionAEmplear.
     *
     * @param float $retribucionAEmplear
     *
     * @return contrato_recarga_por_pos
     */
    public function setRetribucionAEmplear($retribucionAEmplear)
    {
        $this->retribucionAEmplear = $retribucionAEmplear;

        return $this;
    }

    /**
     * Get retribucionAEmplear.
     *
     * @return float
     */
    public function getRetribucionAEmplear()
    {
        return $this->retribucionAEmplear;
    }

    /**
     * Set monedaPago.
     *
     * @param string $monedaPago
     *
     * @return contrato_recarga_por_pos
     */
    public function setMonedaPago($monedaPago)
    {
        $this->monedaPago = $monedaPago;

        return $this;
    }

    /**
     * Get monedaPago.
     *
     * @return string
     */
    public function getMonedaPago()
    {
        return $this->monedaPago;
    }

    /**
     * Set modalidadPago.
     *
     * @param string $modalidadPago
     *
     * @return contrato_recarga_por_pos
     */
    public function setModalidadPago($modalidadPago)
    {
        $this->modalidadPago = $modalidadPago;

        return $this;
    }

    /**
     * Get modalidadPago.
     *
     * @return string
     */
    public function getModalidadPago()
    {
        return $this->modalidadPago;
    }

    /**
     * Set fechaFirma.
     *
     * @param \DateTime $fechaFirma
     *
     * @return contrato_recarga_por_pos
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
     * @return contrato_recarga_por_pos
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
     * @return contrato_recarga_por_pos
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
     * Set anexo2.
     *
     * @param \AppBundle\Entity\anexo2_contrato_recarga_por_pos|null $anexo2
     *
     * @return contrato_recarga_por_pos
     */
    public function setAnexo2(\AppBundle\Entity\anexo2_contrato_recarga_por_pos $anexo2 = null)
    {
        $this->anexo2 = $anexo2;

        return $this;
    }

    /**
     * Get anexo2.
     *
     * @return \AppBundle\Entity\anexo2_contrato_recarga_por_pos|null
     */
    public function getAnexo2()
    {
        return $this->anexo2;
    }

    /**
     * Set anexo4.
     *
     * @param \AppBundle\Entity\anexo4_contrato_recarga_por_pos|null $anexo4
     *
     * @return contrato_recarga_por_pos
     */
    public function setAnexo4(\AppBundle\Entity\anexo4_contrato_recarga_por_pos $anexo4 = null)
    {
        $this->anexo4 = $anexo4;

        return $this;
    }

    /**
     * Get anexo4.
     *
     * @return \AppBundle\Entity\anexo4_contrato_recarga_por_pos|null
     */
    public function getAnexo4()
    {
        return $this->anexo4;
    }

    /**
     * Add equipamientoGSM.
     *
     * @param \AppBundle\Entity\equipamiento_gsm_pos $equipamientoGSM
     *
     * @return contrato_recarga_por_pos
     */
    public function addEquipamientoGSM(\AppBundle\Entity\equipamiento_gsm_pos $equipamientoGSM)
    {
        $this->equipamientoGSM[] = $equipamientoGSM;

        return $this;
    }

    /**
     * Remove equipamientoGSM.
     *
     * @param \AppBundle\Entity\equipamiento_gsm_pos $equipamientoGSM
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeEquipamientoGSM(\AppBundle\Entity\equipamiento_gsm_pos $equipamientoGSM)
    {
        return $this->equipamientoGSM->removeElement($equipamientoGSM);
    }

    /**
     * Get equipamientoGSM.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEquipamientoGSM()
    {
        return $this->equipamientoGSM;
    }

    /**
     * Add tarjetasSIM.
     *
     * @param \AppBundle\Entity\tarjetas_sim $tarjetasSIM
     *
     * @return contrato_recarga_por_pos
     */
    public function addTarjetasSIM(\AppBundle\Entity\tarjetas_sim $tarjetasSIM)
    {
        $this->tarjetasSIM[] = $tarjetasSIM;

        return $this;
    }

    /**
     * Remove tarjetasSIM.
     *
     * @param \AppBundle\Entity\tarjetas_sim $tarjetasSIM
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeTarjetasSIM(\AppBundle\Entity\tarjetas_sim $tarjetasSIM)
    {
        return $this->tarjetasSIM->removeElement($tarjetasSIM);
    }

    /**
     * Get tarjetasSIM.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTarjetasSIM()
    {
        return $this->tarjetasSIM;
    }
}
