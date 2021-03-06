<?php


/*******************************************/
/*      Clase PHP Entidad AnimalLost       */
/*      Relacion N - 1 con entidad User    */ 
/*      Campos con validacion Validator    */ 
/*                                         */
/*******************************************/

namespace JMPC\PetFriends\ProtectorsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * AnimalLost
 *
 * @ORM\Table(name="mascotaperdida", indexes={@ORM\Index(name="idUsuarioMascPerd_idx", columns={"idUsuarioMascPerd"})})
 * @ORM\Entity
 */
class AnimalLost
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAnimalPerdido", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idanimalperdido;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     * @Assert\NotNull(message="*Debe escribir un nombre")
     * @Assert\Length(
     *      min = "4",
     *      max = "10",
     *      minMessage = "*El nombre debe tener {{ limit }} caracteres minimo",
     *      maxMessage = "*El nombre no debe tener mas de {{ limit }} caracteres")
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=50, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="raza", type="string", length=50, nullable=false)
     * @Assert\NotNull(message="*Debe especificar una raza")
     * @Assert\Length(
     *      min = "5",
     *      max = "12",
     *      minMessage = "*La raza debe tener {{ limit }} caracteres minimo",
     *      maxMessage = "*La raza no debe tener mas de {{ limit }} caracteres")
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="*La raza no puede contener numeros")
     */
    private $raza;

    /**
     * @var string
     *
     * @ORM\Column(name="tamano", type="string", length=50, nullable=false)
     */
    private $tamano;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=50, nullable=false)
     */
    private $color;

    /**
     * @ORM\Column(type="string")
     */
    private $sexo;

    /**
     * @var string
     *
     * @ORM\Column(name="comportamiento", type="string", length=50, nullable=false)
     */
    private $comportamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="mensaje", type="text", nullable=false)
     * @Assert\NotNull(message="*Debe escribir un mensaje")
     * @Assert\Length(
     *      min = "100",
     *      max = "300",
     *      minMessage = "*El mensaje debe tener {{ limit }} caracteres minimo",
     *      maxMessage = "*El mensaje no debe tener mas de {{ limit }} caracteres")
     */
    private $mensaje;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=50, nullable=false)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=50, nullable=false)
     */
    private $ciudad;
    
    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=50, nullable=false)
     * @Assert\NotNull(message="*Debe escribir una dirección")
     * @Assert\Length(
     *      min = "8",
     *      max = "25",
     *      minMessage = "*La dirección debe tener {{ limit }} caracteres minimo",
     *      maxMessage = "*La dirección no debe tener mas de {{ limit }} caracteres")
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="fotografia", type="string", length=500, nullable=false)
     */
    private $fotografia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaPerdida", type="date", nullable=false)
     */
    private $fechaperdida;

    /**
     * @var boolean
     *
     * @ORM\Column(name="chip", type="boolean", nullable=false)
     */
    private $chip;

    /**
     * @var boolean
     *
     * @ORM\Column(name="encontrado", type="boolean", nullable=false)
     */
    private $encontrado;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $slug;
    
    /**
     * @Assert\File(maxSize="1M", mimeTypes={"image/png", "image/jpeg", "image/pjpeg"})
     */
    private $fotografiaArchivo;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="idUsuarioMascPerd", referencedColumnName="id")
     */
    private $idusuariomascperd;
    
    public function __construct()
    {
        $this->setFechaPerdida(new \DateTime());
    }

    /**
     * Get idanimalperdido
     *
     * @return integer 
     */
    public function getIdanimalperdido()
    {
        return $this->idanimalperdido;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return AnimalLost
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        $this->setSlug($this->nombre);
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
     * Set tipo
     *
     * @param string $tipo
     * @return AnimalLost
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set raza
     *
     * @param string $raza
     * @return AnimalLost
     */
    public function setRaza($raza)
    {
        $this->raza = $raza;

        return $this;
    }

    /**
     * Get raza
     *
     * @return string 
     */
    public function getRaza()
    {
        return $this->raza;
    }

    /**
     * Set tamano
     *
     * @param string $tamano
     * @return AnimalLost
     */
    public function setTamano($tamano)
    {
        $this->tamano = $tamano;

        return $this;
    }

    /**
     * Get tamano
     *
     * @return string 
     */
    public function getTamano()
    {
        return $this->tamano;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return AnimalLost
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
     * Set color
     *
     * @param string $color
     * @return AnimalLost
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set comportamiento
     *
     * @param string $comportamiento
     * @return AnimalLost
     */
    public function setComportamiento($comportamiento)
    {
        $this->comportamiento = $comportamiento;

        return $this;
    }

    /**
     * Get comportamiento
     *
     * @return string 
     */
    public function getComportamiento()
    {
        return $this->comportamiento;
    }

    /**
     * Set mensaje
     *
     * @param string $mensaje
     * @return AnimalLost
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
     * Set pais
     *
     * @param string $pais
     * @return AnimalLost
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
     * Set ciudad
     *
     * @param string $ciudad
     * @return AnimalLost
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
     * Set direccion
     *
     * @param string $direccion
     * @return AnimalLost
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set fotografia
     *
     * @param string $fotografia
     * @return AnimalLost
     */
    public function setFotografia($fotografia)
    {
        $this->fotografia = $fotografia;

        return $this;
    }

    /**
     * Get fotografia
     *
     * @return string 
     */
    public function getFotografia()
    {
        return $this->fotografia;
    }

    /**
     * Set fechaperdida
     *
     * @param \DateTime $fechaperdida
     * @return AnimalLost
     */
    public function setFechaPerdida($fechaperdida)
    {
        $this->fechaperdida = $fechaperdida;

        return $this;
    }

    /**
     * Get fechaperdida
     *
     * @return \DateTime 
     */
    public function getFechaPerdida()
    {
        return $this->fechaperdida;
    }

    /**
     * Set chip
     *
     * @param boolean $chip
     * @return AnimalLost
     */
    public function setChip($chip)
    {
        $this->chip = $chip;

        return $this;
    }

    /**
     * Get chip
     *
     * @return boolean 
     */
    public function getChip()
    {
        return $this->chip;
    }

    /**
     * Set encontrado
     *
     * @param boolean $encontrado
     * @return AnimalLost
     */
    public function setEncontrado($encontrado)
    {
        $this->encontrado = $encontrado;

        return $this;
    }

    /**
     * Get encontrado
     *
     * @return boolean 
     */
    public function getEncontrado()
    {
        return $this->encontrado;
    }

    /**
     * Set idusuariomascperd
     *
     * @param \JMPC\PetFriends\ProtectorsBundle\Entity\User $idusuariomascperd
     * @return AnimalLost
     */
    public function setIdusuariomascperd(\JMPC\PetFriends\ProtectorsBundle\Entity\User $idusuariomascperd = null)
    {
        $this->idusuariomascperd = $idusuariomascperd;

        return $this;
    }

    /**
     * Get idusuariomascperd
     *
     * @return \JMPC\PetFriends\ProtectorsBundle\Entity\User 
     */
    public function getIdusuariomascperd()
    {
        return $this->idusuariomascperd;
    }
    
    /**
     * Set slug
     *
     * @param string $slug
     * @return AnimalLost
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
    
    public function setFotografiaArchivo($fotografiaArchivo) 
    {
        $this->fotografiaArchivo = $fotografiaArchivo;
        
        return $this;
    }
    
    public function getFotografiaArchivo()
    {
        return $this->fotografiaArchivo;
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
}
