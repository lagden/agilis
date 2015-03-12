<?php

namespace Tex\Bundle\CotacaoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Condutor
 */
class Condutor
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $sexo;

    /**
     * @var \DateTime
     */
    private $nascimento;

    /**
     * @var \Tex\Bundle\CotacaoBundle\Entity\Cotacao
     */
    private $cotacao;


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
     * Set nome
     *
     * @param string $nome
     * @return Condutor
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return Condutor
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set nascimento
     *
     * @param \DateTime $nascimento
     * @return Condutor
     */
    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;

        return $this;
    }

    /**
     * Get nascimento
     *
     * @return \DateTime 
     */
    public function getNascimento()
    {
        return $this->nascimento;
    }

    /**
     * Set cotacao
     *
     * @param \Tex\Bundle\CotacaoBundle\Entity\Cotacao $cotacao
     * @return Condutor
     */
    public function setCotacao(\Tex\Bundle\CotacaoBundle\Entity\Cotacao $cotacao = null)
    {
        $this->cotacao = $cotacao;

        return $this;
    }

    /**
     * Get cotacao
     *
     * @return \Tex\Bundle\CotacaoBundle\Entity\Cotacao 
     */
    public function getCotacao()
    {
        return $this->cotacao;
    }
}
