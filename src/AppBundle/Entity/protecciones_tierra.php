<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * protecciones_tierra
 *
 * @ORM\Table(name="protecciones_tierra")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\protecciones_tierraRepository")
 */
class protecciones_tierra
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
     * @ORM\ManyToOne(targetEntity="locales")
     * @ORM\JoinColumn(name="id_local", referencedColumnName="id", nullable=false)
     */
    private $local;

    /**
     * @var bool
     *
     * @ORM\Column(name="existencia_barra_tierra_principal", type="boolean")
     */
    private $existenciaBarraTierraPrincipal;

    /**
     * @var bool
     *
     * @ORM\Column(name="bastidor_existente_conectado_barra", type="boolean")
     */
    private $bastidorExistenteConectadoBarra;

    /**
     * @var bool
     *
     * @ORM\Column(name="tierra_equipamiento", type="boolean")
     */
    private $tierraEquipamiento;


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
     * Set existenciaBarraTierraPrincipal.
     *
     * @param bool $existenciaBarraTierraPrincipal
     *
     * @return protecciones_tierra
     */
    public function setExistenciaBarraTierraPrincipal($existenciaBarraTierraPrincipal)
    {
        $this->existenciaBarraTierraPrincipal = $existenciaBarraTierraPrincipal;

        return $this;
    }

    /**
     * Get existenciaBarraTierraPrincipal.
     *
     * @return bool
     */
    public function getExistenciaBarraTierraPrincipal()
    {
        return $this->existenciaBarraTierraPrincipal;
    }

    /**
     * Set bastidorExistenteConectadoBarra.
     *
     * @param bool $bastidorExistenteConectadoBarra
     *
     * @return protecciones_tierra
     */
    public function setBastidorExistenteConectadoBarra($bastidorExistenteConectadoBarra)
    {
        $this->bastidorExistenteConectadoBarra = $bastidorExistenteConectadoBarra;

        return $this;
    }

    /**
     * Get bastidorExistenteConectadoBarra.
     *
     * @return bool
     */
    public function getBastidorExistenteConectadoBarra()
    {
        return $this->bastidorExistenteConectadoBarra;
    }

    /**
     * Set tierraEquipamiento.
     *
     * @param bool $tierraEquipamiento
     *
     * @return protecciones_tierra
     */
    public function setTierraEquipamiento($tierraEquipamiento)
    {
        $this->tierraEquipamiento = $tierraEquipamiento;

        return $this;
    }

    /**
     * Get tierraEquipamiento.
     *
     * @return bool
     */
    public function getTierraEquipamiento()
    {
        return $this->tierraEquipamiento;
    }

    /**
     * Set local.
     *
     * @param \AppBundle\Entity\locales $local
     *
     * @return protecciones_tierra
     */
    public function setLocal(\AppBundle\Entity\locales $local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local.
     *
     * @return \AppBundle\Entity\locales
     */
    public function getLocal()
    {
        return $this->local;
    }
}
