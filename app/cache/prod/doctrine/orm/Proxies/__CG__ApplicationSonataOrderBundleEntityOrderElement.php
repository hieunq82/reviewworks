<?php

namespace Proxies\__CG__\Application\Sonata\OrderBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class OrderElement extends \Application\Sonata\OrderBundle\Entity\OrderElement implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'order', 'quantity', 'price', 'unitPriceExcl', 'unitPriceInc', 'vatRate', 'designation', 'description', 'options', 'rawProduct', 'productId', 'status', 'deliveryStatus', 'validatedAt', 'product', 'productType', 'createdAt', 'updatedAt');
        }

        return array('__isInitialized__', 'id', 'order', 'quantity', 'price', 'unitPriceExcl', 'unitPriceInc', 'vatRate', 'designation', 'description', 'options', 'rawProduct', 'productId', 'status', 'deliveryStatus', 'validatedAt', 'product', 'productType', 'createdAt', 'updatedAt');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (OrderElement $proxy) {
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
    public function prePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', array());

        return parent::prePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpdate', array());

        return parent::preUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrder(\Sonata\Component\Order\OrderInterface $order)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrder', array($order));

        return parent::setOrder($order);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrder', array());

        return parent::getOrder();
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
    public function getVatAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVatAmount', array());

        return parent::getVatAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setDesignation($designation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDesignation', array($designation));

        return parent::setDesignation($designation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDesignation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDesignation', array());

        return parent::getDesignation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
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
    public function getProductId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductId', array());

        return parent::getProductId();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', array($status));

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', array());

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function isValidated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isValidated', array());

        return parent::isValidated();
    }

    /**
     * {@inheritDoc}
     */
    public function isCancelled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCancelled', array());

        return parent::isCancelled();
    }

    /**
     * {@inheritDoc}
     */
    public function isPending()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPending', array());

        return parent::isPending();
    }

    /**
     * {@inheritDoc}
     */
    public function isOpen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isOpen', array());

        return parent::isOpen();
    }

    /**
     * {@inheritDoc}
     */
    public function isCancellable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCancellable', array());

        return parent::isCancellable();
    }

    /**
     * {@inheritDoc}
     */
    public function isError()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isError', array());

        return parent::isError();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeliveryStatus($deliveryStatus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeliveryStatus', array($deliveryStatus));

        return parent::setDeliveryStatus($deliveryStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryStatus', array());

        return parent::getDeliveryStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setValidatedAt(\DateTime $validatedAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValidatedAt', array($validatedAt));

        return parent::setValidatedAt($validatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getValidatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValidatedAt', array());

        return parent::getValidatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setProduct(\Sonata\Component\Product\ProductInterface $product)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProduct', array($product));

        return parent::setProduct($product);
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
    public function setProductType($productType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductType', array($productType));

        return parent::setProductType($productType);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductType', array());

        return parent::getProductType();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($createdAt));

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updatedAt));

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setOptions($options)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOptions', array($options));

        return parent::setOptions($options);
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
    public function setRawProduct($rawProduct)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRawProduct', array($rawProduct));

        return parent::setRawProduct($rawProduct);
    }

    /**
     * {@inheritDoc}
     */
    public function getRawProductValue($name, $default = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRawProductValue', array($name, $default));

        return parent::getRawProductValue($name, $default);
    }

    /**
     * {@inheritDoc}
     */
    public function getRawProduct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRawProduct', array());

        return parent::getRawProduct();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getStatusName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatusName', array());

        return parent::getStatusName();
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryStatusName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryStatusName', array());

        return parent::getDeliveryStatusName();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnitPriceExcl($unitPriceExcl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnitPriceExcl', array($unitPriceExcl));

        return parent::setUnitPriceExcl($unitPriceExcl);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitPriceExcl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnitPriceExcl', array());

        return parent::getUnitPriceExcl();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnitPriceInc($unitPriceInc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnitPriceInc', array($unitPriceInc));

        return parent::setUnitPriceInc($unitPriceInc);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitPriceInc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnitPriceInc', array());

        return parent::getUnitPriceInc();
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
    public function getTotalWithVat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalWithVat', array());

        return parent::getTotalWithVat();
    }

}
