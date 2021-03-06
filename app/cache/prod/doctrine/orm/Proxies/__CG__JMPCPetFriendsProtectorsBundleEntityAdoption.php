<?php

namespace Proxies\__CG__\JMPC\PetFriends\ProtectorsBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Adoption extends \JMPC\PetFriends\ProtectorsBundle\Entity\Adoption implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'JMPC\\PetFriends\\ProtectorsBundle\\Entity\\Adoption' . "\0" . 'idadopcion', '' . "\0" . 'JMPC\\PetFriends\\ProtectorsBundle\\Entity\\Adoption' . "\0" . 'fechaadopcion', '' . "\0" . 'JMPC\\PetFriends\\ProtectorsBundle\\Entity\\Adoption' . "\0" . 'usuario', '' . "\0" . 'JMPC\\PetFriends\\ProtectorsBundle\\Entity\\Adoption' . "\0" . 'animal');
        }

        return array('__isInitialized__', '' . "\0" . 'JMPC\\PetFriends\\ProtectorsBundle\\Entity\\Adoption' . "\0" . 'idadopcion', '' . "\0" . 'JMPC\\PetFriends\\ProtectorsBundle\\Entity\\Adoption' . "\0" . 'fechaadopcion', '' . "\0" . 'JMPC\\PetFriends\\ProtectorsBundle\\Entity\\Adoption' . "\0" . 'usuario', '' . "\0" . 'JMPC\\PetFriends\\ProtectorsBundle\\Entity\\Adoption' . "\0" . 'animal');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Adoption $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdadopcion()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdadopcion();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdadopcion', array());

        return parent::getIdadopcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaadopcion($fechaadopcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaadopcion', array($fechaadopcion));

        return parent::setFechaadopcion($fechaadopcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaadopcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaadopcion', array());

        return parent::getFechaadopcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuario(\JMPC\PetFriends\ProtectorsBundle\Entity\User $usuario = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuario', array($usuario));

        return parent::setUsuario($usuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuario', array());

        return parent::getUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnimal(\JMPC\PetFriends\ProtectorsBundle\Entity\Animal $animal = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnimal', array($animal));

        return parent::setAnimal($animal);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnimal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnimal', array());

        return parent::getAnimal();
    }

}
