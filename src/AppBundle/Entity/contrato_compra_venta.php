<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * contrato_compra_venta
 *
 * @ORM\Table(name="contrato_compra_venta")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\contrato_compra_ventaRepository")
 */
class contrato_compra_venta
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
     * @Assert\NotBlank(message="No debe estar vacío")
     * @ORM\Column(name="numero_contrato", type="string", length=50, unique=true) 
     */
    private $numeroContrato;
    /**
     * @ORM\OneToMany(targetEntity="anexo1_contrato_compra_venta", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $anexo1;
    /**
     * @ORM\OneToMany(targetEntity="anexo4_contrato_compra_venta", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $anexo4;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumn(name="id_empresa", referencedColumnName="id", nullable=false)
     */
    private $empresa;
    /**
     * @var string
     *
     * @ORM\Column(name="metodo_pago", type="string", length=50)
     */
    private $metodoPago;

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
     * Constructor
     */
    public function __construct()
    {
        $this->anexo1 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->anexo4 = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function __toString() {
        return $this->getId()?$this->getNumeroContrato():'';
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
     * @return contrato_compra_venta
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
     * Set metodoPago.
     *
     * @param string $metodoPago
     *
     * @return contrato_compra_venta
     */
    public function setMetodoPago($metodoPago)
    {
        $this->metodoPago = $metodoPago;

        return $this;
    }

    /**
     * Get metodoPago.
     *
     * @return string
     */
    public function getMetodoPago()
    {
        return $this->metodoPago;
    }

    /**
     * Set fechaFirma.
     *
     * @param \DateTime $fechaFirma
     *
     * @return contrato_compra_venta
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
     * @return contrato_compra_venta
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
     * Add anexo1.
     *
     * @param \AppBundle\Entity\anexo1_contrato_compra_venta $anexo1
     *
     * @return contrato_compra_venta
     */
    public function addAnexo1(\AppBundle\Entity\anexo1_contrato_compra_venta $anexo1)
    {
        $this->anexo1[] = $anexo1;

        return $this;
    }

    /**
     * Remove anexo1.
     *
     * @param \AppBundle\Entity\anexo1_contrato_compra_venta $anexo1
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeAnexo1(\AppBundle\Entity\anexo1_contrato_compra_venta $anexo1)
    {
        return $this->anexo1->removeElement($anexo1);
    }

    /**
     * Get anexo1.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnexo1()
    {
        return $this->anexo1;
    }

    /**
     * Add anexo4.
     *
     * @param \AppBundle\Entity\anexo4_contrato_compra_venta $anexo4
     *
     * @return contrato_compra_venta
     */
    public function addAnexo4(\AppBundle\Entity\anexo4_contrato_compra_venta $anexo4)
    {
        $this->anexo4[] = $anexo4;

        return $this;
    }

    /**
     * Remove anexo4.
     *
     * @param \AppBundle\Entity\anexo4_contrato_compra_venta $anexo4
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeAnexo4(\AppBundle\Entity\anexo4_contrato_compra_venta $anexo4)
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
     * Set empresa.
     *
     * @param \AppBundle\Entity\Empresa $empresa
     *
     * @return contrato_compra_venta
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
