<?php
/*********************************************/
/*     Clase PHP Entidad Country             */
/*     Relacion 1 - N con entidad Province   */ 
/*                                           */
/*********************************************/

/**
 * Description of Country
 *
 * @author Checo
 */

namespace JMPC\PetFriends\ProtectorsBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
* JMPC\PetFriends\ProtectorsBundle\Entity\Country
*
* @ORM\Table(name="pais")
* @ORM\Entity()
*/
class Country
{
    /**
    * @var string $id
    *
    * @ORM\Column(name="id", type="string")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /**
    * @var string $pais
    *
    * @ORM\Column(name="pais", type="string", length=255)
    */
    protected $pais;

    /**
    * @ORM\OneToMany(targetEntity="Province", mappedBy="pais_ciudad")
    */
    protected $ciudades;

    /**
    * Constructor
    */
    public function __construct()
    {
        $this->ciudades = new ArrayCollection();
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
    * @param string $pais
    * @return Country
    */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
    * Get pais
    *
    * @return string
    */
    public function getPais()
    {
        return $this->pais;
    }

    /**
    * Add ciudades
    *
    * @param JMPC\PetFriends\ProtectorsBundle\Entity\Province $pais_ciudad
    * @return Country
    */
    public function addCiudades(Province $pais_ciudad)
    {
        $this->ciudades[] = $pais_ciudad;

        return $this;
    }

    /**
    * Remove ciudades
    *
    * @param JMPC\PetFriends\ProtectorsBundle\Entity\Province $pais_ciudad
    */
    public function removeCiudades(Province $pais_ciudad)
    {
        $this->provinces->removeElement($pais_ciudad);
    }

    /**
    * Get provinces
    *
    * @return \Doctrine\Common\Collections\Collection
    */
    public function getCiudades()
    {
        return $this->ciudades;
    }

    public function __toString()
    {
        return $this->pais;
    }
}
