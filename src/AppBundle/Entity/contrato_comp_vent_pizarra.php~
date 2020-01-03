<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * contrato_comp_vent_pizarra
 *
 * @ORM\Table(name="contrato_comp_vent_pizarra")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\contrato_comp_vent_pizarraRepository")
 */
class contrato_comp_vent_pizarra
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
     *
     * @ORM\Column(name="numero_contrato", type="string", length=50, unique=true)
     */
    private $numeroContrato;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumn(name="id_empresa", referencedColumnName="id", nullable=false)
     */
    private $empresa;
        /**
     * @ORM\OneToOne(targetEntity="anexo1_contrato_compra_venta_pizarra", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $anexo1;
    /**
     * @ORM\OneToMany(targetEntity="descripcion_productos_contratados", mappedBy="contrato", cascade={"all"}, orphanRemoval=true)
     */
    private $descripcionProductos;

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
     * @var string
     *
     * @ORM\Column(name="direccion_entrega", type="string", length=255)
     */
    private $direccionEntrega;

    /**
     * @var int
     *
     * @ORM\Column(name="plazo_entrega", type="integer")
     */
    private $plazoEntrega;

    /**
     * @var int
     *
     * @ORM\Column(name="plazo_saneamiento_productos", type="integer")
     */
    private $plazoSaneamientoProductos;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->descripcionProductos = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * @return contrato_comp_vent_pizarra
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
     * @return contrato_comp_vent_pizarra
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
     * @return contrato_comp_vent_pizarra
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
     * Set direccionEntrega.
     *
     * @param string $direccionEntrega
     *
     * @return contrato_comp_vent_pizarra
     */
    public function setDireccionEntrega($direccionEntrega)
    {
        $this->direccionEntrega = $direccionEntrega;

        return $this;
    }

    /**
     * Get direccionEntrega.
     *
     * @return string
     */
    public function getDireccionEntrega()
    {
        return $this->direccionEntrega;
    }

    /**
     * Set plazoEntrega.
     *
     * @param int $plazoEntrega
     *
     * @return contrato_comp_vent_pizarra
     */
    public function setPlazoEntrega($plazoEntrega)
    {
        $this->plazoEntrega = $plazoEntrega;

        return $this;
    }

    /**
     * Get plazoEntrega.
     *
     * @return int
     */
    public function getPlazoEntrega()
    {
        return $this->plazoEntrega;
    }

    /**
     * Set plazoSaneamientoProductos.
     *
     * @param int $plazoSaneamientoProductos
     *
     * @return contrato_comp_vent_pizarra
     */
    public function setPlazoSaneamientoProductos($plazoSaneamientoProductos)
    {
        $this->plazoSaneamientoProductos = $plazoSaneamientoProductos;

        return $this;
    }

    /**
     * Get plazoSaneamientoProductos.
     *
     * @return int
     */
    public function getPlazoSaneamientoProductos()
    {
        return $this->plazoSaneamientoProductos;
    }

    /**
     * Set empresa.
     *
     * @param \AppBundle\Entity\Empresa $empresa
     *
     * @return contrato_comp_vent_pizarra
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
     * @param \AppBundle\Entity\anexo1_contrato_compra_venta_pizarra|null $anexo1
     *
     * @return contrato_comp_vent_pizarra
     */
    public function setAnexo1(\AppBundle\Entity\anexo1_contrato_compra_venta_pizarra $anexo1 = null)
    {
        $this->anexo1 = $anexo1;

        return $this;
    }

    /**
     * Get anexo1.
     *
     * @return \AppBundle\Entity\anexo1_contrato_compra_venta_pizarra|null
     */
    public function getAnexo1()
    {
        return $this->anexo1;
    }

    /**
     * Add descripcionProducto.
     *
     * @param \AppBundle\Entity\descripcion_productos_contratados $descripcionProducto
     *
     * @return contrato_comp_vent_pizarra
     */
    public function addDescripcionProducto(\AppBundle\Entity\descripcion_productos_contratados $descripcionProducto)
    {
        $this->descripcionProductos[] = $descripcionProducto;

        return $this;
    }

    /**
     * Remove descripcionProducto.
     *
     * @param \AppBundle\Entity\descripcion_productos_contratados $descripcionProducto
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeDescripcionProducto(\AppBundle\Entity\descripcion_productos_contratados $descripcionProducto)
    {
        return $this->descripcionProductos->removeElement($descripcionProducto);
    }

    /**
     * Get descripcionProductos.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDescripcionProductos()
    {
        return $this->descripcionProductos;
    }
}
