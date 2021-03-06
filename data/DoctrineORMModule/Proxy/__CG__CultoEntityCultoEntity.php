<?php

namespace DoctrineORMModule\Proxy\__CG__\Culto\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CultoEntity extends \Culto\Entity\CultoEntity implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'cultoData', 'nomePastor', 'preletor', 'reuniao', 'tema', 'txtBiblico', 'numPessoas', 'numLideres', 'numConsolid', 'dnhDizimos', 'chqDizimos', 'moeDizimos', 'dnhOfertas', 'chqOfertas', 'moeOfertas', 'dnhParcDeus', 'chqParcDeus', 'moeParcDeus', 'anexos');
        }

        return array('__isInitialized__', 'id', 'cultoData', 'nomePastor', 'preletor', 'reuniao', 'tema', 'txtBiblico', 'numPessoas', 'numLideres', 'numConsolid', 'dnhDizimos', 'chqDizimos', 'moeDizimos', 'dnhOfertas', 'chqOfertas', 'moeOfertas', 'dnhParcDeus', 'chqParcDeus', 'moeParcDeus', 'anexos');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CultoEntity $proxy) {
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getCultoData()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCultoData', array());

        return parent::getCultoData();
    }

    /**
     * {@inheritDoc}
     */
    public function setCultoData($cultoData)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCultoData', array($cultoData));

        return parent::setCultoData($cultoData);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomePastor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomePastor', array());

        return parent::getNomePastor();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomePastor($nomePastor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomePastor', array($nomePastor));

        return parent::setNomePastor($nomePastor);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreletor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreletor', array());

        return parent::getPreletor();
    }

    /**
     * {@inheritDoc}
     */
    public function setPreletor($preletor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreletor', array($preletor));

        return parent::setPreletor($preletor);
    }

    /**
     * {@inheritDoc}
     */
    public function getReuniao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReuniao', array());

        return parent::getReuniao();
    }

    /**
     * {@inheritDoc}
     */
    public function setReuniao($reuniao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReuniao', array($reuniao));

        return parent::setReuniao($reuniao);
    }

    /**
     * {@inheritDoc}
     */
    public function getTema()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTema', array());

        return parent::getTema();
    }

    /**
     * {@inheritDoc}
     */
    public function setTema($tema)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTema', array($tema));

        return parent::setTema($tema);
    }

    /**
     * {@inheritDoc}
     */
    public function getTxtBiblico()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTxtBiblico', array());

        return parent::getTxtBiblico();
    }

    /**
     * {@inheritDoc}
     */
    public function setTxtBiblico($txtBiblico)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTxtBiblico', array($txtBiblico));

        return parent::setTxtBiblico($txtBiblico);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumPessoas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumPessoas', array());

        return parent::getNumPessoas();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumPessoas($numPessoas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumPessoas', array($numPessoas));

        return parent::setNumPessoas($numPessoas);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumLideres()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumLideres', array());

        return parent::getNumLideres();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumLideres($numLideres)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumLideres', array($numLideres));

        return parent::setNumLideres($numLideres);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumConsolid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumConsolid', array());

        return parent::getNumConsolid();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumConsolid($numConsolid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumConsolid', array($numConsolid));

        return parent::setNumConsolid($numConsolid);
    }

    /**
     * {@inheritDoc}
     */
    public function getDnhDizimos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDnhDizimos', array());

        return parent::getDnhDizimos();
    }

    /**
     * {@inheritDoc}
     */
    public function setDnhDizimos($dnhDizimos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDnhDizimos', array($dnhDizimos));

        return parent::setDnhDizimos($dnhDizimos);
    }

    /**
     * {@inheritDoc}
     */
    public function getChqDizimos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChqDizimos', array());

        return parent::getChqDizimos();
    }

    /**
     * {@inheritDoc}
     */
    public function setChqDizimos($chqDizimos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChqDizimos', array($chqDizimos));

        return parent::setChqDizimos($chqDizimos);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoeDizimos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoeDizimos', array());

        return parent::getMoeDizimos();
    }

    /**
     * {@inheritDoc}
     */
    public function setMoeDizimos($moeDizimos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMoeDizimos', array($moeDizimos));

        return parent::setMoeDizimos($moeDizimos);
    }

    /**
     * {@inheritDoc}
     */
    public function getDnhOfertas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDnhOfertas', array());

        return parent::getDnhOfertas();
    }

    /**
     * {@inheritDoc}
     */
    public function setDnhOfertas($dnhOfertas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDnhOfertas', array($dnhOfertas));

        return parent::setDnhOfertas($dnhOfertas);
    }

    /**
     * {@inheritDoc}
     */
    public function getChqOfertas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChqOfertas', array());

        return parent::getChqOfertas();
    }

    /**
     * {@inheritDoc}
     */
    public function setChqOfertas($chqOfertas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChqOfertas', array($chqOfertas));

        return parent::setChqOfertas($chqOfertas);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoeOfertas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoeOfertas', array());

        return parent::getMoeOfertas();
    }

    /**
     * {@inheritDoc}
     */
    public function setMoeOfertas($moeOfertas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMoeOfertas', array($moeOfertas));

        return parent::setMoeOfertas($moeOfertas);
    }

    /**
     * {@inheritDoc}
     */
    public function getDnhParcDeus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDnhParcDeus', array());

        return parent::getDnhParcDeus();
    }

    /**
     * {@inheritDoc}
     */
    public function setDnhParcDeus($dnhParcDeus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDnhParcDeus', array($dnhParcDeus));

        return parent::setDnhParcDeus($dnhParcDeus);
    }

    /**
     * {@inheritDoc}
     */
    public function getChqParcDeus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChqParcDeus', array());

        return parent::getChqParcDeus();
    }

    /**
     * {@inheritDoc}
     */
    public function setChqParcDeus($chqParcDeus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChqParcDeus', array($chqParcDeus));

        return parent::setChqParcDeus($chqParcDeus);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoeParcDeus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoeParcDeus', array());

        return parent::getMoeParcDeus();
    }

    /**
     * {@inheritDoc}
     */
    public function setMoeParcDeus($moeParcDeus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMoeParcDeus', array($moeParcDeus));

        return parent::setMoeParcDeus($moeParcDeus);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnexos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnexos', array());

        return parent::getAnexos();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnexos($anexos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnexos', array($anexos));

        return parent::setAnexos($anexos);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', array());

        return parent::toArray();
    }

}
