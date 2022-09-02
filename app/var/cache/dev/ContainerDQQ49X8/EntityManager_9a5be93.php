<?php

namespace ContainerDQQ49X8;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7f3fe = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8f74a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb8261 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'getConnection', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'getMetadataFactory', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'getExpressionBuilder', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'beginTransaction', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'getCache', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'transactional', array('func' => $func), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'commit', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->commit();
    }

    public function rollback()
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'rollback', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'getClassMetadata', array('className' => $className), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'createQuery', array('dql' => $dql), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'createNamedQuery', array('name' => $name), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'createQueryBuilder', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'flush', array('entity' => $entity), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'clear', array('entityName' => $entityName), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->clear($entityName);
    }

    public function close()
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'close', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->close();
    }

    public function persist($entity)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'persist', array('entity' => $entity), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'remove', array('entity' => $entity), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'refresh', array('entity' => $entity), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'detach', array('entity' => $entity), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'merge', array('entity' => $entity), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'contains', array('entity' => $entity), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'getEventManager', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'getConfiguration', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'isOpen', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'getUnitOfWork', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'getProxyFactory', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'initializeObject', array('obj' => $obj), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'getFilters', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'isFiltersStateClean', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'hasFilters', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return $this->valueHolder7f3fe->hasFilters();
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

        $instance->initializer8f74a = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder7f3fe) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7f3fe = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7f3fe->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, '__get', ['name' => $name], $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        if (isset(self::$publicPropertiesb8261[$name])) {
            return $this->valueHolder7f3fe->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f3fe;

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

        $targetObject = $this->valueHolder7f3fe;
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
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f3fe;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7f3fe;
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
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, '__isset', array('name' => $name), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f3fe;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7f3fe;
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
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, '__unset', array('name' => $name), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f3fe;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7f3fe;
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
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, '__clone', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        $this->valueHolder7f3fe = clone $this->valueHolder7f3fe;
    }

    public function __sleep()
    {
        $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, '__sleep', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;

        return array('valueHolder7f3fe');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8f74a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8f74a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8f74a && ($this->initializer8f74a->__invoke($valueHolder7f3fe, $this, 'initializeProxy', array(), $this->initializer8f74a) || 1) && $this->valueHolder7f3fe = $valueHolder7f3fe;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7f3fe;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7f3fe;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
