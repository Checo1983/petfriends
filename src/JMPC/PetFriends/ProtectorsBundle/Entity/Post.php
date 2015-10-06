<?php
// src/JMPC/PetFriends/ProtectorsBundle/Entity/Post.php

/*******************************************/
/*    Clase PHP Entidad Post               */
/*    Relacion 1 - N con entidad Comments  */ 
/*    Campos con validacion Validator      */ 
/*                                         */
/*******************************************/

namespace JMPC\PetFriends\ProtectorsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="JMPC\PetFriends\ProtectorsBundle\Repository\PostRepository")
 * @ORM\Table(name="entradas")
 * @ORM\HasLifecycleCallbacks()
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotNull(message="*Debe escribir un titulo")
     * @Assert\Length(
     *      min = "8",
     *      max = "15",
     *      minMessage = "*El titulo debe tener {{ limit }} caracteres minimo",
     *      maxMessage = "*El titulo no debe tener mas de {{ limit }} caracteres")
     */
    protected $titulo;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $autor;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotNull(message="*Debe escribir el contenido")
     * @Assert\Length(
     *      min = "300",
     *      max = "3000",
     *      minMessage = "*La noticia debe tener {{ limit }} caracteres minimo",
     *      maxMessage = "*La noticia no debe tener mas de {{ limit }} caracteres")
     */
    protected $contenido;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $imagen;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotNull(message="*Debe escribir al menos una etiqueta")
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="*Las etiquetas no pueden contener numeros")
     */
    protected $tags;
    
    /**
     * @ORM\OneToMany(targetEntity="Comments", mappedBy="contenido")
     */
    protected $comentarios;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $creado;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $actualizado;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $slug;
    
    /**
     * @Assert\File(maxSize="1M", mimeTypes={"image/png", "image/jpeg", "image/pjpeg"})
     */
    private $imagenArchivo;

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
     * Set titulo
     *
     * @param string $titulo
     * @return Post
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        $this->setSlug($this->titulo);
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set autor
     *
     * @param string $autor
     * @return Post
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string 
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     * @return Post
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido($length = null)
    {
        if (false === is_null($length) && $length > 0) {
            return substr($this->contenido, 0, $length);
        }
        else {
            return $this->contenido;
        }
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Post
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return Post
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set creado
     *
     * @param \DateTime $creado
     * @return Post
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
     * @return Post
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
    
    public function __construct()
    {
        $this->comentarios = new ArrayCollection();
        
        $this->setCreado(new \DateTime());
        $this->setActualizado(new \DateTime());
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedValue()
    {
       $this->setActualizado(new \DateTime());
    }

    /**
     * Add comentarios
     *
     * @param \JMPC\PetFriends\ProtectorsBundle\Entity\Comments $comentario
     * @return Post
     */
    public function addComments(\JMPC\PetFriends\ProtectorsBundle\Entity\Comments $comentarios)
    {
        $this->comentarios[] = $comentarios;

        return $this;
    }

    /**
     * Remove comentarios
     *
     * @param \JMPC\PetFriends\ProtectorsBundle\Entity\Comments $comentario
     */
    public function removeComments(\JMPC\PetFriends\ProtectorsBundle\Entity\Comments $comentarios)
    {
        $this->comentarios->removeElement($comentarios);
    }

    /**
     * Get comentarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }
    
    public function __toString()
    {
        return $this->getTitulo();
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Post
     */
    public function setSlug($slug)
    {
        $this->slug = $this->slugify($slug);

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
    
    public function setImagenArchivo($imagenArchivo) 
    {
        $this->imagenArchivo = $imagenArchivo;
        
        return $this;
    }
    
    public function getImagenArchivo()
    {
        return $this->imagenArchivo;
    }
    
    public function slugify($text)
    {
        // sustituye caracteres de espaciado o dígitos con un -
        $text = preg_replace('#[^\\pL\d]+#u', '-', $text);

        // recorta espacios en ambos extremos
        $text = trim($text, '-');


        // translitera
        if (function_exists('iconv'))
        {
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        }

        // cambia a minúsculas
        $text = strtolower($text);

        // elimina caracteres indeseables
        $text = preg_replace('#[^-\w]+#', '', $text);

        if (empty($text))
        {
            return 'n-a';
        }

        return $text;
    }

    /**
     * Add comentarios
     *
     * @param \JMPC\PetFriends\ProtectorsBundle\Entity\Comments $comentarios
     * @return Post
     */
    public function addComentario(\JMPC\PetFriends\ProtectorsBundle\Entity\Comments $comentarios)
    {
        $this->comentarios[] = $comentarios;

        return $this;
    }

    /**
     * Remove comentarios
     *
     * @param \JMPC\PetFriends\ProtectorsBundle\Entity\Comments $comentarios
     */
    public function removeComentario(\JMPC\PetFriends\ProtectorsBundle\Entity\Comments $comentarios)
    {
        $this->comentarios->removeElement($comentarios);
    }
}
