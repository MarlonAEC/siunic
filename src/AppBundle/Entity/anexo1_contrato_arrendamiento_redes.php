<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexo1_contrato_arrendamiento_redes
 *
 * @ORM\Table(name="anexo1_contrato_arrendamiento_redes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexo1_contrato_arrendamiento_redesRepository")
 */
class anexo1_contrato_arrendamiento_redes
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
     * @ORM\OneToOne(targetEntity="contrato_arrendamiento_redes", cascade={"all"})
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     */
    private $contrato;

    /**
     * @var float
     *
     * @ORM\Column(name="cuota_conducto_soterrado", type="float")
     */
    private $cuotaConductoSoterrado;

    /**
     * @var float
     *
     * @ORM\Column(name="couta_bitubo_enterrado", type="float")
     */
    private $coutaBituboEnterrado;

    /**
     * @var float
     *
     * @ORM\Column(name="couta_soporte_red_aerea", type="float")
     */
    private $coutaSoporteRedAerea;

    public function __toString() {
        return $this->getId()?'Anexo 1 del contrato:'.$this->getContrato()->getNumeroContrato():'';
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
     * Set cuotaConductoSoterrado.
     *
     * @param float $cuotaConductoSoterrado
     *
     * @return anexo1_contrato_arrendamiento_redes
     */
    public function setCuotaConductoSoterrado($cuotaConductoSoterrado)
    {
        $this->cuotaConductoSoterrado = $cuotaConductoSoterrado;

        return $this;
    }

    /**
     * Get cuotaConductoSoterrado.
     *
     * @return float
     */
    public function getCuotaConductoSoterrado()
    {
        return $this->cuotaConductoSoterrado;
    }

    /**
     * Set coutaBituboEnterrado.
     *
     * @param float $coutaBituboEnterrado
     *
     * @return anexo1_contrato_arrendamiento_redes
     */
    public function setCoutaBituboEnterrado($coutaBituboEnterrado)
    {
        $this->coutaBituboEnterrado = $coutaBituboEnterrado;

        return $this;
    }

    /**
     * Get coutaBituboEnterrado.
     *
     * @return float
     */
    public function getCoutaBituboEnterrado()
    {
        return $this->coutaBituboEnterrado;
    }

    /**
     * Set coutaSoporteRedAerea.
     *
     * @param float $coutaSoporteRedAerea
     *
     * @return anexo1_contrato_arrendamiento_redes
     */
    public function setCoutaSoporteRedAerea($coutaSoporteRedAerea)
    {
        $this->coutaSoporteRedAerea = $coutaSoporteRedAerea;

        return $this;
    }

    /**
     * Get coutaSoporteRedAerea.
     *
     * @return float
     */
    public function getCoutaSoporteRedAerea()
    {
        return $this->coutaSoporteRedAerea;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_arrendamiento_redes $contrato
     *
     * @return anexo1_contrato_arrendamiento_redes
     */
    public function setContrato(\AppBundle\Entity\contrato_arrendamiento_redes $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_arrendamiento_redes
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}
