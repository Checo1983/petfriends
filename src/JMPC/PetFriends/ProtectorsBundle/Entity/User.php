<?php
// src/JMPC/PetFriends/ProtectorsBundle/Entity/User.php

/***********************************************/
/*      Clase PHP Entidad User                 */
/*      Extiende de User/FOSUserBundle         */
/*      Relacion 1 - N con entidad Adoption    */
/*      Relacion 1 - N con entidad Fotos       */ 
/*      Campos con validacion Validator        */ 
/*                                             */
/***********************************************/

namespace JMPC\PetFriends\ProtectorsBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $nombre;
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $nombre_pais;
    
     /**
     * @ORM\Column(type="string", length=50)
     */
    protected $nombre_ciudad;
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $nombre_mascota;
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $especie;
    
    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $sobre_vosotros;

    /**
     * @ORM\OneToMany(targetEntity="Adoption", mappedBy="usuario")
     */
    protected $usuario_adopciones;

    /**
     * @ORM\OneToMany(targetEntity="Fotos", mappedBy="usuario")
     */
    protected $usuario_archivos;
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->usuario_adopciones = new ArrayCollection();
        $this->usuario_archivos = new ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return User
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set nombre_mascota
     *
     * @param string $nombreMascota
     * @return User
     */
    public function setNombreMascota($nombreMascota)
    {
        $this->nombre_mascota = $nombreMascota;

        return $this;
    }

    /**
     * Get nombre_mascota
     *
     * @return string 
     */
    public function getNombreMascota()
    {
        return $this->nombre_mascota;
    }

    /**
     * Set especie
     *
     * @param string $especie
     * @return User
     */
    public function setEspecie($especie)
    {
        $this->especie = $especie;

        return $this;
    }

    /**
     * Get especie
     *
     * @return string 
     */
    public function getEspecie()
    {
        return $this->especie;
    }

    /**
     * Set sobre_vosotros
     *
     * @param string $sobreVosotros
     * @return User
     */
    public function setSobreVosotros($sobreVosotros)
    {
        $this->sobre_vosotros = $sobreVosotros;

        return $this;
    }

    /**
     * Get sobre_vosotros
     *
     * @return string 
     */
    public function getSobreVosotros()
    {
        return $this->sobre_vosotros;
    }

    /**
     * Set nombre_pais
     *
     * @param string $nombrePais
     * @return User
     */
    public function setNombrePais($nombrePais)
    {
        $this->nombre_pais = $nombrePais;

        return $this;
    }

    /**
     * Get nombre_pais
     *
     * @return string 
     */
    public function getNombrePais()
    {
        return $this->nombre_pais;
    }

    /**
     * Set nombre_ciudad
     *
     * @param string $nombreCiudad
     * @return User
     */
    public function setNombreCiudad($nombreCiudad)
    {
        $this->nombre_ciudad = $nombreCiudad;

        return $this;
    }

    /**
     * Get nombre_ciudad
     *
     * @return string 
     */
    public function getNombreCiudad()
    {
        return $this->nombre_ciudad;
    }

    /**
     * Get usuario_adopciones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuarioAdopciones()
    {
        return $this->usuario_adopciones;
    }

    /**
     * Get usuario_archivos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuarioArchivos()
    {
        return $this->usuario_archivos;
    }

    /**
     * Agrega un rol al usuario.
     * @throws Exception
     * @param Rol $rol 
     */
    public function addRol($rol)
    {
        if($rol == 1) {
            array_push($this->roles, 'ROLE_ADMIN');
        }
        else if($rol == 2) {
        array_push($this->roles, 'ROLE_USER');
        }
    }
}
