<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexo1_contrato_mantenimiento_pizarra_pbx
 *
 * @ORM\Table(name="anexo1_contrato_mantenimiento_pizarra_pbx")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexo1_contrato_mantenimiento_pizarra_pbxRepository")
 */
class anexo1_contrato_mantenimiento_pizarra_pbx
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
     * @ORM\ManyToOne(targetEntity="contrato_mantenimiento_pizarra_pbx")
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     */
    private $contrato;
    /**
     *
     * @ORM\ManyToOne(targetEntity="tipos_de_mantenimientos")
     * @ORM\JoinColumn(name="id_tipo_mantenimiento", referencedColumnName="id", nullable=false)
     */
    private $tipoMantenimiento;
    /**
     *
     * @ORM\ManyToOne(targetEntity="pizarra_pbx")
     * @ORM\JoinColumn(name="id_pizarra", referencedColumnName="id", nullable=false)
     */
    private $pizarra;
    
    public function __toString() {
        return $this->getId()?"Anexo 1 al Contrato".$this->getContrato()->getNumeroContrato():"";
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
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_mantenimiento_pizarra_pbx $contrato
     *
     * @return anexo1_contrato_mantenimiento_pizarra_pbx
     */
    public function setContrato(\AppBundle\Entity\contrato_mantenimiento_pizarra_pbx $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_mantenimiento_pizarra_pbx
     */
    public function getContrato()
    {
        return $this->contrato;
    }

    /**
     * Set tipoMantenimiento.
     *
     * @param \AppBundle\Entity\tipos_de_mantenimientos $tipoMantenimiento
     *
     * @return anexo1_contrato_mantenimiento_pizarra_pbx
     */
    public function setTipoMantenimiento(\AppBundle\Entity\tipos_de_mantenimientos $tipoMantenimiento)
    {
        $this->tipoMantenimiento = $tipoMantenimiento;

        return $this;
    }

    /**
     * Get tipoMantenimiento.
     *
     * @return \AppBundle\Entity\tipos_de_mantenimientos
     */
    public function getTipoMantenimiento()
    {
        return $this->tipoMantenimiento;
    }

    /**
     * Set pizarra.
     *
     * @param \AppBundle\Entity\pizarra_pbx $pizarra
     *
     * @return anexo1_contrato_mantenimiento_pizarra_pbx
     */
    public function setPizarra(\AppBundle\Entity\pizarra_pbx $pizarra)
    {
        $this->pizarra = $pizarra;

        return $this;
    }

    /**
     * Get pizarra.
     *
     * @return \AppBundle\Entity\pizarra_pbx
     */
    public function getPizarra()
    {
        return $this->pizarra;
    }
}
