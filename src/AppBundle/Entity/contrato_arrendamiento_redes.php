<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * contrato_arrendamiento_redes
 *
 * @ORM\Table(name="contrato_arrendamiento_redes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\contrato_arrendamiento_redesRepository")
 */
class contrato_arrendamiento_redes
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
     * @ORM\OneToOne(targetEntity="anexo1_contrato_arrendamiento_redes", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $anexo1;
    /**
     * @ORM\OneToOne(targetEntity="anexo2_contrato_arrendamiento_redes", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $anexo2;
    /**
     * @ORM\OneToMany(targetEntity="tipos_distancias_arrendadas", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $tiposDistancias;

    public function __toString() {
        return $this->getId() ? 'Contrato: '.$this->getNumeroContrato():'';
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tiposDistancias = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return contrato_arrendamiento_redes
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
     * @return contrato_arrendamiento_redes
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
     * @return contrato_arrendamiento_redes
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
     * @return contrato_arrendamiento_redes
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
     * @param \AppBundle\Entity\anexo1_contrato_arrendamiento_redes|null $anexo1
     *
     * @return contrato_arrendamiento_redes
     */
    public function setAnexo1(\AppBundle\Entity\anexo1_contrato_arrendamiento_redes $anexo1 = null)
    {
        $this->anexo1 = $anexo1;

        return $this;
    }

    /**
     * Get anexo1.
     *
     * @return \AppBundle\Entity\anexo1_contrato_arrendamiento_redes|null
     */
    public function getAnexo1()
    {
        return $this->anexo1;
    }

    /**
     * Set anexo2.
     *
     * @param \AppBundle\Entity\anexo2_contrato_arrendamiento_redes|null $anexo2
     *
     * @return contrato_arrendamiento_redes
     */
    public function setAnexo2(\AppBundle\Entity\anexo2_contrato_arrendamiento_redes $anexo2 = null)
    {
        $this->anexo2 = $anexo2;

        return $this;
    }

    /**
     * Get anexo2.
     *
     * @return \AppBundle\Entity\anexo2_contrato_arrendamiento_redes|null
     */
    public function getAnexo2()
    {
        return $this->anexo2;
    }

    /**
     * Add tiposDistancia.
     *
     * @param \AppBundle\Entity\tipos_distancias_arrendadas $tiposDistancia
     *
     * @return contrato_arrendamiento_redes
     */
    public function addTiposDistancia(\AppBundle\Entity\tipos_distancias_arrendadas $tiposDistancia)
    {
        $this->tiposDistancias[] = $tiposDistancia;

        return $this;
    }

    /**
     * Remove tiposDistancia.
     *
     * @param \AppBundle\Entity\tipos_distancias_arrendadas $tiposDistancia
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeTiposDistancia(\AppBundle\Entity\tipos_distancias_arrendadas $tiposDistancia)
    {
        return $this->tiposDistancias->removeElement($tiposDistancia);
    }

    /**
     * Get tiposDistancias.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTiposDistancias()
    {
        return $this->tiposDistancias;
    }
}
