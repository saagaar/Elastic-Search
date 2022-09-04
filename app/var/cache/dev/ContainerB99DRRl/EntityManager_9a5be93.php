<?php

namespace ContainerB99DRRl;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfedb3 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer577c0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb7029 = [
        
    ];

    public function getConnection()
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'getConnection', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'getMetadataFactory', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'getExpressionBuilder', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'beginTransaction', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'getCache', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->getCache();
    }

    public function transactional($func)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'transactional', array('func' => $func), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'wrapInTransaction', array('func' => $func), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'commit', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->commit();
    }

    public function rollback()
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'rollback', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'getClassMetadata', array('className' => $className), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'createQuery', array('dql' => $dql), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'createNamedQuery', array('name' => $name), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'createQueryBuilder', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'flush', array('entity' => $entity), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'clear', array('entityName' => $entityName), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->clear($entityName);
    }

    public function close()
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'close', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->close();
    }

    public function persist($entity)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'persist', array('entity' => $entity), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'remove', array('entity' => $entity), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'refresh', array('entity' => $entity), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'detach', array('entity' => $entity), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'merge', array('entity' => $entity), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'getRepository', array('entityName' => $entityName), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'contains', array('entity' => $entity), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'getEventManager', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'getConfiguration', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'isOpen', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'getUnitOfWork', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'getProxyFactory', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'initializeObject', array('obj' => $obj), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'getFilters', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'isFiltersStateClean', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'hasFilters', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return $this->valueHolderfedb3->hasFilters();
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

        $instance->initializer577c0 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderfedb3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfedb3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfedb3->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, '__get', ['name' => $name], $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        if (isset(self::$publicPropertiesb7029[$name])) {
            return $this->valueHolderfedb3->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfedb3;

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

        $targetObject = $this->valueHolderfedb3;
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
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfedb3;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfedb3;
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
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, '__isset', array('name' => $name), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfedb3;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfedb3;
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
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, '__unset', array('name' => $name), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfedb3;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfedb3;
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
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, '__clone', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        $this->valueHolderfedb3 = clone $this->valueHolderfedb3;
    }

    public function __sleep()
    {
        $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, '__sleep', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;

        return array('valueHolderfedb3');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer577c0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer577c0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer577c0 && ($this->initializer577c0->__invoke($valueHolderfedb3, $this, 'initializeProxy', array(), $this->initializer577c0) || 1) && $this->valueHolderfedb3 = $valueHolderfedb3;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfedb3;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfedb3;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
