<?php

namespace ContainerItOuqs7;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder04edf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8f4c2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties14241 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'getConnection', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'getMetadataFactory', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'getExpressionBuilder', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'beginTransaction', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'getCache', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'transactional', array('func' => $func), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'commit', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->commit();
    }

    public function rollback()
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'rollback', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'getClassMetadata', array('className' => $className), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'createQuery', array('dql' => $dql), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'createNamedQuery', array('name' => $name), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'createQueryBuilder', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'flush', array('entity' => $entity), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'clear', array('entityName' => $entityName), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->clear($entityName);
    }

    public function close()
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'close', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->close();
    }

    public function persist($entity)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'persist', array('entity' => $entity), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'remove', array('entity' => $entity), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'refresh', array('entity' => $entity), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'detach', array('entity' => $entity), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'merge', array('entity' => $entity), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'contains', array('entity' => $entity), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'getEventManager', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'getConfiguration', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'isOpen', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'getUnitOfWork', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'getProxyFactory', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'initializeObject', array('obj' => $obj), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'getFilters', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'isFiltersStateClean', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'hasFilters', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return $this->valueHolder04edf->hasFilters();
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

        $instance->initializer8f4c2 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder04edf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder04edf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder04edf->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, '__get', ['name' => $name], $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        if (isset(self::$publicProperties14241[$name])) {
            return $this->valueHolder04edf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04edf;

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

        $targetObject = $this->valueHolder04edf;
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
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04edf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder04edf;
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
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, '__isset', array('name' => $name), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04edf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder04edf;
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
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, '__unset', array('name' => $name), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04edf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder04edf;
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
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, '__clone', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        $this->valueHolder04edf = clone $this->valueHolder04edf;
    }

    public function __sleep()
    {
        $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, '__sleep', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;

        return array('valueHolder04edf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8f4c2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8f4c2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8f4c2 && ($this->initializer8f4c2->__invoke($valueHolder04edf, $this, 'initializeProxy', array(), $this->initializer8f4c2) || 1) && $this->valueHolder04edf = $valueHolder04edf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder04edf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder04edf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
