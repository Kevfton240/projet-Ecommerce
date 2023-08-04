<?php

namespace ContainerM991Ehg;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfc0f1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeref96b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa936e = [
        
    ];

    public function getConnection()
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'getConnection', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'getMetadataFactory', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'getExpressionBuilder', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'beginTransaction', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'getCache', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->getCache();
    }

    public function transactional($func)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'transactional', array('func' => $func), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'wrapInTransaction', array('func' => $func), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'commit', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->commit();
    }

    public function rollback()
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'rollback', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'getClassMetadata', array('className' => $className), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'createQuery', array('dql' => $dql), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'createNamedQuery', array('name' => $name), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'createQueryBuilder', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'flush', array('entity' => $entity), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'clear', array('entityName' => $entityName), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->clear($entityName);
    }

    public function close()
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'close', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->close();
    }

    public function persist($entity)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'persist', array('entity' => $entity), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'remove', array('entity' => $entity), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'refresh', array('entity' => $entity), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'detach', array('entity' => $entity), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'merge', array('entity' => $entity), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'getRepository', array('entityName' => $entityName), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'contains', array('entity' => $entity), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'getEventManager', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'getConfiguration', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'isOpen', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'getUnitOfWork', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'getProxyFactory', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'initializeObject', array('obj' => $obj), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'getFilters', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'isFiltersStateClean', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'hasFilters', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return $this->valueHolderfc0f1->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializeref96b = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderfc0f1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfc0f1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfc0f1->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, '__get', ['name' => $name], $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        if (isset(self::$publicPropertiesa936e[$name])) {
            return $this->valueHolderfc0f1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc0f1;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfc0f1;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc0f1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfc0f1;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, '__isset', array('name' => $name), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc0f1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfc0f1;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, '__unset', array('name' => $name), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc0f1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfc0f1;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, '__clone', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        $this->valueHolderfc0f1 = clone $this->valueHolderfc0f1;
    }

    public function __sleep()
    {
        $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, '__sleep', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;

        return array('valueHolderfc0f1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeref96b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeref96b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeref96b && ($this->initializeref96b->__invoke($valueHolderfc0f1, $this, 'initializeProxy', array(), $this->initializeref96b) || 1) && $this->valueHolderfc0f1 = $valueHolderfc0f1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfc0f1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfc0f1;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
