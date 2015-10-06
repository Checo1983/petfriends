<?php
// src/JMPC/PetFriends/ProtectorsBundle/Entity/Comments.php

/*******************************************/
/*      Clase PHP Entidad Comments         */
/*      Relacion 1 - N con entidad Post    */ 
/*                                         */
/*******************************************/

namespace JMPC\PetFriends\ProtectorsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="JMPC\PetFriends\ProtectorsBundle\Repository\CommentRepository")
 * @ORM\Table(name="comentarios")
 * @ORM\HasLifecycleCallbacks()
 */
class Comments
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $usuario;

    /**
     * @ORM\Column(type="text")
     */
    protected $comentarios;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $aprobado;

    /**
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="comentarios")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $contenido;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $creado;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $actualizado;

    public function __construct()
    {
        $this->setCreado(new \DateTime());
        $this->setActualizado(new \DateTime());

        $this->setAprobado(true);
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedValue()
    {
       $this->setActualizado(new \DateTime());
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
     * Set usuario
     *
     * @param string $usuario
     * @return Comments
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return Comments
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set aprobado
     *
     * @param boolean $aprobado
     * @return Comments
     */
    public function setAprobado($aprobado)
    {
        $this->aprobado = $aprobado;

        return $this;
    }

    /**
     * Get aprobado
     *
     * @return boolean 
     */
    public function getAprobado()
    {
        return $this->aprobado;
    }

    /**
     * Set creado
     *
     * @param \DateTime $creado
     * @return Comments
     */
    public function setCreado($creado)
    {
        $this->creado = $creado;

        return $this;
    }

    /**
     * Get creado
     *
     * @return \DateTime 
     */
    public function getCreado()
    {
        return $this->creado;
    }

    /**
     * Set actualizado
     *
     * @param \DateTime $actualizado
     * @return Comments
     */
    public function setActualizado($actualizado)
    {
        $this->actualizado = $actualizado;

        return $this;
    }

    /**
     * Get actualizado
     *
     * @return \DateTime 
     */
    public function getActualizado()
    {
        return $this->actualizado;
    }

    /**
     * Set contenido
     *
     * @param \JMPC\PetFriends\ProtectorsBundle\Entity\Post $contenido
     * @return Comments
     */
    public function setContenido(\JMPC\PetFriends\ProtectorsBundle\Entity\Post $contenido = null)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return \JMPC\PetFriends\ProtectorsBundle\Entity\Post
     */
    public function getContenido()
    {
        return $this->contenido;
    }
}
