<?php

/*******************************************/
/*    Clase PHP Entidad Province           */
/*    Relacion N - 1 con entidad Country   */ 
/*                                         */
/*******************************************/

/**
 * Description of Province
 *
 * @author Checo
 */

namespace JMPC\PetFriends\ProtectorsBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
* JMPC\PetFriends\ProtectorsBundle\Entity\Province
*
* @ORM\Table(name="provincia")
* @ORM\Entity(repositoryClass="JMPC\PetFriends\ProtectorsBundle\Repository\ProvinceRepository")
*/
class Province
{
    /**
    * @var integer $id
    *
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /**
    * @var string $ciudad
    *
    * @ORM\Column(name="ciudad", type="string", length=255)
    */
    protected $ciudad;

    /**
    * @ORM\ManyToOne(targetEntity="Country", inversedBy="ciudades")
    * @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
    */
    protected $pais_ciudad;

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
    * Set ciudad
    *
    * @param string $ciudad
    * @return Province
    */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
    * Get ciudad
    *
    * @return string
    */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
    * Set pais_ciudad
    *
    * @param JMPC/PetFriends/ProtectorsBundle/Entity/Country $pais
    * @return Province
    */
    public function setPaisCiudad(Country $pais = null)
    {
        $this->pais_ciudad = $pais;

        return $this;
    }

    /**
    * Get pais_ciudad
    *
    * @return JMPC/PetFriends/ProtectorsBundle/Entity/Country
    */
    public function getPaisCiudad()
    {
        return $this->pais_ciudad;
    }

    public function __toString()
    {
        return $this->ciudad;
    }

}