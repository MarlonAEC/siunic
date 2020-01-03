<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * contrato_contactos_telefonicos
 *
 * @ORM\Table(name="contrato_contactos_telefonicos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\contrato_contactos_telefonicosRepository")
 */
class contrato_contactos_telefonicos
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
     * @ORM\OneToOne(targetEntity="anexo1_contrato_contactos_telefonicos", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $anexo1;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumn(name="id_empresa", referencedColumnName="id", nullable=false)
     */
    private $empresa;
    /**
     * @var string
     * @Assert\NotBlank(message="No debe estar vacío")
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
     * @var float
     *
     * @ORM\Column(name="couta_mensual", type="float")
     */
    private $coutaMensual;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad_llamadas", type="integer")
     */
    private $cantidadLlamadas;

    /**
     * @var float
     *
     * @ORM\Column(name="precio_llamadas_extras", type="float")
     */
    private $precioLlamadasExtras;

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
     * @return contrato_contactos_telefonicos
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
     * @return contrato_contactos_telefonicos
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
     * @return contrato_contactos_telefonicos
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
     * Set coutaMensual.
     *
     * @param float $coutaMensual
     *
     * @return contrato_contactos_telefonicos
     */
    public function setCoutaMensual($coutaMensual)
    {
        $this->coutaMensual = $coutaMensual;

        return $this;
    }

    /**
     * Get coutaMensual.
     *
     * @return float
     */
    public function getCoutaMensual()
    {
        return $this->coutaMensual;
    }

    /**
     * Set cantidadLlamadas.
     *
     * @param int $cantidadLlamadas
     *
     * @return contrato_contactos_telefonicos
     */
    public function setCantidadLlamadas($cantidadLlamadas)
    {
        $this->cantidadLlamadas = $cantidadLlamadas;

        return $this;
    }

    /**
     * Get cantidadLlamadas.
     *
     * @return int
     */
    public function getCantidadLlamadas()
    {
        return $this->cantidadLlamadas;
    }

    /**
     * Set precioLlamadasExtras.
     *
     * @param float $precioLlamadasExtras
     *
     * @return contrato_contactos_telefonicos
     */
    public function setPrecioLlamadasExtras($precioLlamadasExtras)
    {
        $this->precioLlamadasExtras = $precioLlamadasExtras;

        return $this;
    }

    /**
     * Get precioLlamadasExtras.
     *
     * @return float
     */
    public function getPrecioLlamadasExtras()
    {
        return $this->precioLlamadasExtras;
    }

    /**
     * Set anexo1.
     *
     * @param \AppBundle\Entity\anexo1_contrato_contactos_telefonicos|null $anexo1
     *
     * @return contrato_contactos_telefonicos
     */
    public function setAnexo1(\AppBundle\Entity\anexo1_contrato_contactos_telefonicos $anexo1 = null)
    {
        $this->anexo1 = $anexo1;

        return $this;
    }

    /**
     * Get anexo1.
     *
     * @return \AppBundle\Entity\anexo1_contrato_contactos_telefonicos|null
     */
    public function getAnexo1()
    {
        return $this->anexo1;
    }

    /**
     * Set empresa.
     *
     * @param \AppBundle\Entity\Empresa $empresa
     *
     * @return contrato_contactos_telefonicos
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
