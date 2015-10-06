<?php


/*******************************************/
/*    Clase PHP Entidad Fotos              */
/*    Relacion N - 1 con entidad User      */ 
/*                                         */
/*******************************************/

namespace JMPC\PetFriends\ProtectorsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Fotos
 *
 * @ORM\Table(name="fotos")
 * @ORM\Entity
 */
class Fotos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="fotoUsuario", type="string", length=255)
     */
    private $fotoUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="fotoMascota", type="string", length=255)
     */
    private $fotoMascota;

    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="usuario_archivos")
    * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id", onDelete="CASCADE")
    */
    private $usuario;


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
     * Set fotoUsuario
     *
     * @param string $fotoUsuario
     * @return Fotos
     */
    public function setFotoUsuario($fotoUsuario)
    {
        $this->fotoUsuario = $fotoUsuario;

        return $this;
    }

    /**
     * Get fotoUsuario
     *
     * @return string 
     */
    public function getFotoUsuario()
    {
        return $this->fotoUsuario;
    }

    /**
     * Set fotoMascota
     *
     * @param string $fotoMascota
     * @return Fotos
     */
    public function setFotoMascota($fotoMascota)
    {
        $this->fotoMascota = $fotoMascota;

        return $this;
    }

    /**
     * Get fotoMascota
     *
     * @return string 
     */
    public function getFotoMascota()
    {
        return $this->fotoMascota;
    }

    /**
     * Set usuario
     *
     * @param JMPC/PetFriends/ProtectorsBundle/Entity/User $usuario_archivos
     * @return Fotos
     */
    public function setUsuario(User $usuario_archivos = null)
    {
        $this->usuario = $usuario_archivos;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return JMPC/PetFriends/ProtectorsBundle/Entity/User
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
