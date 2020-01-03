<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * anexo1_contrato_arrendamiento_espacios
 *
 * @ORM\Table(name="anexo1_contrato_arrendamiento_espacios")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexo1_contrato_arrendamiento_espaciosRepository")
 */
class anexo1_contrato_arrendamiento_espacios
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
     * @ORM\ManyToOne(targetEntity="contrato_arrendamiento_espacios")
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     */
    private $contrato;

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
     * @param \AppBundle\Entity\contrato_arrendamiento_espacios $contrato
     *
     * @return anexo1_contrato_arrendamiento_espacios
     */
    public function setContrato(\AppBundle\Entity\contrato_arrendamiento_espacios $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_arrendamiento_espacios
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}
