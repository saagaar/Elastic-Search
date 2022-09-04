<?php

namespace ContainerYgfGD9h;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera1d45 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd41e3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf9624 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'getConnection', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'getMetadataFactory', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'getExpressionBuilder', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'beginTransaction', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'getCache', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'transactional', array('func' => $func), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'commit', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->commit();
    }

    public function rollback()
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'rollback', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'getClassMetadata', array('className' => $className), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'createQuery', array('dql' => $dql), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'createNamedQuery', array('name' => $name), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'createQueryBuilder', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'flush', array('entity' => $entity), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'clear', array('entityName' => $entityName), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->clear($entityName);
    }

    public function close()
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'close', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->close();
    }

    public function persist($entity)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'persist', array('entity' => $entity), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'remove', array('entity' => $entity), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'refresh', array('entity' => $entity), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'detach', array('entity' => $entity), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'merge', array('entity' => $entity), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'contains', array('entity' => $entity), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'getEventManager', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'getConfiguration', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'isOpen', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'getUnitOfWork', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'getProxyFactory', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'initializeObject', array('obj' => $obj), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'getFilters', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'isFiltersStateClean', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'hasFilters', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return $this->valueHoldera1d45->hasFilters();
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

        $instance->initializerd41e3 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldera1d45) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera1d45 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera1d45->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, '__get', ['name' => $name], $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        if (isset(self::$publicPropertiesf9624[$name])) {
            return $this->valueHoldera1d45->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1d45;

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

        $targetObject = $this->valueHoldera1d45;
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
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1d45;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera1d45;
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
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, '__isset', array('name' => $name), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1d45;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera1d45;
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
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, '__unset', array('name' => $name), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1d45;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera1d45;
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
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, '__clone', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        $this->valueHoldera1d45 = clone $this->valueHoldera1d45;
    }

    public function __sleep()
    {
        $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, '__sleep', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;

        return array('valueHoldera1d45');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd41e3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd41e3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd41e3 && ($this->initializerd41e3->__invoke($valueHoldera1d45, $this, 'initializeProxy', array(), $this->initializerd41e3) || 1) && $this->valueHoldera1d45 = $valueHoldera1d45;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera1d45;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera1d45;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
