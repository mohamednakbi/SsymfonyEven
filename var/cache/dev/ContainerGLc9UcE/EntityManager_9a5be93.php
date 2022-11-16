<?php

namespace ContainerGLc9UcE;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder451aa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere3a65 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties62d43 = [
        
    ];

    public function getConnection()
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'getConnection', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'getMetadataFactory', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'getExpressionBuilder', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'beginTransaction', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'getCache', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->getCache();
    }

    public function transactional($func)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'transactional', array('func' => $func), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'wrapInTransaction', array('func' => $func), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'commit', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->commit();
    }

    public function rollback()
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'rollback', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'getClassMetadata', array('className' => $className), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'createQuery', array('dql' => $dql), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'createNamedQuery', array('name' => $name), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'createQueryBuilder', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'flush', array('entity' => $entity), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'clear', array('entityName' => $entityName), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->clear($entityName);
    }

    public function close()
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'close', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->close();
    }

    public function persist($entity)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'persist', array('entity' => $entity), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'remove', array('entity' => $entity), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'refresh', array('entity' => $entity), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'detach', array('entity' => $entity), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'merge', array('entity' => $entity), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'getRepository', array('entityName' => $entityName), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'contains', array('entity' => $entity), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'getEventManager', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'getConfiguration', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'isOpen', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'getUnitOfWork', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'getProxyFactory', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'initializeObject', array('obj' => $obj), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'getFilters', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'isFiltersStateClean', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'hasFilters', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return $this->valueHolder451aa->hasFilters();
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

        $instance->initializere3a65 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder451aa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder451aa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder451aa->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, '__get', ['name' => $name], $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        if (isset(self::$publicProperties62d43[$name])) {
            return $this->valueHolder451aa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder451aa;

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

        $targetObject = $this->valueHolder451aa;
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
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder451aa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder451aa;
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
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, '__isset', array('name' => $name), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder451aa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder451aa;
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
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, '__unset', array('name' => $name), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder451aa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder451aa;
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
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, '__clone', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        $this->valueHolder451aa = clone $this->valueHolder451aa;
    }

    public function __sleep()
    {
        $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, '__sleep', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;

        return array('valueHolder451aa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere3a65 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere3a65;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere3a65 && ($this->initializere3a65->__invoke($valueHolder451aa, $this, 'initializeProxy', array(), $this->initializere3a65) || 1) && $this->valueHolder451aa = $valueHolder451aa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder451aa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder451aa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
