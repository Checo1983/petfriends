<?php

/**********************************************************************/
/*         Clase PHP Entidad Adoption                                 */
/*         Relacion entre entidad User y entidad Animal               */
/*         Almacena fecha de adopcion, id de usuario, id animal       */ 
/*                                                                    */                             
/**********************************************************************/

namespace JMPC\PetFriends\ProtectorsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adoption
 *
 * @ORM\Table(name="adopcion")
 * @ORM\Entity
 */
class Adoption
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAdopcion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idadopcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaAdopcion", type="date", nullable=false)
     */
    private $fechaadopcion;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="usuario_adopciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $usuario;

    /**
     * @var \Animal
     *
     * @ORM\ManyToOne(targetEntity="Animal", inversedBy="adopciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="animal_id", referencedColumnName="idAnimal", onDelete="CASCADE")
     * })
     */
    private $animal;



    /**
     * Get idadopcion
     *
     * @return integer 
     */
    public function getIdadopcion()
    {
        return $this->idadopcion;
    }

    /**
     * Set fechaadopcion
     *
     * @param \DateTime $fechaadopcion
     * @return Adoption
     */
    public function setFechaadopcion($fechaadopcion)
    {
        $this->fechaadopcion = $fechaadopcion;

        return $this;
    }

    /**
     * Get fechaadopcion
     *
     * @return \DateTime 
     */
    public function getFechaadopcion()
    {
        return $this->fechaadopcion;
    }

    /**
     * Set usuario
     *
     * @param \JMPC\PetFriends\ProtectorsBundle\Entity\User $usuario
     * @return Adoption
     */
    public function setUsuario(\JMPC\PetFriends\ProtectorsBundle\Entity\User $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \JMPC\PetFriends\ProtectorsBundle\Entity\User 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set animal
     *
     * @param \JMPC\PetFriends\ProtectorsBundle\Entity\Animal $animal
     * @return Adoption
     */
    public function setAnimal(\JMPC\PetFriends\ProtectorsBundle\Entity\Animal $animal = null)
    {
        $this->animal = $animal;

        return $this;
    }

    /**
     * Get animal
     *
     * @return \JMPC\PetFriends\ProtectorsBundle\Entity\Animal 
     */
    public function getAnimal()
    {
        return $this->animal;
    }

}
