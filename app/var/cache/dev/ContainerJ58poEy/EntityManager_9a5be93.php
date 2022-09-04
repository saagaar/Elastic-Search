<?php

namespace ContainerJ58poEy;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6d71e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere81cc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb0f2a = [
        
    ];

    public function getConnection()
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'getConnection', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'getMetadataFactory', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'getExpressionBuilder', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'beginTransaction', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'getCache', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->getCache();
    }

    public function transactional($func)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'transactional', array('func' => $func), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'wrapInTransaction', array('func' => $func), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'commit', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->commit();
    }

    public function rollback()
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'rollback', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'getClassMetadata', array('className' => $className), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'createQuery', array('dql' => $dql), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'createNamedQuery', array('name' => $name), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'createQueryBuilder', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'flush', array('entity' => $entity), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'clear', array('entityName' => $entityName), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->clear($entityName);
    }

    public function close()
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'close', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->close();
    }

    public function persist($entity)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'persist', array('entity' => $entity), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'remove', array('entity' => $entity), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'refresh', array('entity' => $entity), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'detach', array('entity' => $entity), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'merge', array('entity' => $entity), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'getRepository', array('entityName' => $entityName), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'contains', array('entity' => $entity), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'getEventManager', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'getConfiguration', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'isOpen', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'getUnitOfWork', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'getProxyFactory', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'initializeObject', array('obj' => $obj), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'getFilters', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'isFiltersStateClean', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'hasFilters', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return $this->valueHolder6d71e->hasFilters();
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

        $instance->initializere81cc = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder6d71e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6d71e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6d71e->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, '__get', ['name' => $name], $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        if (isset(self::$publicPropertiesb0f2a[$name])) {
            return $this->valueHolder6d71e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d71e;

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

        $targetObject = $this->valueHolder6d71e;
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
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d71e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6d71e;
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
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, '__isset', array('name' => $name), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d71e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6d71e;
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
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, '__unset', array('name' => $name), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d71e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6d71e;
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
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, '__clone', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        $this->valueHolder6d71e = clone $this->valueHolder6d71e;
    }

    public function __sleep()
    {
        $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, '__sleep', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;

        return array('valueHolder6d71e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere81cc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere81cc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere81cc && ($this->initializere81cc->__invoke($valueHolder6d71e, $this, 'initializeProxy', array(), $this->initializere81cc) || 1) && $this->valueHolder6d71e = $valueHolder6d71e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6d71e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6d71e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
