<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * anexo1_contrato_contactos_telefonicos
 *
 * @ORM\Table(name="anexo1_contrato_contactos_telefonicos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\anexo1_contrato_contactos_telefonicosRepository")
 */
class anexo1_contrato_contactos_telefonicos
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
     * @ORM\OneToOne(targetEntity="contrato_contactos_telefonicos", cascade={"all"})
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id", nullable=false)
     */
    private $contrato;

    /**
     * @var float
     *
     * @ORM\Column(name="tiempo_medio_respuesta", type="float")
     */
    private $tiempoMedioRespuesta;

    /**
     * @var float
     *
     * @ORM\Column(name="porcentaje_llamadas_contestadas", type="float")
     */
    private $porcentajeLlamadasContestadas;

    /**
     * @var string
     *
     * @ORM\Column(name="posiciones", type="string", length=255)
     */
    private $posiciones;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_llamadas_por_hora", type="integer")
     */
    private $cantLlamadasPorHora;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_llamadas_por_dia", type="integer")
     */
    private $cantLlamadasPorDia;
    public function __toString() {
        return $this->getId()?'Anexo 1 al contrato: '.$this->getContrato()->getNumeroContrato():'';
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
     * Set tiempoMedioRespuesta.
     *
     * @param float $tiempoMedioRespuesta
     *
     * @return anexo1_contrato_contactos_telefonicos
     */
    public function setTiempoMedioRespuesta($tiempoMedioRespuesta)
    {
        $this->tiempoMedioRespuesta = $tiempoMedioRespuesta;

        return $this;
    }

    /**
     * Get tiempoMedioRespuesta.
     *
     * @return float
     */
    public function getTiempoMedioRespuesta()
    {
        return $this->tiempoMedioRespuesta;
    }

    /**
     * Set porcentajeLlamadasContestadas.
     *
     * @param float $porcentajeLlamadasContestadas
     *
     * @return anexo1_contrato_contactos_telefonicos
     */
    public function setPorcentajeLlamadasContestadas($porcentajeLlamadasContestadas)
    {
        $this->porcentajeLlamadasContestadas = $porcentajeLlamadasContestadas;

        return $this;
    }

    /**
     * Get porcentajeLlamadasContestadas.
     *
     * @return float
     */
    public function getPorcentajeLlamadasContestadas()
    {
        return $this->porcentajeLlamadasContestadas;
    }

    /**
     * Set posiciones.
     *
     * @param string $posiciones
     *
     * @return anexo1_contrato_contactos_telefonicos
     */
    public function setPosiciones($posiciones)
    {
        $this->posiciones = $posiciones;

        return $this;
    }

    /**
     * Get posiciones.
     *
     * @return string
     */
    public function getPosiciones()
    {
        return $this->posiciones;
    }

    /**
     * Set cantLlamadasPorHora.
     *
     * @param int $cantLlamadasPorHora
     *
     * @return anexo1_contrato_contactos_telefonicos
     */
    public function setCantLlamadasPorHora($cantLlamadasPorHora)
    {
        $this->cantLlamadasPorHora = $cantLlamadasPorHora;

        return $this;
    }

    /**
     * Get cantLlamadasPorHora.
     *
     * @return int
     */
    public function getCantLlamadasPorHora()
    {
        return $this->cantLlamadasPorHora;
    }

    /**
     * Set cantLlamadasPorDia.
     *
     * @param int $cantLlamadasPorDia
     *
     * @return anexo1_contrato_contactos_telefonicos
     */
    public function setCantLlamadasPorDia($cantLlamadasPorDia)
    {
        $this->cantLlamadasPorDia = $cantLlamadasPorDia;

        return $this;
    }

    /**
     * Get cantLlamadasPorDia.
     *
     * @return int
     */
    public function getCantLlamadasPorDia()
    {
        return $this->cantLlamadasPorDia;
    }

    /**
     * Set contrato.
     *
     * @param \AppBundle\Entity\contrato_contactos_telefonicos $contrato
     *
     * @return anexo1_contrato_contactos_telefonicos
     */
    public function setContrato(\AppBundle\Entity\contrato_contactos_telefonicos $contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \AppBundle\Entity\contrato_contactos_telefonicos
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}
