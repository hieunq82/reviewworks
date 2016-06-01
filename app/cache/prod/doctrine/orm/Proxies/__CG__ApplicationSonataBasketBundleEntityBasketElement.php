<?php

namespace Proxies\__CG__\Application\Sonata\BasketBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class BasketElement extends \Application\Sonata\BasketBundle\Entity\BasketElement implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'basket', 'productId', 'product', 'unitPrice', 'price', 'priceIncludingVat', 'vatRate', 'quantity', 'options', 'name', 'position', 'productDefinition', 'productCode', 'delete');
        }

        return array('__isInitialized__', 'id', 'basket', 'productId', 'product', 'unitPrice', 'price', 'priceIncludingVat', 'vatRate', 'quantity', 'options', 'name', 'position', 'productDefinition', 'productCode', 'delete');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (BasketElement $proxy) {
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
    public function getBasket()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBasket', array());

        return parent::getBasket();
    }

    /**
     * {@inheritDoc}
     */
    public function setBasket(\Sonata\Component\Basket\BasketInterface $basket)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBasket', array($basket));

        return parent::setBasket($basket);
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', array($position));

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', array());

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setProduct($productCode, \Sonata\Component\Product\ProductInterface $product)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProduct', array($productCode, $product));

        return parent::setProduct($productCode, $product);
    }

    /**
     * {@inheritDoc}
     */
    public function getProduct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduct', array());

        return parent::getProduct();
    }

    /**
     * {@inheritDoc}
     */
    public function getProductId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductId', array());

        return parent::getProductId();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductId($productId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductId', array($productId));

        return parent::setProductId($productId);
    }

    /**
     * {@inheritDoc}
     */
    public function getVatAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVatAmount', array());

        return parent::getVatAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setVatRate($vatRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVatRate', array($vatRate));

        return parent::setVatRate($vatRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getVatRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVatRate', array());

        return parent::getVatRate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnitPrice($unitPrice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnitPrice', array($unitPrice));

        return parent::setUnitPrice($unitPrice);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitPrice($vat = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnitPrice', array($vat));

        return parent::getUnitPrice($vat);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotal($vat = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotal', array($vat));

        return parent::getTotal($vat);
    }

    /**
     * {@inheritDoc}
     */
    public function getOptions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptions', array());

        return parent::getOptions();
    }

    /**
     * {@inheritDoc}
     */
    public function setOptions(array $options = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOptions', array($options));

        return parent::setOptions($options);
    }

    /**
     * {@inheritDoc}
     */
    public function getOption($name, $default = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOption', array($name, $default));

        return parent::getOption($name, $default);
    }

    /**
     * {@inheritDoc}
     */
    public function hasOption($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasOption', array($name));

        return parent::hasOption($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setOption($name, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOption', array($name, $value));

        return parent::setOption($name, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice($price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', array($price));

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice($vat = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', array($vat));

        return parent::getPrice($vat);
    }

    /**
     * {@inheritDoc}
     */
    public function setPriceIncludingVat($priceIncludingVat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriceIncludingVat', array($priceIncludingVat));

        return parent::setPriceIncludingVat($priceIncludingVat);
    }

    /**
     * {@inheritDoc}
     */
    public function isPriceIncludingVat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPriceIncludingVat', array());

        return parent::isPriceIncludingVat();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantity($quantity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantity', array($quantity));

        return parent::setQuantity($quantity);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantity', array());

        return parent::getQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function isValid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isValid', array());

        return parent::isValid();
    }

    /**
     * {@inheritDoc}
     */
    public function setDelete($delete)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDelete', array($delete));

        return parent::setDelete($delete);
    }

    /**
     * {@inheritDoc}
     */
    public function getDelete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDelete', array());

        return parent::getDelete();
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', array());

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', array($data));

        return parent::unserialize($data);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductManager()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductManager', array());

        return parent::getProductManager();
    }

    /**
     * {@inheritDoc}
     */
    public function getProductProvider()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductProvider', array());

        return parent::getProductProvider();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductDefinition(\Sonata\Component\Product\ProductDefinition $productDefinition)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductDefinition', array($productDefinition));

        return parent::setProductDefinition($productDefinition);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductDefinition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductDefinition', array());

        return parent::getProductDefinition();
    }

    /**
     * {@inheritDoc}
     */
    public function getProductCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductCode', array());

        return parent::getProductCode();
    }

    /**
     * {@inheritDoc}
     */
    public function hasProductDefinition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasProductDefinition', array());

        return parent::hasProductDefinition();
    }

}
