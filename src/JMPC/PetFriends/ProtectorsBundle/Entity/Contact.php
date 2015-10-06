<?php

/*******************************************/
/*      Clase PHP Entidad Animal           */
/*      Campos con validacion Validator    */ 
/*                                         */
/*******************************************/

namespace JMPC\PetFriends\ProtectorsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Contact
 *
 * @ORM\Table(name="contacto")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Contact
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
     * @ORM\Column(name="asunto", type="string", length=255)
     * @Assert\NotNull(message="*Debe escribir un asunto")
     * @Assert\Length(
     *      min = "6",
     *      max = "20",
     *      minMessage = "*El asunto debe tener {{ limit }} caracteres minimo",
     *      maxMessage = "*El asunto no debe tener mas de {{ limit }} caracteres")
     */
    private $asunto;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     * @Assert\NotNull(message="*Debe escribir un nombre")
     * @Assert\Length(
     *      min = "4",
     *      max = "20",
     *      minMessage = "*El nombre debe tener {{ limit }} caracteres minimo",
     *      maxMessage = "*El nombre no debe tener mas de {{ limit }} caracteres")
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\NotNull(message="*Debe especificar un email de contacto")
     * @Assert\Regex(
     *     pattern="/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4})*$/",
     *     match=true,
     *     message="*El email introducido no es válido")
     * @Assert\Email(
     *     message = "*El email '{{ value }}' no es una dirección válida.",
     *     checkMX = true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="mensaje", type="string", length=255)
     * @Assert\NotNull(message="*Debe escribir un mensaje")
     * @Assert\Length(
     *      min = "50",
     *      max = "1000",
     *      minMessage = "*El mensaje debe tener {{ limit }} caracteres minimo",
     *      maxMessage = "*El mensaje no debe tener mas de {{ limit }} caracteres")
     */
    private $mensaje;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creado", type="datetime", nullable=false)
     */
    private $creado;

    public function __construct() 
    {
        $this->setCreado(new \DateTime());
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
     * Set asunto
     *
     * @param string $asunto
     * @return Contact
     */
    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;

        return $this;
    }

    /**
     * Get asunto
     *
     * @return string 
     */
    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Contact
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
     * Set email
     *
     * @param string $email
     * @return Contact
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
     * Set mensaje
     *
     * @param string $mensaje
     * @return Contact
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string 
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * Set creado
     *
     * @param \DateTime $creado
     * @return Contact
     */
    public function setCreado($creado)
    {
        $this->creado = $creado;
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
}
