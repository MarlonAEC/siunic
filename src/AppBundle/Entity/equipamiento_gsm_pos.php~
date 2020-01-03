<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * equipamiento_gsm_pos
 *
 * @ORM\Table(name="equipamiento_gsm_pos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\equipamiento_gsm_posRepository")
 */
class equipamiento_gsm_pos
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
     * @ORM\ManyToOne(targetEntity="contrato_recarga_por_pos", cascade={"all"})
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank(message="No debe estar vacío")
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=255)
     */
    private $marca;
    /**
     * @var string
     *
     * @ORM\Column(name="no_serie", type="string", length=255)
     */
    private $noSerie;
    /**
     * @var string
     *
     * @ORM\Column(name="no_activo", type="string", length=255)
     */
    private $noActivo;
    
    public function __toString() {
        return $this->getId() ? 'Equipamiento GSM del contrato:'.$this->getContrato()->getNumeroContrato():'';
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
     * Set descripcion.
     *
     * @param string $descripcion
     *
     * @return equipamiento_gsm_pos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion.
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set marca.
     *
     * @param string $marca
     *
     * @return equipamiento_gsm_pos
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca.
     *
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set noSerie.
     *
     * @param string $noSerie
     *
     * @return equipamiento_gsm_pos
     */
    public function setNoSerie($noSerie)
    {
        $this->noSerie = $noSerie;

        return $this;
    }

    /**
     * Get noSerie.
     *
     * @return string
     */
    public function getNoSerie()
    {
        return $this->noSerie;
    }

    /**
     * Set noActivo.
     *
     * @param string $noActivo
     *
     * @return equipamiento_gsm_pos
     */
    public function setNoActivo($noActivo)
    {
        $this->noActivo = $noActivo;

        return $this;
    }

    /**
     * Get noActivo.
     *
     * @return string
     */
    public function getNoActivo()
    {
        return $this->noActivo;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_recarga_por_pos $contrato
     *
     * @return equipamiento_gsm_pos
     */
    public function setContrato(\AppBundle\Entity\contrato_recarga_por_pos $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_recarga_por_pos
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}
