<?php
// source: C:\UwAmp\www\XXX\Nette\ANT\app/config/config.neon 
// source: C:\UwAmp\www\XXX\Nette\ANT\app/config/config.local.neon 

class Container_6bae8d8498 extends Nette\DI\Container
{
	protected $meta = [
		'types' => [
			'Nette\Application\Application' => [1 => ['application.application']],
			'Nette\Application\IPresenterFactory' => [1 => ['application.presenterFactory']],
			'Nette\Application\LinkGenerator' => [1 => ['application.linkGenerator']],
			'Nette\Caching\Storages\IJournal' => [1 => ['cache.journal']],
			'Nette\Caching\IStorage' => [1 => ['cache.storage']],
			'Nette\Database\Connection' => [1 => ['database.default.connection']],
			'Nette\Database\IStructure' => [1 => ['database.default.structure']],
			'Nette\Database\Structure' => [1 => ['database.default.structure']],
			'Nette\Database\IConventions' => [1 => ['database.default.conventions']],
			'Nette\Database\Conventions\DiscoveredConventions' => [1 => ['database.default.conventions']],
			'Nette\Database\Context' => [1 => ['database.default.context']],
			'Nette\Http\RequestFactory' => [1 => ['http.requestFactory']],
			'Nette\Http\IRequest' => [1 => ['http.request']],
			'Nette\Http\Request' => [1 => ['http.request']],
			'Nette\Http\IResponse' => [1 => ['http.response']],
			'Nette\Http\Response' => [1 => ['http.response']],
			'Nette\Http\Context' => [1 => ['http.context']],
			'Nette\Bridges\ApplicationLatte\ILatteFactory' => [1 => ['latte.latteFactory']],
			'Nette\Application\UI\ITemplateFactory' => [1 => ['latte.templateFactory']],
			'Nette\Mail\IMailer' => [1 => ['mail.mailer']],
			'Nette\Application\IRouter' => [1 => ['routing.router']],
			'Nette\Security\IUserStorage' => [1 => ['security.userStorage']],
			'Nette\Security\User' => [1 => ['security.user']],
			'Nette\Http\Session' => [1 => ['session.session']],
			'Tracy\ILogger' => [1 => ['tracy.logger']],
			'Tracy\BlueScreen' => [1 => ['tracy.blueScreen']],
			'Tracy\Bar' => [1 => ['tracy.bar']],
			'IteratorAggregate' => [1 => ['console.helperSet']],
			'Traversable' => [1 => ['console.helperSet']],
			'Symfony\Component\Console\Helper\HelperSet' => [1 => ['console.helperSet']],
			'Symfony\Component\Console\Application' => [1 => ['console.application']],
			'Kdyby\Console\Application' => [1 => ['console.application']],
			'Kdyby\Events\EventManager' => [1 => ['events.manager'], 0 => ['doctrine.default.evm']],
			'Doctrine\Common\EventManager' => [1 => ['events.manager'], 0 => ['doctrine.default.evm']],
			'Kdyby\Events\LazyEventManager' => [1 => ['events.manager']],
			'Doctrine\Common\Annotations\Reader' => [['annotations.reflectionReader'], ['annotations.reader']],
			'Doctrine\Common\Annotations\AnnotationReader' => [['annotations.reflectionReader']],
			'Doctrine\Common\Cache\Cache' => [
				[
					'annotations.cache.annotations',
					'doctrine.cache.default.metadata',
					'doctrine.cache.default.query',
					'doctrine.cache.default.ormResult',
					'doctrine.cache.default.hydration',
					'doctrine.cache.default.dbalResult',
				],
			],
			'Doctrine\Common\Persistence\Mapping\Driver\MappingDriver' => [
				[
					'doctrine.default.metadataDriver',
					'doctrine.default.driver.App.annotationsImpl',
					'doctrine.default.driver.Kdyby_Doctrine.annotationsImpl',
				],
			],
			'Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain' => [['doctrine.default.metadataDriver']],
			'Nette\Object' => [
				[
					'doctrine.default.repositoryFactory',
					'doctrine.default.diagnosticsPanel',
				],
				['doctrine.default.cacheCleaner'],
			],
			'Doctrine\ORM\Repository\RepositoryFactory' => [['doctrine.default.repositoryFactory']],
			'Kdyby\Doctrine\RepositoryFactory' => [['doctrine.default.repositoryFactory']],
			'Doctrine\ORM\Configuration' => [['doctrine.default.ormConfiguration']],
			'Doctrine\DBAL\Configuration' => [
				[
					'doctrine.default.ormConfiguration',
					'doctrine.default.dbalConfiguration',
				],
			],
			'Kdyby\Doctrine\Configuration' => [['doctrine.default.ormConfiguration']],
			'Kdyby\Events\NamespacedEventManager' => [['doctrine.default.evm']],
			'Doctrine\ORM\EntityManager' => [1 => ['doctrine.default.entityManager']],
			'Doctrine\Common\Persistence\ObjectManager' => [1 => ['doctrine.default.entityManager']],
			'Doctrine\ORM\EntityManagerInterface' => [1 => ['doctrine.default.entityManager']],
			'Kdyby\Persistence\QueryExecutor' => [1 => ['doctrine.default.entityManager', 'doctrine.dao']],
			'Kdyby\Persistence\Queryable' => [1 => ['doctrine.default.entityManager', 'doctrine.dao']],
			'Kdyby\Doctrine\EntityManager' => [1 => ['doctrine.default.entityManager']],
			'Tracy\IBarPanel' => [['doctrine.default.diagnosticsPanel']],
			'Doctrine\DBAL\Logging\SQLLogger' => [['doctrine.default.diagnosticsPanel']],
			'Kdyby\Doctrine\Diagnostics\Panel' => [['doctrine.default.diagnosticsPanel']],
			'Doctrine\DBAL\Connection' => [1 => ['doctrine.default.connection']],
			'Doctrine\DBAL\Driver\Connection' => [1 => ['doctrine.default.connection']],
			'Kdyby\Doctrine\Connection' => [1 => ['doctrine.default.connection']],
			'Kdyby\Doctrine\EntityRepository' => [1 => ['doctrine.dao']],
			'Doctrine\ORM\EntityRepository' => [1 => ['doctrine.dao']],
			'Doctrine\Common\Persistence\ObjectRepository' => [1 => ['doctrine.dao']],
			'Doctrine\Common\Collections\Selectable' => [1 => ['doctrine.dao']],
			'Kdyby\Persistence\ObjectDao' => [1 => ['doctrine.dao']],
			'Kdyby\Doctrine\EntityDao' => [1 => ['doctrine.dao']],
			'Kdyby\Doctrine\EntityDaoFactory' => [1 => ['doctrine.daoFactory']],
			'Kdyby\Doctrine\DI\IRepositoryFactory' => [['doctrine.repositoryFactory.default.defaultRepositoryFactory']],
			'Doctrine\ORM\Tools\SchemaValidator' => [1 => ['doctrine.default.schemaValidator']],
			'Doctrine\ORM\Tools\SchemaTool' => [1 => ['doctrine.default.schemaTool']],
			'Kdyby\Doctrine\Tools\CacheCleaner' => [1 => ['doctrine.default.cacheCleaner']],
			'Doctrine\DBAL\Schema\AbstractSchemaManager' => [1 => ['doctrine.default.schemaManager']],
			'Symfony\Component\Console\Helper\Helper' => [1 => ['doctrine.helper.entityManager', 'doctrine.helper.connection']],
			'Symfony\Component\Console\Helper\HelperInterface' => [1 => ['doctrine.helper.entityManager', 'doctrine.helper.connection']],
			'Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper' => [1 => ['doctrine.helper.entityManager']],
			'Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper' => [1 => ['doctrine.helper.connection']],
			'Kdyby\Doctrine\Console\OrmDelegateCommand' => [
				1 => [
					'doctrine.cli.0',
					'doctrine.cli.1',
					'doctrine.cli.2',
					'doctrine.cli.3',
					'doctrine.cli.4',
					'doctrine.cli.5',
					'doctrine.cli.6',
					'doctrine.cli.7',
					'doctrine.cli.8',
					'doctrine.cli.10',
					'doctrine.cli.11',
					'doctrine.cli.13',
					'doctrine.cli.14',
					'doctrine.cli.15',
					'doctrine.cli.16',
				],
			],
			'Symfony\Component\Console\Command\Command' => [
				1 => [
					'doctrine.cli.0',
					'doctrine.cli.1',
					'doctrine.cli.2',
					'doctrine.cli.3',
					'doctrine.cli.4',
					'doctrine.cli.5',
					'doctrine.cli.6',
					'doctrine.cli.7',
					'doctrine.cli.8',
					'doctrine.cli.9',
					'doctrine.cli.10',
					'doctrine.cli.11',
					'doctrine.cli.12',
					'doctrine.cli.13',
					'doctrine.cli.14',
					'doctrine.cli.15',
					'doctrine.cli.16',
				],
			],
			'Kdyby\Doctrine\Console\Proxy\CacheClearCollectionRegionCommand' => [1 => ['doctrine.cli.0']],
			'Kdyby\Doctrine\Console\Proxy\CacheClearEntityRegionCommand' => [1 => ['doctrine.cli.1']],
			'Kdyby\Doctrine\Console\Proxy\CacheClearMetadataCommand' => [1 => ['doctrine.cli.2']],
			'Kdyby\Doctrine\Console\Proxy\CacheClearQueryCommand' => [1 => ['doctrine.cli.3']],
			'Kdyby\Doctrine\Console\Proxy\CacheClearQueryRegionCommand' => [1 => ['doctrine.cli.4']],
			'Kdyby\Doctrine\Console\Proxy\CacheClearResultCommand' => [1 => ['doctrine.cli.5']],
			'Kdyby\Doctrine\Console\Proxy\ConvertMappingCommand' => [1 => ['doctrine.cli.6']],
			'Kdyby\Doctrine\Console\Proxy\GenerateEntitiesCommand' => [1 => ['doctrine.cli.7']],
			'Kdyby\Doctrine\Console\Proxy\GenerateProxiesCommand' => [1 => ['doctrine.cli.8']],
			'Kdyby\Doctrine\Console\DbalDelegateCommand' => [1 => ['doctrine.cli.9', 'doctrine.cli.12']],
			'Kdyby\Doctrine\Console\Proxy\ImportCommand' => [1 => ['doctrine.cli.9']],
			'Kdyby\Doctrine\Console\Proxy\InfoCommand' => [1 => ['doctrine.cli.10']],
			'Kdyby\Doctrine\Console\Proxy\MappingDescribeCommand' => [1 => ['doctrine.cli.11']],
			'Kdyby\Doctrine\Console\Proxy\ReservedWordsCommand' => [1 => ['doctrine.cli.12']],
			'Kdyby\Doctrine\Console\Proxy\SchemaCreateCommand' => [1 => ['doctrine.cli.13']],
			'Kdyby\Doctrine\Console\Proxy\SchemaUpdateCommand' => [1 => ['doctrine.cli.14']],
			'Kdyby\Doctrine\Console\Proxy\SchemaDropCommand' => [1 => ['doctrine.cli.15']],
			'Kdyby\Doctrine\Console\Proxy\ValidateSchemaCommand' => [1 => ['doctrine.cli.16']],
			'Doctrine\Common\Persistence\AbstractManagerRegistry' => [1 => ['doctrine.registry']],
			'Doctrine\Common\Persistence\ConnectionRegistry' => [1 => ['doctrine.registry']],
			'Doctrine\Common\Persistence\ManagerRegistry' => [1 => ['doctrine.registry']],
			'Kdyby\Doctrine\Registry' => [1 => ['doctrine.registry']],
			'App\Forms\FormFactory' => [1 => ['72_App_Forms_FormFactory']],
			'App\Forms\SignInFormFactory' => [1 => ['73_App_Forms_SignInFormFactory']],
			'App\Forms\SignUpFormFactory' => [1 => ['74_App_Forms_SignUpFormFactory']],
			'Nette\Security\IAuthenticator' => [1 => ['75_App_Model_UserManager']],
			'App\Model\UserManager' => [1 => ['75_App_Model_UserManager']],
			'App\Presenters\BasePresenter' => [1 => ['application.1', 'application.3', 'application.4']],
			'Nette\Application\UI\Presenter' => [['application.1', 'application.3', 'application.4', 'application.5']],
			'Nette\Application\UI\Control' => [['application.1', 'application.3', 'application.4', 'application.5']],
			'Nette\Application\UI\Component' => [['application.1', 'application.3', 'application.4', 'application.5']],
			'Nette\ComponentModel\Container' => [['application.1', 'application.3', 'application.4', 'application.5']],
			'Nette\ComponentModel\Component' => [['application.1', 'application.3', 'application.4', 'application.5']],
			'Nette\Application\UI\IRenderable' => [['application.1', 'application.3', 'application.4', 'application.5']],
			'Nette\ComponentModel\IContainer' => [['application.1', 'application.3', 'application.4', 'application.5']],
			'Nette\ComponentModel\IComponent' => [['application.1', 'application.3', 'application.4', 'application.5']],
			'Nette\Application\UI\ISignalReceiver' => [['application.1', 'application.3', 'application.4', 'application.5']],
			'Nette\Application\UI\IStatePersistent' => [['application.1', 'application.3', 'application.4', 'application.5']],
			'ArrayAccess' => [['application.1', 'application.3', 'application.4', 'application.5']],
			'Nette\Application\IPresenter' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
				],
			],
			'App\Presenters\Error4xxPresenter' => [1 => ['application.1']],
			'App\Presenters\ErrorPresenter' => [1 => ['application.2']],
			'App\Presenters\HomepagePresenter' => [1 => ['application.3']],
			'App\Presenters\SignPresenter' => [1 => ['application.4']],
			'KdybyModule\CliPresenter' => [1 => ['application.5']],
			'NetteModule\ErrorPresenter' => [1 => ['application.6']],
			'NetteModule\MicroPresenter' => [1 => ['application.7']],
			'Nette\DI\Container' => [1 => ['container']],
		],
		'services' => [
			'72_App_Forms_FormFactory' => 'App\Forms\FormFactory',
			'73_App_Forms_SignInFormFactory' => 'App\Forms\SignInFormFactory',
			'74_App_Forms_SignUpFormFactory' => 'App\Forms\SignUpFormFactory',
			'75_App_Model_UserManager' => 'App\Model\UserManager',
			'annotations.cache.annotations' => 'Doctrine\Common\Cache\Cache',
			'annotations.reader' => 'Doctrine\Common\Annotations\Reader',
			'annotations.reflectionReader' => 'Doctrine\Common\Annotations\AnnotationReader',
			'application.1' => 'App\Presenters\Error4xxPresenter',
			'application.2' => 'App\Presenters\ErrorPresenter',
			'application.3' => 'App\Presenters\HomepagePresenter',
			'application.4' => 'App\Presenters\SignPresenter',
			'application.5' => 'KdybyModule\CliPresenter',
			'application.6' => 'NetteModule\ErrorPresenter',
			'application.7' => 'NetteModule\MicroPresenter',
			'application.application' => 'Nette\Application\Application',
			'application.linkGenerator' => 'Nette\Application\LinkGenerator',
			'application.presenterFactory' => 'Nette\Application\IPresenterFactory',
			'cache.journal' => 'Nette\Caching\Storages\IJournal',
			'cache.storage' => 'Nette\Caching\IStorage',
			'console.application' => 'Kdyby\Console\Application',
			'console.helperSet' => 'Symfony\Component\Console\Helper\HelperSet',
			'container' => 'Nette\DI\Container',
			'database.default.connection' => 'Nette\Database\Connection',
			'database.default.context' => 'Nette\Database\Context',
			'database.default.conventions' => 'Nette\Database\Conventions\DiscoveredConventions',
			'database.default.structure' => 'Nette\Database\Structure',
			'doctrine.cache.default.dbalResult' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.hydration' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.metadata' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.ormResult' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.query' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cli.0' => 'Kdyby\Doctrine\Console\Proxy\CacheClearCollectionRegionCommand',
			'doctrine.cli.1' => 'Kdyby\Doctrine\Console\Proxy\CacheClearEntityRegionCommand',
			'doctrine.cli.10' => 'Kdyby\Doctrine\Console\Proxy\InfoCommand',
			'doctrine.cli.11' => 'Kdyby\Doctrine\Console\Proxy\MappingDescribeCommand',
			'doctrine.cli.12' => 'Kdyby\Doctrine\Console\Proxy\ReservedWordsCommand',
			'doctrine.cli.13' => 'Kdyby\Doctrine\Console\Proxy\SchemaCreateCommand',
			'doctrine.cli.14' => 'Kdyby\Doctrine\Console\Proxy\SchemaUpdateCommand',
			'doctrine.cli.15' => 'Kdyby\Doctrine\Console\Proxy\SchemaDropCommand',
			'doctrine.cli.16' => 'Kdyby\Doctrine\Console\Proxy\ValidateSchemaCommand',
			'doctrine.cli.2' => 'Kdyby\Doctrine\Console\Proxy\CacheClearMetadataCommand',
			'doctrine.cli.3' => 'Kdyby\Doctrine\Console\Proxy\CacheClearQueryCommand',
			'doctrine.cli.4' => 'Kdyby\Doctrine\Console\Proxy\CacheClearQueryRegionCommand',
			'doctrine.cli.5' => 'Kdyby\Doctrine\Console\Proxy\CacheClearResultCommand',
			'doctrine.cli.6' => 'Kdyby\Doctrine\Console\Proxy\ConvertMappingCommand',
			'doctrine.cli.7' => 'Kdyby\Doctrine\Console\Proxy\GenerateEntitiesCommand',
			'doctrine.cli.8' => 'Kdyby\Doctrine\Console\Proxy\GenerateProxiesCommand',
			'doctrine.cli.9' => 'Kdyby\Doctrine\Console\Proxy\ImportCommand',
			'doctrine.dao' => 'Kdyby\Doctrine\EntityDao',
			'doctrine.daoFactory' => 'Kdyby\Doctrine\EntityDao',
			'doctrine.default.cacheCleaner' => 'Kdyby\Doctrine\Tools\CacheCleaner',
			'doctrine.default.connection' => 'Kdyby\Doctrine\Connection',
			'doctrine.default.dbalConfiguration' => 'Doctrine\DBAL\Configuration',
			'doctrine.default.diagnosticsPanel' => 'Kdyby\Doctrine\Diagnostics\Panel',
			'doctrine.default.driver.App.annotationsImpl' => 'Doctrine\Common\Persistence\Mapping\Driver\MappingDriver',
			'doctrine.default.driver.Kdyby_Doctrine.annotationsImpl' => 'Doctrine\Common\Persistence\Mapping\Driver\MappingDriver',
			'doctrine.default.entityManager' => 'Kdyby\Doctrine\EntityManager',
			'doctrine.default.evm' => 'Kdyby\Events\NamespacedEventManager',
			'doctrine.default.metadataDriver' => 'Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain',
			'doctrine.default.ormConfiguration' => 'Kdyby\Doctrine\Configuration',
			'doctrine.default.repositoryFactory' => 'Kdyby\Doctrine\RepositoryFactory',
			'doctrine.default.schemaManager' => 'Doctrine\DBAL\Schema\AbstractSchemaManager',
			'doctrine.default.schemaTool' => 'Doctrine\ORM\Tools\SchemaTool',
			'doctrine.default.schemaValidator' => 'Doctrine\ORM\Tools\SchemaValidator',
			'doctrine.helper.connection' => 'Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper',
			'doctrine.helper.entityManager' => 'Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper',
			'doctrine.registry' => 'Kdyby\Doctrine\Registry',
			'doctrine.repositoryFactory.default.defaultRepositoryFactory' => 'Kdyby\Doctrine\EntityDao',
			'events.manager' => 'Kdyby\Events\LazyEventManager',
			'http.context' => 'Nette\Http\Context',
			'http.request' => 'Nette\Http\Request',
			'http.requestFactory' => 'Nette\Http\RequestFactory',
			'http.response' => 'Nette\Http\Response',
			'latte.latteFactory' => 'Latte\Engine',
			'latte.templateFactory' => 'Nette\Application\UI\ITemplateFactory',
			'mail.mailer' => 'Nette\Mail\IMailer',
			'routing.router' => 'Nette\Application\IRouter',
			'security.user' => 'Nette\Security\User',
			'security.userStorage' => 'Nette\Security\IUserStorage',
			'session.session' => 'Nette\Http\Session',
			'tracy.bar' => 'Tracy\Bar',
			'tracy.blueScreen' => 'Tracy\BlueScreen',
			'tracy.logger' => 'Tracy\ILogger',
		],
		'tags' => [
			'inject' => [
				'application.1' => true,
				'application.2' => true,
				'application.3' => true,
				'application.4' => true,
				'application.5' => true,
				'application.6' => true,
				'application.7' => true,
				'doctrine.cli.0' => false,
				'doctrine.cli.1' => false,
				'doctrine.cli.10' => false,
				'doctrine.cli.11' => false,
				'doctrine.cli.12' => false,
				'doctrine.cli.13' => false,
				'doctrine.cli.14' => false,
				'doctrine.cli.15' => false,
				'doctrine.cli.16' => false,
				'doctrine.cli.2' => false,
				'doctrine.cli.3' => false,
				'doctrine.cli.4' => false,
				'doctrine.cli.5' => false,
				'doctrine.cli.6' => false,
				'doctrine.cli.7' => false,
				'doctrine.cli.8' => false,
				'doctrine.cli.9' => false,
			],
			'nette.presenter' => [
				'application.1' => 'App\Presenters\Error4xxPresenter',
				'application.2' => 'App\Presenters\ErrorPresenter',
				'application.3' => 'App\Presenters\HomepagePresenter',
				'application.4' => 'App\Presenters\SignPresenter',
				'application.5' => 'KdybyModule\CliPresenter',
				'application.6' => 'NetteModule\ErrorPresenter',
				'application.7' => 'NetteModule\MicroPresenter',
			],
			'kdyby.console.command' => [
				'doctrine.cli.0' => true,
				'doctrine.cli.1' => true,
				'doctrine.cli.10' => true,
				'doctrine.cli.11' => true,
				'doctrine.cli.12' => true,
				'doctrine.cli.13' => true,
				'doctrine.cli.14' => true,
				'doctrine.cli.15' => true,
				'doctrine.cli.16' => true,
				'doctrine.cli.2' => true,
				'doctrine.cli.3' => true,
				'doctrine.cli.4' => true,
				'doctrine.cli.5' => true,
				'doctrine.cli.6' => true,
				'doctrine.cli.7' => true,
				'doctrine.cli.8' => true,
				'doctrine.cli.9' => true,
			],
			'doctrine.connection' => ['doctrine.default.connection' => true],
			'kdyby.doctrine.connection' => ['doctrine.default.connection' => true],
			'doctrine.entityManager' => ['doctrine.default.entityManager' => true],
			'kdyby.doctrine.entityManager' => ['doctrine.default.entityManager' => true],
			'kdyby.console.helper' => [
				'doctrine.helper.connection' => 'db',
				'doctrine.helper.entityManager' => 'em',
			],
		],
		'aliases' => [
			'application' => 'application.application',
			'cacheStorage' => 'cache.storage',
			'database.default' => 'database.default.connection',
			'doctrine.cacheCleaner' => 'doctrine.default.cacheCleaner',
			'doctrine.schemaManager' => 'doctrine.default.schemaManager',
			'doctrine.schemaTool' => 'doctrine.default.schemaTool',
			'doctrine.schemaValidator' => 'doctrine.default.schemaValidator',
			'httpRequest' => 'http.request',
			'httpResponse' => 'http.response',
			'nette.cacheJournal' => 'cache.journal',
			'nette.database.default' => 'database.default',
			'nette.database.default.context' => 'database.default.context',
			'nette.httpContext' => 'http.context',
			'nette.httpRequestFactory' => 'http.requestFactory',
			'nette.latteFactory' => 'latte.latteFactory',
			'nette.mailer' => 'mail.mailer',
			'nette.presenterFactory' => 'application.presenterFactory',
			'nette.templateFactory' => 'latte.templateFactory',
			'nette.userStorage' => 'security.userStorage',
			'router' => 'routing.router',
			'session' => 'session.session',
			'user' => 'security.user',
		],
	];


	public function __construct(array $params = [])
	{
		$this->parameters = $params;
		$this->parameters += [
			'appDir' => 'C:\UwAmp\www\XXX\Nette\ANT\app',
			'wwwDir' => 'C:\UwAmp\www\XXX\Nette\ANT\www',
			'debugMode' => true,
			'productionMode' => false,
			'consoleMode' => false,
			'tempDir' => 'C:\UwAmp\www\XXX\Nette\ANT\app/../temp',
			'doctrine.debug' => false,
			'doctrine' => [
				'orm' => ['defaultEntityManager' => 'default'],
				'dbal' => ['defaultConnection' => 'default'],
			],
		];
	}


	/**
	 * @return App\Forms\FormFactory
	 */
	public function createService__72_App_Forms_FormFactory()
	{
		$service = new App\Forms\FormFactory;
		return $service;
	}


	/**
	 * @return App\Forms\SignInFormFactory
	 */
	public function createService__73_App_Forms_SignInFormFactory()
	{
		$service = new App\Forms\SignInFormFactory($this->getService('72_App_Forms_FormFactory'),
			$this->getService('security.user'));
		return $service;
	}


	/**
	 * @return App\Forms\SignUpFormFactory
	 */
	public function createService__74_App_Forms_SignUpFormFactory()
	{
		$service = new App\Forms\SignUpFormFactory($this->getService('72_App_Forms_FormFactory'),
			$this->getService('75_App_Model_UserManager'));
		return $service;
	}


	/**
	 * @return App\Model\UserManager
	 */
	public function createService__75_App_Model_UserManager()
	{
		$service = new App\Model\UserManager($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceAnnotations__cache__annotations()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Annotations',
			true);
		$service->setNamespace('Kdyby_annotations.cache.annotations_374ca3b6');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Annotations\Reader
	 */
	public function createServiceAnnotations__reader()
	{
		$service = new Doctrine\Common\Annotations\CachedReader($this->getService('annotations.reflectionReader'),
			$this->getService('annotations.cache.annotations'), true);
		return $service;
	}


	/**
	 * @return Doctrine\Common\Annotations\AnnotationReader
	 */
	public function createServiceAnnotations__reflectionReader()
	{
		$service = new Doctrine\Common\Annotations\AnnotationReader;
		$service->addGlobalIgnoredName('persistent');
		$service->addGlobalIgnoredName('serializationVersion');
		return $service;
	}


	/**
	 * @return App\Presenters\Error4xxPresenter
	 */
	public function createServiceApplication__1()
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 5;
		$service->onShutdown = $this->getService('events.manager')->createEvent(['App\Presenters\Error4xxPresenter', 'onShutdown'],
			$service->onShutdown, null, false);
		$service->onAnchor = $this->getService('events.manager')->createEvent(['App\Presenters\Error4xxPresenter', 'onAnchor'],
			$service->onAnchor, null, false);
		return $service;
	}


	/**
	 * @return App\Presenters\ErrorPresenter
	 */
	public function createServiceApplication__2()
	{
		$service = new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return App\Presenters\HomepagePresenter
	 */
	public function createServiceApplication__3()
	{
		$service = new App\Presenters\HomepagePresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 5;
		$service->onShutdown = $this->getService('events.manager')->createEvent(['App\Presenters\HomepagePresenter', 'onShutdown'],
			$service->onShutdown, null, false);
		$service->onAnchor = $this->getService('events.manager')->createEvent(['App\Presenters\HomepagePresenter', 'onAnchor'],
			$service->onAnchor, null, false);
		return $service;
	}


	/**
	 * @return App\Presenters\SignPresenter
	 */
	public function createServiceApplication__4()
	{
		$service = new App\Presenters\SignPresenter($this->getService('73_App_Forms_SignInFormFactory'),
			$this->getService('74_App_Forms_SignUpFormFactory'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 5;
		$service->onShutdown = $this->getService('events.manager')->createEvent(['App\Presenters\SignPresenter', 'onShutdown'],
			$service->onShutdown, null, false);
		$service->onAnchor = $this->getService('events.manager')->createEvent(['App\Presenters\SignPresenter', 'onAnchor'],
			$service->onAnchor, null, false);
		return $service;
	}


	/**
	 * @return KdybyModule\CliPresenter
	 */
	public function createServiceApplication__5()
	{
		$service = new KdybyModule\CliPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectConsole($this->getService('console.application'), $this->getService('application.application'));
		$service->invalidLinkMode = 5;
		$service->onShutdown = $this->getService('events.manager')->createEvent(['KdybyModule\CliPresenter', 'onShutdown'],
			$service->onShutdown, null, false);
		$service->onAnchor = $this->getService('events.manager')->createEvent(['KdybyModule\CliPresenter', 'onAnchor'],
			$service->onAnchor, null, false);
		return $service;
	}


	/**
	 * @return NetteModule\ErrorPresenter
	 */
	public function createServiceApplication__6()
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return NetteModule\MicroPresenter
	 */
	public function createServiceApplication__7()
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'),
			$this->getService('routing.router'));
		return $service;
	}


	/**
	 * @return Nette\Application\Application
	 */
	public function createServiceApplication__application()
	{
		$service = new Nette\Application\Application($this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'));
		$service->catchExceptions = false;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel($this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('application.presenterFactory')));
		$service->onStartup = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onStartup'],
			$service->onStartup, null, false);
		$service->onShutdown = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onShutdown'],
			$service->onShutdown, null, false);
		$service->onRequest = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onRequest'],
			$service->onRequest, null, false);
		$service->onPresenter = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onPresenter'],
			$service->onPresenter, null, false);
		$service->onResponse = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onResponse'],
			$service->onResponse, null, false);
		$service->onError = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onError'],
			$service->onError, null, false);
		return $service;
	}


	/**
	 * @return Nette\Application\LinkGenerator
	 */
	public function createServiceApplication__linkGenerator()
	{
		$service = new Nette\Application\LinkGenerator($this->getService('routing.router'),
			$this->getService('http.request')->getUrl(), $this->getService('application.presenterFactory'));
		return $service;
	}


	/**
	 * @return Nette\Application\IPresenterFactory
	 */
	public function createServiceApplication__presenterFactory()
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 5, 'C:\UwAmp\www\XXX\Nette\ANT\app/../temp/cache/Nette%5CBridges%5CApplicationDI%5CApplicationExtension'));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\IJournal
	 */
	public function createServiceCache__journal()
	{
		$service = new Nette\Caching\Storages\SQLiteJournal('C:\UwAmp\www\XXX\Nette\ANT\app/../temp/cache/journal.s3db');
		return $service;
	}


	/**
	 * @return Nette\Caching\IStorage
	 */
	public function createServiceCache__storage()
	{
		$service = new Nette\Caching\Storages\FileStorage('C:\UwAmp\www\XXX\Nette\ANT\app/../temp/cache',
			$this->getService('cache.journal'));
		return $service;
	}


	/**
	 * @return Kdyby\Console\Application
	 */
	public function createServiceConsole__application()
	{
		$service = new Kdyby\Console\Application('Nette Framework', 'unknown');
		$service->setHelperSet($this->getService('console.helperSet'));
		$service->injectServiceLocator($this);
		return $service;
	}


	/**
	 * @return Symfony\Component\Console\Helper\HelperSet
	 */
	public function createServiceConsole__helperSet()
	{
		$service = new Symfony\Component\Console\Helper\HelperSet;
		$service->set(new Symfony\Component\Console\Helper\ProcessHelper);
		$service->set(new Symfony\Component\Console\Helper\DescriptorHelper);
		$service->set(new Symfony\Component\Console\Helper\FormatterHelper);
		$service->set(new Symfony\Component\Console\Helper\QuestionHelper);
		$service->set(new Symfony\Component\Console\Helper\DebugFormatterHelper);
		$service->set(new Kdyby\Console\Helpers\PresenterHelper($this->getService('application.application')));
		$service->set(new Kdyby\Console\ContainerHelper($this), 'dic');
		return $service;
	}


	/**
	 * @return Nette\DI\Container
	 */
	public function createServiceContainer()
	{
		return $this;
	}


	/**
	 * @return Nette\Database\Connection
	 */
	public function createServiceDatabase__default__connection()
	{
		$service = new Nette\Database\Connection('mysql:host=127.0.0.1;dbname=test', null, null,
			['lazy' => true]);
		$this->getService('tracy.blueScreen')->addPanel('Nette\Bridges\DatabaseTracy\ConnectionPanel::renderException');
		Nette\Database\Helpers::createDebugPanel($service, true, 'default');
		$service->onConnect = $this->getService('events.manager')->createEvent(['Nette\Database\Connection', 'onConnect'],
			$service->onConnect, null, false);
		$service->onQuery = $this->getService('events.manager')->createEvent(['Nette\Database\Connection', 'onQuery'],
			$service->onQuery, null, false);
		return $service;
	}


	/**
	 * @return Nette\Database\Context
	 */
	public function createServiceDatabase__default__context()
	{
		$service = new Nette\Database\Context($this->getService('database.default.connection'),
			$this->getService('database.default.structure'), $this->getService('database.default.conventions'),
			$this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Database\Conventions\DiscoveredConventions
	 */
	public function createServiceDatabase__default__conventions()
	{
		$service = new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
		return $service;
	}


	/**
	 * @return Nette\Database\Structure
	 */
	public function createServiceDatabase__default__structure()
	{
		$service = new Nette\Database\Structure($this->getService('database.default.connection'),
			$this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__dbalResult()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.dbalResult',
			false);
		$service->setNamespace('Kdyby_doctrine.cache.default.dbalResult_374ca3b6');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__hydration()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.hydration',
			false);
		$service->setNamespace('Kdyby_doctrine.cache.default.hydration_374ca3b6');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__metadata()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.metadata',
			false);
		$service->setNamespace('Kdyby_doctrine.cache.default.metadata_374ca3b6');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__ormResult()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.ormResult',
			false);
		$service->setNamespace('Kdyby_doctrine.cache.default.ormResult_374ca3b6');
		return $service;
	}


	/**
	 * @return Doctrine\Common\Cache\Cache
	 */
	public function createServiceDoctrine__cache__default__query()
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.query',
			false);
		$service->setNamespace('Kdyby_doctrine.cache.default.query_374ca3b6');
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\Proxy\CacheClearCollectionRegionCommand
	 */
	public function createServiceDoctrine__cli__0()
	{
		$service = new Kdyby\Doctrine\Console\Proxy\CacheClearCollectionRegionCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\Proxy\CacheClearEntityRegionCommand
	 */
	public function createServiceDoctrine__cli__1()
	{
		$service = new Kdyby\Doctrine\Console\Proxy\CacheClearEntityRegionCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\Proxy\InfoCommand
	 */
	public function createServiceDoctrine__cli__10()
	{
		$service = new Kdyby\Doctrine\Console\Proxy\InfoCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\Proxy\MappingDescribeCommand
	 */
	public function createServiceDoctrine__cli__11()
	{
		$service = new Kdyby\Doctrine\Console\Proxy\MappingDescribeCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\Proxy\ReservedWordsCommand
	 */
	public function createServiceDoctrine__cli__12()
	{
		$service = new Kdyby\Doctrine\Console\Proxy\ReservedWordsCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\Proxy\SchemaCreateCommand
	 */
	public function createServiceDoctrine__cli__13()
	{
		$service = new Kdyby\Doctrine\Console\Proxy\SchemaCreateCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\Proxy\SchemaUpdateCommand
	 */
	public function createServiceDoctrine__cli__14()
	{
		$service = new Kdyby\Doctrine\Console\Proxy\SchemaUpdateCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\Proxy\SchemaDropCommand
	 */
	public function createServiceDoctrine__cli__15()
	{
		$service = new Kdyby\Doctrine\Console\Proxy\SchemaDropCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\Proxy\ValidateSchemaCommand
	 */
	public function createServiceDoctrine__cli__16()
	{
		$service = new Kdyby\Doctrine\Console\Proxy\ValidateSchemaCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\Proxy\CacheClearMetadataCommand
	 */
	public function createServiceDoctrine__cli__2()
	{
		$service = new Kdyby\Doctrine\Console\Proxy\CacheClearMetadataCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\Proxy\CacheClearQueryCommand
	 */
	public function createServiceDoctrine__cli__3()
	{
		$service = new Kdyby\Doctrine\Console\Proxy\CacheClearQueryCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\Proxy\CacheClearQueryRegionCommand
	 */
	public function createServiceDoctrine__cli__4()
	{
		$service = new Kdyby\Doctrine\Console\Proxy\CacheClearQueryRegionCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\Proxy\CacheClearResultCommand
	 */
	public function createServiceDoctrine__cli__5()
	{
		$service = new Kdyby\Doctrine\Console\Proxy\CacheClearResultCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\Proxy\ConvertMappingCommand
	 */
	public function createServiceDoctrine__cli__6()
	{
		$service = new Kdyby\Doctrine\Console\Proxy\ConvertMappingCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\Proxy\GenerateEntitiesCommand
	 */
	public function createServiceDoctrine__cli__7()
	{
		$service = new Kdyby\Doctrine\Console\Proxy\GenerateEntitiesCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\Proxy\GenerateProxiesCommand
	 */
	public function createServiceDoctrine__cli__8()
	{
		$service = new Kdyby\Doctrine\Console\Proxy\GenerateProxiesCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Console\Proxy\ImportCommand
	 */
	public function createServiceDoctrine__cli__9()
	{
		$service = new Kdyby\Doctrine\Console\Proxy\ImportCommand;
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\EntityDao
	 */
	public function createServiceDoctrine__dao($entityName)
	{
		$service = $this->getService('doctrine.default.entityManager')->getDao($entityName);
		if (!$service instanceof Kdyby\Doctrine\EntityDao) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.dao\', value returned by factory is not Kdyby\Doctrine\EntityDao type.');
		}
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\EntityDaoFactory
	 */
	public function createServiceDoctrine__daoFactory()
	{
		return new Container_6bae8d8498_Kdyby_Doctrine_EntityDaoFactoryImpl_doctrine_daoFactory($this);
	}


	/**
	 * @return Kdyby\Doctrine\Tools\CacheCleaner
	 */
	public function createServiceDoctrine__default__cacheCleaner()
	{
		$service = new Kdyby\Doctrine\Tools\CacheCleaner($this->getService('doctrine.default.entityManager'));
		$service->addCacheStorage($this->getService('annotations.cache.annotations'));
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Connection
	 */
	public function createServiceDoctrine__default__connection()
	{
		$service = Kdyby\Doctrine\Connection::create([
			'dbname' => 'ant',
			'host' => '127.0.0.1',
			'port' => null,
			'user' => 'root',
			'password' => 'root',
			'charset' => 'UTF8',
			'driver' => 'pdo_mysql',
			'driverClass' => null,
			'options' => null,
			'path' => null,
			'memory' => null,
			'unix_socket' => null,
			'platformService' => null,
			'defaultTableOptions' => [],
			'schemaFilter' => null,
			'debug' => true,
		], $this->getService('doctrine.default.dbalConfiguration'), $this->getService('doctrine.default.evm'));
		if (!$service instanceof Kdyby\Doctrine\Connection) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.default.connection\', value returned by factory is not Kdyby\Doctrine\Connection type.');
		}
		$service->setSchemaTypes([
			'enum' => 'enum',
			'point' => 'point',
			'lineString' => 'lineString',
			'multiLineString' => 'multiLineString',
			'polygon' => 'polygon',
			'multiPolygon' => 'multiPolygon',
			'geometryCollection' => 'geometryCollection',
		]);
		$service->setDbalTypes([
			'enum' => 'Kdyby\Doctrine\Types\Enum',
			'point' => 'Kdyby\Doctrine\Types\Point',
			'lineString' => 'Kdyby\Doctrine\Types\LineString',
			'multiLineString' => 'Kdyby\Doctrine\Types\MultiLineString',
			'polygon' => 'Kdyby\Doctrine\Types\Polygon',
			'multiPolygon' => 'Kdyby\Doctrine\Types\MultiPolygon',
			'geometryCollection' => 'Kdyby\Doctrine\Types\GeometryCollection',
		]);
		$panel = $this->getService('doctrine.default.diagnosticsPanel')->bindConnection($service);
		$panel->enableLogging();
		return $service;
	}


	/**
	 * @return Doctrine\DBAL\Configuration
	 */
	public function createServiceDoctrine__default__dbalConfiguration()
	{
		$service = new Doctrine\DBAL\Configuration;
		$service->setResultCacheImpl($this->getService('doctrine.cache.default.dbalResult'));
		$service->setSQLLogger(new Doctrine\DBAL\Logging\LoggerChain);
		$service->setFilterSchemaAssetsExpression(null);
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Diagnostics\Panel
	 */
	public function createServiceDoctrine__default__diagnosticsPanel()
	{
		$service = new Kdyby\Doctrine\Diagnostics\Panel;
		return $service;
	}


	/**
	 * @return Doctrine\Common\Persistence\Mapping\Driver\MappingDriver
	 */
	public function createServiceDoctrine__default__driver__App__annotationsImpl()
	{
		$service = new Kdyby\Doctrine\Mapping\AnnotationDriver(['C:\UwAmp\www\XXX\Nette\ANT\app'],
			$this->getService('annotations.reader'), $this->getService('doctrine.cache.default.metadata'));
		return $service;
	}


	/**
	 * @return Doctrine\Common\Persistence\Mapping\Driver\MappingDriver
	 */
	public function createServiceDoctrine__default__driver__Kdyby_Doctrine__annotationsImpl()
	{
		$service = new Kdyby\Doctrine\Mapping\AnnotationDriver([
			'C:\UwAmp\www\XXX\Nette\ANT\vendor\kdyby\doctrine\src\Kdyby\Doctrine\DI/../Entities',
		], $this->getService('annotations.reader'), $this->getService('doctrine.cache.default.metadata'));
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\EntityManager
	 */
	public function createServiceDoctrine__default__entityManager()
	{
		$service = Kdyby\Doctrine\EntityManager::create($this->getService('doctrine.default.connection'),
			$this->getService('doctrine.default.ormConfiguration'), $this->getService('doctrine.default.evm'));
		if (!$service instanceof Kdyby\Doctrine\EntityManager) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.default.entityManager\', value returned by factory is not Kdyby\Doctrine\EntityManager type.');
		}
		$this->getService('doctrine.default.diagnosticsPanel')->bindEntityManager($service);
		$service->onDaoCreate = $this->getService('events.manager')->createEvent(['Kdyby\Doctrine\EntityManager', 'onDaoCreate'],
			$service->onDaoCreate, null, false);
		return $service;
	}


	/**
	 * @return Kdyby\Events\NamespacedEventManager
	 */
	public function createServiceDoctrine__default__evm()
	{
		$service = new Kdyby\Events\NamespacedEventManager('Doctrine\ORM\Event::', $this->getService('events.manager'));
		$service->dispatchGlobalEvents = true;
		return $service;
	}


	/**
	 * @return Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain
	 */
	public function createServiceDoctrine__default__metadataDriver()
	{
		$service = new Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain;
		$service->addDriver($this->getService('doctrine.default.driver.App.annotationsImpl'),
			'App');
		$service->addDriver($this->getService('doctrine.default.driver.Kdyby_Doctrine.annotationsImpl'),
			'Kdyby\Doctrine');
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Configuration
	 */
	public function createServiceDoctrine__default__ormConfiguration()
	{
		$service = new Kdyby\Doctrine\Configuration;
		$service->setMetadataCacheImpl($this->getService('doctrine.cache.default.metadata'));
		$service->setQueryCacheImpl($this->getService('doctrine.cache.default.query'));
		$service->setResultCacheImpl($this->getService('doctrine.cache.default.ormResult'));
		$service->setHydrationCacheImpl($this->getService('doctrine.cache.default.hydration'));
		$service->setMetadataDriverImpl($this->getService('doctrine.default.metadataDriver'));
		$service->setClassMetadataFactoryName('Kdyby\Doctrine\Mapping\ClassMetadataFactory');
		$service->setDefaultRepositoryClassName('Kdyby\Doctrine\EntityDao');
		$service->setQueryBuilderClassName('Kdyby\Doctrine\QueryBuilder');
		$service->setRepositoryFactory($this->getService('doctrine.default.repositoryFactory'));
		$service->setProxyDir('C:\UwAmp\www\XXX\Nette\ANT\app/../temp/proxies');
		$service->setProxyNamespace('Kdyby\GeneratedProxy');
		$service->setAutoGenerateProxyClasses(1);
		$service->setEntityNamespaces([]);
		$service->setCustomHydrationModes([]);
		$service->setCustomStringFunctions([]);
		$service->setCustomNumericFunctions([]);
		$service->setCustomDatetimeFunctions([]);
		$service->setDefaultQueryHints([]);
		$service->setNamingStrategy(new Doctrine\ORM\Mapping\UnderscoreNamingStrategy);
		$service->setQuoteStrategy(new Doctrine\ORM\Mapping\DefaultQuoteStrategy);
		$service->setEntityListenerResolver(new Kdyby\Doctrine\Mapping\EntityListenerResolver($this));
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\RepositoryFactory
	 */
	public function createServiceDoctrine__default__repositoryFactory()
	{
		$service = new Kdyby\Doctrine\RepositoryFactory($this);
		$service->setServiceIdsMap([], 'doctrine.repositoryFactory.default.defaultRepositoryFactory');
		return $service;
	}


	/**
	 * @return Doctrine\DBAL\Schema\AbstractSchemaManager
	 */
	public function createServiceDoctrine__default__schemaManager()
	{
		$service = $this->getService('doctrine.default.connection')->getSchemaManager();
		if (!$service instanceof Doctrine\DBAL\Schema\AbstractSchemaManager) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.default.schemaManager\', value returned by factory is not Doctrine\DBAL\Schema\AbstractSchemaManager type.');
		}
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\SchemaTool
	 */
	public function createServiceDoctrine__default__schemaTool()
	{
		$service = new Doctrine\ORM\Tools\SchemaTool($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\SchemaValidator
	 */
	public function createServiceDoctrine__default__schemaValidator()
	{
		$service = new Doctrine\ORM\Tools\SchemaValidator($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	/**
	 * @return Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper
	 */
	public function createServiceDoctrine__helper__connection()
	{
		$service = new Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($this->getService('doctrine.default.connection'));
		return $service;
	}


	/**
	 * @return Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper
	 */
	public function createServiceDoctrine__helper__entityManager()
	{
		$service = new Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\Registry
	 */
	public function createServiceDoctrine__registry()
	{
		$service = new Kdyby\Doctrine\Registry(['default' => 'doctrine.default.connection'],
			['default' => 'doctrine.default.entityManager'], 'default', 'default',
			$this);
		return $service;
	}


	/**
	 * @return Kdyby\Doctrine\DI\IRepositoryFactory
	 */
	public function createServiceDoctrine__repositoryFactory__default__defaultRepositoryFactory()
	{
		return new Container_6bae8d8498_Kdyby_Doctrine_DI_IRepositoryFactoryImpl_doctrine_repositoryFactory_default_defaultRepositoryFactory($this);
	}


	/**
	 * @return Kdyby\Events\LazyEventManager
	 */
	public function createServiceEvents__manager()
	{
		$service = new Kdyby\Events\LazyEventManager([], $this);
		Kdyby\Events\Diagnostics\Panel::register($service, $this)->renderPanel = true;
		return $service;
	}


	/**
	 * @return Nette\Http\Context
	 */
	public function createServiceHttp__context()
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
		trigger_error('Service http.context is deprecated.', 16384);
		return $service;
	}


	/**
	 * @return Nette\Http\Request
	 */
	public function createServiceHttp__request()
	{
		$service = $this->getService('http.requestFactory')->createHttpRequest();
		if (!$service instanceof Nette\Http\Request) {
			throw new Nette\UnexpectedValueException('Unable to create service \'http.request\', value returned by factory is not Nette\Http\Request type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\RequestFactory
	 */
	public function createServiceHttp__requestFactory()
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	/**
	 * @return Nette\Http\Response
	 */
	public function createServiceHttp__response()
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	/**
	 * @return Nette\Bridges\ApplicationLatte\ILatteFactory
	 */
	public function createServiceLatte__latteFactory()
	{
		return new Container_6bae8d8498_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory($this);
	}


	/**
	 * @return Nette\Application\UI\ITemplateFactory
	 */
	public function createServiceLatte__templateFactory()
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory($this->getService('latte.latteFactory'),
			$this->getService('http.request'), $this->getService('security.user'),
			$this->getService('cache.storage'), null);
		return $service;
	}


	/**
	 * @return Nette\Mail\IMailer
	 */
	public function createServiceMail__mailer()
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	/**
	 * @return Nette\Application\IRouter
	 */
	public function createServiceRouting__router()
	{
		$service = App\RouterFactory::createRouter();
		if (!$service instanceof Nette\Application\IRouter) {
			throw new Nette\UnexpectedValueException('Unable to create service \'routing.router\', value returned by factory is not Nette\Application\IRouter type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Security\User
	 */
	public function createServiceSecurity__user()
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'), $this->getService('75_App_Model_UserManager'));
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		$service->onLoggedIn = $this->getService('events.manager')->createEvent(['Nette\Security\User', 'onLoggedIn'],
			$service->onLoggedIn, null, false);
		$service->onLoggedOut = $this->getService('events.manager')->createEvent(['Nette\Security\User', 'onLoggedOut'],
			$service->onLoggedOut, null, false);
		return $service;
	}


	/**
	 * @return Nette\Security\IUserStorage
	 */
	public function createServiceSecurity__userStorage()
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		return $service;
	}


	/**
	 * @return Nette\Http\Session
	 */
	public function createServiceSession__session()
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		return $service;
	}


	/**
	 * @return Tracy\Bar
	 */
	public function createServiceTracy__bar()
	{
		$service = Tracy\Debugger::getBar();
		if (!$service instanceof Tracy\Bar) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.bar\', value returned by factory is not Tracy\Bar type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\BlueScreen
	 */
	public function createServiceTracy__blueScreen()
	{
		$service = Tracy\Debugger::getBlueScreen();
		if (!$service instanceof Tracy\BlueScreen) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.blueScreen\', value returned by factory is not Tracy\BlueScreen type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\ILogger
	 */
	public function createServiceTracy__logger()
	{
		$service = Tracy\Debugger::getLogger();
		if (!$service instanceof Tracy\ILogger) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.logger\', value returned by factory is not Tracy\ILogger type.');
		}
		return $service;
	}


	public function initialize()
	{
		Kdyby\Doctrine\Proxy\ProxyAutoloader::create('C:\UwAmp\www\XXX\Nette\ANT\app/../temp/proxies', 'Kdyby\GeneratedProxy')->register();Doctrine\Common\Annotations\AnnotationRegistry::registerLoader("class_exists");
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		$this->getService('events.manager')->createEvent(['Nette\DI\Container', 'onInitialize'])->dispatch($this);
		$this->getService('http.response')->setHeader('X-Powered-By', 'Nette Framework');
		$this->getService('http.response')->setHeader('Content-Type', 'text/html; charset=utf-8');
		$this->getService('http.response')->setHeader('X-Frame-Options', 'SAMEORIGIN');
		$this->getService('session.session')->exists() && $this->getService('session.session')->start();
		Tracy\Debugger::$editorMapping = [];
		Tracy\Debugger::setLogger($this->getService('tracy.logger'));
		if ($tmp = $this->getByType("Nette\Http\Session", false)) { $tmp->start(); Tracy\Debugger::dispatch(); };;

		Kdyby\Doctrine\Diagnostics\Panel::registerBluescreen($this);
		Tracy\Debugger::getBlueScreen()->collapsePaths[] = 'C:\UwAmp\www\XXX\Nette\ANT\vendor\kdyby\doctrine\src\Kdyby\Doctrine';
		Tracy\Debugger::getBlueScreen()->collapsePaths[] = 'C:\UwAmp\www\XXX\Nette\ANT\vendor\doctrine';
		Tracy\Debugger::getBlueScreen()->collapsePaths[] = 'C:\UwAmp\www\XXX\Nette\ANT\app/../temp/proxies';
	}
}



class Container_6bae8d8498_Kdyby_Doctrine_EntityDaoFactoryImpl_doctrine_daoFactory implements Kdyby\Doctrine\EntityDaoFactory
{
	private $container;


	public function __construct(Container_6bae8d8498 $container)
	{
		$this->container = $container;
	}


	public function create($entityName)
	{
		$service = $this->container->getService('doctrine.default.entityManager')->getDao($entityName);
		if (!$service instanceof Kdyby\Doctrine\EntityDao) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.daoFactory\', value returned by factory is not Kdyby\Doctrine\EntityDao type.');
		}
		return $service;
	}
}



class Container_6bae8d8498_Kdyby_Doctrine_DI_IRepositoryFactoryImpl_doctrine_repositoryFactory_default_defaultRepositoryFactory implements Kdyby\Doctrine\DI\IRepositoryFactory
{
	private $container;


	public function __construct(Container_6bae8d8498 $container)
	{
		$this->container = $container;
	}


	public function create(Doctrine\ORM\EntityManagerInterface $entityManager, Doctrine\ORM\Mapping\ClassMetadata $classMetadata)
	{
		$service = new Kdyby\Doctrine\EntityDao($entityManager, $classMetadata);
		return $service;
	}
}



class Container_6bae8d8498_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory implements Nette\Bridges\ApplicationLatte\ILatteFactory
{
	private $container;


	public function __construct(Container_6bae8d8498 $container)
	{
		$this->container = $container;
	}


	public function create()
	{
		$service = new Latte\Engine;
		$service->setTempDirectory('C:\UwAmp\www\XXX\Nette\ANT\app/../temp/cache/latte');
		$service->setAutoRefresh(true);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = false;
		$service->onCompile = $this->container->getService('events.manager')->createEvent(['Latte\Engine', 'onCompile'],
			$service->onCompile, null, false);
		return $service;
	}
}
