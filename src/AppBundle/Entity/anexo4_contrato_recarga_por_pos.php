<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexo4_contrato_recarga_por_pos
 *
 * @ORM\Table(name="anexo4_contrato_recarga_por_pos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexo4_contrato_recarga_por_posRepository")
 */
class anexo4_contrato_recarga_por_pos
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
     * @ORM\ManyToOne(targetEntity="contrato_recarga_por_pos")
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     */
    private $contrato;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad_rollos_a_entregar", type="integer")
     */
    private $cantidadRollosAEntregar;
    
    public function __toString() {
        return $this->getId() ? 'Anexo 4 al contrato: '.$this->getContrato()->getNumeroContrato():'';
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
     * Set cantidadRollosAEntregar.
     *
     * @param int $cantidadRollosAEntregar
     *
     * @return anexo4_contrato_recarga_por_pos
     */
    public function setCantidadRollosAEntregar($cantidadRollosAEntregar)
    {
        $this->cantidadRollosAEntregar = $cantidadRollosAEntregar;

        return $this;
    }

    /**
     * Get cantidadRollosAEntregar.
     *
     * @return int
     */
    public function getCantidadRollosAEntregar()
    {
        return $this->cantidadRollosAEntregar;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_recarga_por_pos $contrato
     *
     * @return anexo4_contrato_recarga_por_pos
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
