<?php

namespace Tex\Bundle\CotacaoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cotacao
 */
class Cotacao
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $facebook;

    /**
     * @var string
     */
    private $email;

    /**
     * @var boolean
     */
    private $termoOk;

    /**
     * @var string
     */
    private $token;

    /**
     * @var integer
     */
    private $codCar;

    /**
     * @var string
     */
    private $descricaoCar;

    /**
     * @var boolean
     */
    private $isMoto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $condutors;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->condutors = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Cotacao
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Cotacao
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set termoOk
     *
     * @param boolean $termoOk
     * @return Cotacao
     */
    public function setTermoOk($termoOk)
    {
        $this->termoOk = $termoOk;

        return $this;
    }

    /**
     * Get termoOk
     *
     * @return boolean 
     */
    public function getTermoOk()
    {
        return $this->termoOk;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Cotacao
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set codCar
     *
     * @param integer $codCar
     * @return Cotacao
     */
    public function setCodCar($codCar)
    {
        $this->codCar = $codCar;

        return $this;
    }

    /**
     * Get codCar
     *
     * @return integer 
     */
    public function getCodCar()
    {
        return $this->codCar;
    }

    /**
     * Set descricaoCar
     *
     * @param string $descricaoCar
     * @return Cotacao
     */
    public function setDescricaoCar($descricaoCar)
    {
        $this->descricaoCar = $descricaoCar;

        return $this;
    }

    /**
     * Get descricaoCar
     *
     * @return string 
     */
    public function getDescricaoCar()
    {
        return $this->descricaoCar;
    }

    /**
     * Set isMoto
     *
     * @param boolean $isMoto
     * @return Cotacao
     */
    public function setIsMoto($isMoto)
    {
        $this->isMoto = $isMoto;

        return $this;
    }

    /**
     * Get isMoto
     *
     * @return boolean 
     */
    public function getIsMoto()
    {
        return $this->isMoto;
    }

    /**
     * Add condutors
     *
     * @param \Tex\Bundle\CotacaoBundle\Entity\Condutor $condutors
     * @return Cotacao
     */
    public function addCondutor(\Tex\Bundle\CotacaoBundle\Entity\Condutor $condutors)
    {
        $this->condutors[] = $condutors;

        return $this;
    }

    /**
     * Remove condutors
     *
     * @param \Tex\Bundle\CotacaoBundle\Entity\Condutor $condutors
     */
    public function removeCondutor(\Tex\Bundle\CotacaoBundle\Entity\Condutor $condutors)
    {
        $this->condutors->removeElement($condutors);
    }

    /**
     * Get condutors
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCondutors()
    {
        return $this->condutors;
    }
    /**
     * @ORM\PrePersist
     */
    public function doStuffOnPrePersist()
    {
        // Add your code here
    }

    /**
     * @ORM\PrePersist
     */
    public function doOtherStuffOnPrePersistToo()
    {
        // Add your code here
    }

    /**
     * @ORM\PostPersist
     */
    public function doStuffOnPostPersist()
    {
        // Add your code here
    }
}
