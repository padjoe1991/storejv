<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder2ab3c = null;
    private $initializer1238b = null;
    private static $publicPropertiesb1dbb = [
        
    ];
    public function getConnection()
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'getConnection', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'getMetadataFactory', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'getExpressionBuilder', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'beginTransaction', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'getCache', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->getCache();
    }
    public function transactional($func)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'transactional', array('func' => $func), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'commit', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->commit();
    }
    public function rollback()
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'rollback', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'getClassMetadata', array('className' => $className), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'createQuery', array('dql' => $dql), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'createNamedQuery', array('name' => $name), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'createQueryBuilder', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'flush', array('entity' => $entity), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'clear', array('entityName' => $entityName), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->clear($entityName);
    }
    public function close()
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'close', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->close();
    }
    public function persist($entity)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'persist', array('entity' => $entity), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'remove', array('entity' => $entity), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'refresh', array('entity' => $entity), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'detach', array('entity' => $entity), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'merge', array('entity' => $entity), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'contains', array('entity' => $entity), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'getEventManager', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'getConfiguration', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'isOpen', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'getUnitOfWork', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'getProxyFactory', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'initializeObject', array('obj' => $obj), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'getFilters', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'isFiltersStateClean', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'hasFilters', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return $this->valueHolder2ab3c->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer1238b = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder2ab3c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2ab3c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder2ab3c->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, '__get', ['name' => $name], $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        if (isset(self::$publicPropertiesb1dbb[$name])) {
            return $this->valueHolder2ab3c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ab3c;
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
        $targetObject = $this->valueHolder2ab3c;
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
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ab3c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder2ab3c;
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
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, '__isset', array('name' => $name), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ab3c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder2ab3c;
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
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, '__unset', array('name' => $name), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ab3c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder2ab3c;
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
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, '__clone', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        $this->valueHolder2ab3c = clone $this->valueHolder2ab3c;
    }
    public function __sleep()
    {
        $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, '__sleep', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
        return array('valueHolder2ab3c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1238b = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1238b;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer1238b && ($this->initializer1238b->__invoke($valueHolder2ab3c, $this, 'initializeProxy', array(), $this->initializer1238b) || 1) && $this->valueHolder2ab3c = $valueHolder2ab3c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2ab3c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2ab3c;
    }
}
