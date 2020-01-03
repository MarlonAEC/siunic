<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexo3_contrato_agencia
 *
 * @ORM\Table(name="anexo3_contrato_agencia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexo3_contrato_agenciaRepository")
 */
class anexo3_contrato_agencia
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
     * @ORM\OneToOne(targetEntity="contrato_agencia_persona_juridica", cascade={"all"})
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     */
    private $contrato;
    /**
     * @var string|null
     *
     * @ORM\Column(name="NO_telef_bloqueo", type="string", length=50, nullable=true)
     */

    private $nOTelefBloqueo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NO_telef_asistencia_usuarios", type="string", length=50, nullable=true)
     */
    private $nOTelefAsistenciaUsuarios;
    
    public function __toString() {
        return $this->getId()?"Anexo 3 al Contrato".$this->getContrato()->getNumeroContrato():"";
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
     * Set nOTelefBloqueo.
     *
     * @param string|null $nOTelefBloqueo
     *
     * @return anexo3_contrato_agencia
     */
    public function setNOTelefBloqueo($nOTelefBloqueo = null)
    {
        $this->nOTelefBloqueo = $nOTelefBloqueo;

        return $this;
    }

    /**
     * Get nOTelefBloqueo.
     *
     * @return string|null
     */
    public function getNOTelefBloqueo()
    {
        return $this->nOTelefBloqueo;
    }

    /**
     * Set nOTelefAsistenciaUsuarios.
     *
     * @param string|null $nOTelefAsistenciaUsuarios
     *
     * @return anexo3_contrato_agencia
     */
    public function setNOTelefAsistenciaUsuarios($nOTelefAsistenciaUsuarios = null)
    {
        $this->nOTelefAsistenciaUsuarios = $nOTelefAsistenciaUsuarios;

        return $this;
    }

    /**
     * Get nOTelefAsistenciaUsuarios.
     *
     * @return string|null
     */
    public function getNOTelefAsistenciaUsuarios()
    {
        return $this->nOTelefAsistenciaUsuarios;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_agencia_persona_juridica $contrato
     *
     * @return anexo3_contrato_agencia
     */
    public function setContrato(\AppBundle\Entity\contrato_agencia_persona_juridica $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_agencia_persona_juridica
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}
