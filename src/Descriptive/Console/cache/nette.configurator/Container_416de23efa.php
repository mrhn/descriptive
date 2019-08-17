<?php
// source: /home/mrhn/src/descriptive-example-fractal/vendor/phpstan/phpstan/conf/config.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_416de23efa extends Nette\DI\Container
{
	protected $tags = [
		'phpstan.broker.propertiesClassReflectionExtension' => ['035' => true, '075' => true],
		'phpstan.broker.dynamicFunctionReturnTypeExtension' => [
			'050' => true,
			'051' => true,
			'052' => true,
			'053' => true,
			'054' => true,
			'056' => true,
			'057' => true,
			'058' => true,
			'059' => true,
			'060' => true,
			'061' => true,
			'062' => true,
			'063' => true,
			'064' => true,
			'065' => true,
			'066' => true,
			'067' => true,
			'069' => true,
			'070' => true,
			'071' => true,
			'072' => true,
			'073' => true,
			'074' => true,
			'076' => true,
			'079' => true,
			'080' => true,
			'081' => true,
			'082' => true,
			'083' => true,
			'084' => true,
			'085' => true,
			'086' => true,
			'087' => true,
			'088' => true,
			'089' => true,
			'090' => true,
			'0110' => true,
			'0111' => true,
			'0112' => true,
			'0113' => true,
		],
		'phpstan.typeSpecifier.functionTypeSpecifyingExtension' => [
			'055' => true,
			'068' => true,
			'077' => true,
			'078' => true,
			'091' => true,
			'092' => true,
			'093' => true,
			'094' => true,
			'095' => true,
			'096' => true,
			'097' => true,
			'098' => true,
			'099' => true,
			'0100' => true,
			'0101' => true,
			'0102' => true,
			'0103' => true,
			'0104' => true,
			'0105' => true,
			'0106' => true,
			'0107' => true,
			'0108' => true,
			'0109' => true,
		],
		'phpstan.broker.dynamicMethodReturnTypeExtension' => ['076' => true],
	];

	protected $types = ['container' => 'Nette\DI\Container', 'relativePathHelper' => 'PHPStan\File\RelativePathHelper'];

	protected $aliases = [];

	protected $wiring = [
		'Nette\DI\Container' => [['container']],
		'PhpParser\BuilderFactory' => [['01']],
		'PhpParser\Lexer' => [['02']],
		'PhpParser\NodeTraverserInterface' => [['03']],
		'PhpParser\NodeTraverser' => [['03']],
		'PhpParser\NodeVisitorAbstract' => [['04']],
		'PhpParser\NodeVisitor' => [['04']],
		'PhpParser\NodeVisitor\NameResolver' => [['04']],
		'PhpParser\ParserAbstract' => [['05']],
		'PhpParser\Parser' => [['05']],
		'PhpParser\Parser\Php7' => [['05']],
		'PhpParser\PrettyPrinterAbstract' => [['06']],
		'PhpParser\PrettyPrinter\Standard' => [['06']],
		'PHPStan\Broker\AnonymousClassNameHelper' => [['07']],
		'PHPStan\PhpDocParser\Lexer\Lexer' => [['08']],
		'PHPStan\PhpDocParser\Parser\TypeParser' => [['09']],
		'PHPStan\PhpDocParser\Parser\ConstExprParser' => [['010']],
		'PHPStan\PhpDocParser\Parser\PhpDocParser' => [['011']],
		'PHPStan\PhpDoc\PhpDocNodeResolver' => [['012']],
		'PHPStan\PhpDoc\PhpDocStringResolver' => [['013']],
		'PHPStan\PhpDoc\TypeNodeResolver' => [['014']],
		'PHPStan\PhpDoc\TypeStringResolver' => [['015']],
		'PHPStan\Analyser\Analyser' => [['016']],
		'PHPStan\Analyser\ScopeFactory' => [['017']],
		'PHPStan\Analyser\NodeScopeResolver' => [['018']],
		'PHPStan\Cache\Cache' => [['019']],
		'PHPStan\Command\AnalyseApplication' => [['020']],
		'PHPStan\Dependency\DependencyDumper' => [['021']],
		'PHPStan\Dependency\DependencyResolver' => [['022']],
		'PHPStan\DependencyInjection\Container' => [['023']],
		'PHPStan\File\FileHelper' => [['024']],
		'PHPStan\File\FileExcluder' => [['025']],
		'PHPStan\File\FileFinder' => [['026']],
		'PHPStan\Parser\Parser' => [['027'], 2 => [1 => 'directParser']],
		'PHPStan\Parser\CachedParser' => [['027']],
		'PHPStan\Parser\FunctionCallStatementFinder' => [['028']],
		'PHPStan\Reflection\FunctionReflectionFactory' => [['029']],
		'PHPStan\Reflection\MethodsClassReflectionExtension' => [['030', '032']],
		'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [['030']],
		'PHPStan\Reflection\PropertiesClassReflectionExtension' => [['031', '032', '033', '035', '075']],
		'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [['031']],
		'PHPStan\Reflection\BrokerAwareExtension' => [['032', '035', '073', '0111']],
		'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [['032']],
		'PHPStan\Reflection\PhpDefect\PhpDefectClassReflectionExtension' => [['033']],
		'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [['034']],
		'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [['035']],
		'PHPStan\Reflection\SignatureMap\SignatureMapParser' => [['036']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProvider' => [['037']],
		'PHPStan\Rules\ClassCaseSensitivityCheck' => [['038']],
		'PHPStan\Rules\Comparison\ConstantConditionRuleHelper' => [['039']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper' => [['040']],
		'PHPStan\Rules\FunctionCallParametersCheck' => [['041']],
		'PHPStan\Rules\FunctionDefinitionCheck' => [['042']],
		'PHPStan\Rules\FunctionReturnTypeCheck' => [['043']],
		'PHPStan\Rules\Properties\PropertyDescriptor' => [['044']],
		'PHPStan\Rules\Properties\PropertyReflectionFinder' => [['045']],
		'PHPStan\Rules\RegistryFactory' => [['046']],
		'PHPStan\Rules\RuleLevelHelper' => [['047']],
		'PHPStan\Rules\UnusedFunctionParametersCheck' => [['048']],
		'PHPStan\Type\FileTypeMapper' => [['049']],
		'PHPStan\Type\DynamicFunctionReturnTypeExtension' => [
			[
				'050',
				'051',
				'052',
				'053',
				'054',
				'056',
				'057',
				'058',
				'059',
				'060',
				'061',
				'062',
				'063',
				'064',
				'065',
				'066',
				'067',
				'069',
				'070',
				'071',
				'072',
				'073',
				'074',
				'076',
				'079',
				'080',
				'081',
				'082',
				'083',
				'084',
				'085',
				'086',
				'087',
				'088',
				'089',
				'090',
				'0110',
				'0111',
				'0112',
				'0113',
			],
		],
		'PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension' => [['050']],
		'PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension' => [['051']],
		'PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension' => [['052']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension' => [['053']],
		'PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension' => [['054']],
		'PHPStan\Type\FunctionTypeSpecifyingExtension' => [
			[
				'055',
				'068',
				'077',
				'078',
				'091',
				'092',
				'093',
				'094',
				'095',
				'096',
				'097',
				'098',
				'099',
				'0100',
				'0101',
				'0102',
				'0103',
				'0104',
				'0105',
				'0106',
				'0107',
				'0108',
				'0109',
			],
		],
		'PHPStan\Analyser\TypeSpecifierAwareExtension' => [
			[
				'055',
				'068',
				'077',
				'078',
				'091',
				'092',
				'093',
				'094',
				'095',
				'096',
				'097',
				'098',
				'099',
				'0100',
				'0101',
				'0102',
				'0103',
				'0104',
				'0105',
				'0106',
				'0107',
				'0108',
				'0109',
				'0111',
			],
		],
		'PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension' => [['055']],
		'PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension' => [['056']],
		'PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension' => [['057']],
		'PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension' => [['058']],
		'PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension' => [['059']],
		'PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension' => [['060']],
		'PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension' => [['061']],
		'PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension' => [['062']],
		'PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension' => [['063']],
		'PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension' => [['064']],
		'PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension' => [['065']],
		'PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension' => [['066']],
		'PHPStan\Type\Php\CountFunctionReturnTypeExtension' => [['067']],
		'PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension' => [['068']],
		'PHPStan\Type\Php\CurlInitReturnTypeExtension' => [['069']],
		'PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension' => [['070']],
		'PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension' => [['071']],
		'PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension' => [['072']],
		'PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension' => [['073']],
		'PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension' => [['074']],
		'PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension' => [['075']],
		'PHPStan\Type\DynamicMethodReturnTypeExtension' => [['076']],
		'PHPStan\Type\Php\StatDynamicReturnTypeExtension' => [['076']],
		'PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension' => [['077']],
		'PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension' => [['078']],
		'PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension' => [['079']],
		'PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension' => [['080']],
		'PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension' => [['081']],
		'PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension' => [['082']],
		'PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension' => [['083']],
		'PHPStan\Type\Php\MbFunctionsReturnTypeExtension' => [['084']],
		'PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension' => [['085']],
		'PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension' => [['086']],
		'PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension' => [['087']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension' => [['088']],
		'PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension' => [['089']],
		'PHPStan\Type\Php\RangeFunctionReturnTypeExtension' => [['090']],
		'PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension' => [['091']],
		'PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension' => [['092']],
		'PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension' => [['093']],
		'PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension' => [['094']],
		'PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension' => [['095']],
		'PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension' => [['096']],
		'PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension' => [['097']],
		'PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension' => [['098']],
		'PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension' => [['099']],
		'PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension' => [['0100']],
		'PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension' => [['0101']],
		'PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension' => [['0102']],
		'PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension' => [['0103']],
		'PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension' => [['0104']],
		'PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension' => [['0105']],
		'PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension' => [['0106']],
		'PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension' => [['0107']],
		'PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension' => [['0108']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension' => [['0109']],
		'PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension' => [['0110']],
		'PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension' => [['0111']],
		'PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension' => [['0112']],
		'PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension' => [['0113']],
		'PHPStan\Analyser\TypeSpecifier' => [['typeSpecifier']],
		'PHPStan\Analyser\TypeSpecifierFactory' => [['typeSpecifierFactory']],
		'PHPStan\File\RelativePathHelper' => [['relativePathHelper'], 2 => [1 => 'simpleRelativePathHelper']],
		'PHPStan\Broker\Broker' => [['broker']],
		'PHPStan\Broker\BrokerFactory' => [['brokerFactory']],
		'PHPStan\Cache\CacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Cache\FileCacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Parser\DirectParser' => [2 => ['directParser']],
		'PHPStan\Rules\Registry' => [['registry']],
		'PHPStan\PhpDoc\TypeNodeResolverFactory' => [['typeNodeResolverFactory']],
		'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [
			[
				'errorFormatter.raw',
				'errorFormatter.table',
				'errorFormatter.checkstyle',
				'errorFormatter.json',
				'errorFormatter.prettyJson',
			],
		],
		'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [['errorFormatter.raw']],
		'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [['errorFormatter.table']],
		'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter' => [['errorFormatter.checkstyle']],
		'PHPStan\Command\ErrorFormatter\JsonErrorFormatter' => [['errorFormatter.json', 'errorFormatter.prettyJson']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [
			'bootstrap' => null,
			'excludes_analyse' => [],
			'autoload_directories' => [],
			'autoload_files' => [],
			'level' => null,
			'paths' => [],
			'featureToggles' => [
				'subtractableTypes' => false,
				'validateParameters' => false,
				'allowVarTagAboveStatements' => false,
			],
			'fileExtensions' => ['php'],
			'checkAlwaysTrueCheckTypeFunctionCall' => false,
			'checkAlwaysTrueInstanceof' => false,
			'checkAlwaysTrueStrictComparison' => false,
			'checkClassCaseSensitivity' => false,
			'checkFunctionArgumentTypes' => false,
			'checkFunctionNameCase' => false,
			'checkArgumentsPassedByReference' => false,
			'checkMaybeUndefinedVariables' => false,
			'checkNullables' => false,
			'checkThisOnly' => true,
			'checkUnionTypes' => false,
			'checkExplicitMixedMissingReturn' => false,
			'checkPhpDocMissingReturn' => false,
			'inferPrivatePropertyTypeFromConstructor' => false,
			'reportMaybes' => false,
			'reportMaybesInMethodSignatures' => false,
			'reportStaticMethodSignatures' => false,
			'polluteScopeWithLoopInitialAssignments' => true,
			'polluteScopeWithAlwaysIterableForeach' => true,
			'polluteCatchScopeWithTryAssignments' => false,
			'tipsOfTheDay' => true,
			'reportMagicMethods' => false,
			'reportMagicProperties' => false,
			'ignoreErrors' => [],
			'internalErrorsCountLimit' => 50,
			'cache' => ['nodesByFileCountMax' => 512, 'nodesByStringCountMax' => 512],
			'reportUnmatchedIgnoredErrors' => true,
			'scopeClass' => 'PHPStan\Analyser\Scope',
			'universalObjectCratesClasses' => ['stdClass'],
			'earlyTerminatingMethodCalls' => [],
			'memoryLimitFile' => '/home/mrhn/src/descriptive/src/Descriptive/Console/.memory_limit',
			'benchmarkFile' => null,
			'dynamicConstantNames' => [
				'ICONV_IMPL',
				'PHP_VERSION',
				'PHP_MAJOR_VERSION',
				'PHP_MINOR_VERSION',
				'PHP_RELEASE_VERSION',
				'PHP_VERSION_ID',
				'PHP_EXTRA_VERSION',
				'PHP_ZTS',
				'PHP_DEBUG',
				'PHP_MAXPATHLEN',
				'PHP_OS',
				'PHP_OS_FAMILY',
				'PHP_SAPI',
				'PHP_EOL',
				'PHP_INT_MAX',
				'PHP_INT_MIN',
				'PHP_INT_SIZE',
				'PHP_FLOAT_DIG',
				'PHP_FLOAT_EPSILON',
				'PHP_FLOAT_MIN',
				'PHP_FLOAT_MAX',
				'DEFAULT_INCLUDE_PATH',
				'PEAR_INSTALL_DIR',
				'PEAR_EXTENSION_DIR',
				'PHP_EXTENSION_DIR',
				'PHP_PREFIX',
				'PHP_BINDIR',
				'PHP_BINARY',
				'PHP_MANDIR',
				'PHP_LIBDIR',
				'PHP_DATADIR',
				'PHP_SYSCONFDIR',
				'PHP_LOCALSTATEDIR',
				'PHP_CONFIG_FILE_PATH',
				'PHP_CONFIG_FILE_SCAN_DIR',
				'PHP_SHLIB_SUFFIX',
				'PHP_FD_SETSIZE',
			],
			'debugMode' => true,
			'productionMode' => false,
			'tempDir' => '/home/mrhn/src/descriptive/src/Descriptive/Console',
			'rootDir' => '/home/mrhn/src/descriptive-example-fractal/vendor/phpstan/phpstan',
			'currentWorkingDirectory' => '/home/mrhn/src/descriptive/src/Descriptive/Console',
			'cliArgumentsVariablesRegistered' => true,
			'tmpDir' => '/home/mrhn/src/descriptive/src/Descriptive/Console',
			'__parametersSchema' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Structure', [
				"\x00Nette\\Schema\\Elements\\Structure\x00items" => [
					'bootstrap' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'excludes_analyse' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
							"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'autoload_directories' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
							"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'autoload_files' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
							"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'level' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\AnyOf', [
						"\x00Nette\\Schema\\Elements\\AnyOf\x00set" => [
							Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
								"\x00Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
								"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
								"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							null,
						],
						"\x00Nette\\Schema\\Elements\\AnyOf\x00required" => true,
						"\x00Nette\\Schema\\Elements\\AnyOf\x00default" => null,
						"\x00Nette\\Schema\\Elements\\AnyOf\x00before" => null,
						"\x00Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
					]),
					'paths' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
							"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'featureToggles' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'array',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
							"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
							"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'fileExtensions' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
							"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueCheckTypeFunctionCall' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueInstanceof' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueStrictComparison' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkClassCaseSensitivity' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkFunctionArgumentTypes' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkFunctionNameCase' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkArgumentsPassedByReference' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMaybeUndefinedVariables' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkNullables' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkThisOnly' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkUnionTypes' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkExplicitMixedMissingReturn' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkPhpDocMissingReturn' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'inferPrivatePropertyTypeFromConstructor' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tipsOfTheDay' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMaybes' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMaybesInMethodSignatures' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportStaticMethodSignatures' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'polluteScopeWithLoopInitialAssignments' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'polluteScopeWithAlwaysIterableForeach' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'polluteCatchScopeWithTryAssignments' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMagicMethods' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMagicProperties' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'ignoreErrors' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\AnyOf', [
							"\x00Nette\\Schema\\Elements\\AnyOf\x00set" => [
								Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
									"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
									"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
								]),
								Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Structure', [
									"\x00Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
											"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'path' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
											"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
									],
									"\x00Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								]),
								Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Structure', [
									"\x00Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
											"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'paths' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
											"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
											"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
												"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
												"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
												"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
												"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
												"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
												"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
												"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
												"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
											]),
											"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
											"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
									],
									"\x00Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								]),
							],
							"\x00Nette\\Schema\\Elements\\AnyOf\x00required" => true,
							"\x00Nette\\Schema\\Elements\\AnyOf\x00default" => null,
							"\x00Nette\\Schema\\Elements\\AnyOf\x00before" => null,
							"\x00Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'internalErrorsCountLimit' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'int',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'cache' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Structure', [
						"\x00Nette\\Schema\\Elements\\Structure\x00items" => [
							'nodesByFileCountMax' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
								"\x00Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'nodesByStringCountMax' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
								"\x00Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
						],
						"\x00Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'reportUnmatchedIgnoredErrors' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'scopeClass' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'universalObjectCratesClasses' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
							"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'earlyTerminatingMethodCalls' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'array',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
							"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
							"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
								"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
								"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'memoryLimitFile' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'benchmarkFile' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'dynamicConstantNames' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
							"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'customRulesetUsed' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'rootDir' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tmpDir' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'currentWorkingDirectory' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'cliArgumentsVariablesRegistered' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'debugMode' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'productionMode' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tempDir' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'__parametersSchema' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'Nette\Schema\Schema',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
				],
				"\x00Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
				"\x00Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
				"\x00Nette\\Schema\\Elements\\Structure\x00required" => true,
				"\x00Nette\\Schema\\Elements\\Structure\x00default" => null,
				"\x00Nette\\Schema\\Elements\\Structure\x00before" => null,
				"\x00Nette\\Schema\\Elements\\Structure\x00asserts" => [],
				"\x00Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
			]),
		];
	}


	public function createService01(): PhpParser\BuilderFactory
	{
		$service = new PhpParser\BuilderFactory;
		return $service;
	}


	public function createService02(): PhpParser\Lexer
	{
		$service = new PhpParser\Lexer;
		return $service;
	}


	public function createService03(): PhpParser\NodeTraverser
	{
		$service = new PhpParser\NodeTraverser;
		$service->addVisitor($this->getService('04'));
		return $service;
	}


	public function createService04(): PhpParser\NodeVisitor\NameResolver
	{
		$service = new PhpParser\NodeVisitor\NameResolver;
		return $service;
	}


	public function createService05(): PhpParser\Parser\Php7
	{
		$service = new PhpParser\Parser\Php7($this->getService('02'));
		return $service;
	}


	public function createService06(): PhpParser\PrettyPrinter\Standard
	{
		$service = new PhpParser\PrettyPrinter\Standard;
		return $service;
	}


	public function createService07(): PHPStan\Broker\AnonymousClassNameHelper
	{
		$service = new PHPStan\Broker\AnonymousClassNameHelper($this->getService('024'), $this->getService('simpleRelativePathHelper'));
		return $service;
	}


	public function createService08(): PHPStan\PhpDocParser\Lexer\Lexer
	{
		$service = new PHPStan\PhpDocParser\Lexer\Lexer;
		return $service;
	}


	public function createService09(): PHPStan\PhpDocParser\Parser\TypeParser
	{
		$service = new PHPStan\PhpDocParser\Parser\TypeParser;
		return $service;
	}


	public function createService010(): PHPStan\PhpDocParser\Parser\ConstExprParser
	{
		$service = new PHPStan\PhpDocParser\Parser\ConstExprParser;
		return $service;
	}


	public function createService011(): PHPStan\PhpDocParser\Parser\PhpDocParser
	{
		$service = new PHPStan\PhpDocParser\Parser\PhpDocParser($this->getService('09'), $this->getService('010'));
		return $service;
	}


	public function createService012(): PHPStan\PhpDoc\PhpDocNodeResolver
	{
		$service = new PHPStan\PhpDoc\PhpDocNodeResolver($this->getService('014'));
		return $service;
	}


	public function createService013(): PHPStan\PhpDoc\PhpDocStringResolver
	{
		$service = new PHPStan\PhpDoc\PhpDocStringResolver($this->getService('08'), $this->getService('011'), $this->getService('012'));
		return $service;
	}


	public function createService014(): PHPStan\PhpDoc\TypeNodeResolver
	{
		$service = $this->getService('typeNodeResolverFactory')->create();
		return $service;
	}


	public function createService015(): PHPStan\PhpDoc\TypeStringResolver
	{
		$service = new PHPStan\PhpDoc\TypeStringResolver($this->getService('08'), $this->getService('09'), $this->getService('014'));
		return $service;
	}


	public function createService016(): PHPStan\Analyser\Analyser
	{
		$service = new PHPStan\Analyser\Analyser(
			$this->getService('017'),
			$this->getService('027'),
			$this->getService('registry'),
			$this->getService('018'),
			$this->getService('024'),
			[],
			true,
			50,
			null
		);
		return $service;
	}


	public function createService017(): PHPStan\Analyser\ScopeFactory
	{
		$service = new PHPStan\Analyser\ScopeFactory(
			'PHPStan\Analyser\Scope',
			$this->getService('broker'),
			$this->getService('06'),
			$this->getService('typeSpecifier'),
			$this->getService('023')
		);
		return $service;
	}


	public function createService018(): PHPStan\Analyser\NodeScopeResolver
	{
		$service = new PHPStan\Analyser\NodeScopeResolver(
			$this->getService('broker'),
			$this->getService('027'),
			$this->getService('049'),
			$this->getService('024'),
			$this->getService('typeSpecifier'),
			true,
			false,
			true,
			[],
			false
		);
		return $service;
	}


	public function createService019(): PHPStan\Cache\Cache
	{
		$service = new PHPStan\Cache\Cache($this->getService('cacheStorage'));
		return $service;
	}


	public function createService020(): PHPStan\Command\AnalyseApplication
	{
		$service = new PHPStan\Command\AnalyseApplication(
			$this->getService('016'),
			'/home/mrhn/src/descriptive/src/Descriptive/Console/.memory_limit',
			$this->getService('024'),
			'/home/mrhn/src/descriptive/src/Descriptive/Console'
		);
		return $service;
	}


	public function createService021(): PHPStan\Dependency\DependencyDumper
	{
		$service = new PHPStan\Dependency\DependencyDumper(
			$this->getService('022'),
			$this->getService('018'),
			$this->getService('024'),
			$this->getService('027'),
			$this->getService('017'),
			$this->getService('026')
		);
		return $service;
	}


	public function createService022(): PHPStan\Dependency\DependencyResolver
	{
		$service = new PHPStan\Dependency\DependencyResolver($this->getService('broker'));
		return $service;
	}


	public function createService023(): PHPStan\DependencyInjection\Container
	{
		$service = new PHPStan\DependencyInjection\Nette\NetteContainer($this);
		return $service;
	}


	public function createService024(): PHPStan\File\FileHelper
	{
		$service = new PHPStan\File\FileHelper('/home/mrhn/src/descriptive/src/Descriptive/Console');
		return $service;
	}


	public function createService025(): PHPStan\File\FileExcluder
	{
		$service = new PHPStan\File\FileExcluder($this->getService('024'), []);
		return $service;
	}


	public function createService026(): PHPStan\File\FileFinder
	{
		$service = new PHPStan\File\FileFinder($this->getService('025'), $this->getService('024'), ['php']);
		return $service;
	}


	public function createService027(): PHPStan\Parser\CachedParser
	{
		$service = new PHPStan\Parser\CachedParser($this->getService('directParser'), 512, 512);
		return $service;
	}


	public function createService028(): PHPStan\Parser\FunctionCallStatementFinder
	{
		$service = new PHPStan\Parser\FunctionCallStatementFinder;
		return $service;
	}


	public function createService029(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_416de23efa $container)
			{
				$this->container = $container;
			}


			public function create(
				ReflectionFunction $reflection,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				$filename
			): PHPStan\Reflection\Php\PhpFunctionReflection {
				$service = new PHPStan\Reflection\Php\PhpFunctionReflection(
					$reflection,
					$this->container->getService('027'),
					$this->container->getService('028'),
					$this->container->getService('019'),
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$filename
				);
				return $service;
			}
		};
	}


	public function createService030(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		$service = new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension($this->getService('049'));
		return $service;
	}


	public function createService031(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		$service = new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension($this->getService('049'));
		return $service;
	}


	public function createService032(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		$service = new PHPStan\Reflection\Php\PhpClassReflectionExtension(
			$this->getService('023'),
			$this->getService('034'),
			$this->getService('049'),
			$this->getService('030'),
			$this->getService('031'),
			$this->getService('037'),
			$this->getService('027'),
			false
		);
		return $service;
	}


	public function createService033(): PHPStan\Reflection\PhpDefect\PhpDefectClassReflectionExtension
	{
		$service = new PHPStan\Reflection\PhpDefect\PhpDefectClassReflectionExtension($this->getService('015'), $this->getService('031'));
		return $service;
	}


	public function createService034(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\Php\PhpMethodReflectionFactory {
			private $container;


			public function __construct(Container_416de23efa $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\Reflection\ClassReflection $declaringClass,
				?PHPStan\Reflection\ClassReflection $declaringTrait,
				PHPStan\Reflection\Php\BuiltinMethodReflection $reflection,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal
			): PHPStan\Reflection\Php\PhpMethodReflection {
				$service = new PHPStan\Reflection\Php\PhpMethodReflection(
					$declaringClass,
					$declaringTrait,
					$reflection,
					$this->container->getService('broker'),
					$this->container->getService('027'),
					$this->container->getService('028'),
					$this->container->getService('019'),
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal
				);
				return $service;
			}
		};
	}


	public function createService035(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		$service = new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(['stdClass']);
		return $service;
	}


	public function createService036(): PHPStan\Reflection\SignatureMap\SignatureMapParser
	{
		$service = new PHPStan\Reflection\SignatureMap\SignatureMapParser($this->getService('015'));
		return $service;
	}


	public function createService037(): PHPStan\Reflection\SignatureMap\SignatureMapProvider
	{
		$service = new PHPStan\Reflection\SignatureMap\SignatureMapProvider($this->getService('036'));
		return $service;
	}


	public function createService038(): PHPStan\Rules\ClassCaseSensitivityCheck
	{
		$service = new PHPStan\Rules\ClassCaseSensitivityCheck($this->getService('broker'));
		return $service;
	}


	public function createService039(): PHPStan\Rules\Comparison\ConstantConditionRuleHelper
	{
		$service = new PHPStan\Rules\Comparison\ConstantConditionRuleHelper($this->getService('040'));
		return $service;
	}


	public function createService040(): PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper
	{
		$service = new PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper($this->getService('broker'), $this->getService('typeSpecifier'));
		return $service;
	}


	public function createService041(): PHPStan\Rules\FunctionCallParametersCheck
	{
		$service = new PHPStan\Rules\FunctionCallParametersCheck($this->getService('047'), false, false);
		return $service;
	}


	public function createService042(): PHPStan\Rules\FunctionDefinitionCheck
	{
		$service = new PHPStan\Rules\FunctionDefinitionCheck($this->getService('broker'), $this->getService('038'), false, true);
		return $service;
	}


	public function createService043(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		$service = new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('047'));
		return $service;
	}


	public function createService044(): PHPStan\Rules\Properties\PropertyDescriptor
	{
		$service = new PHPStan\Rules\Properties\PropertyDescriptor;
		return $service;
	}


	public function createService045(): PHPStan\Rules\Properties\PropertyReflectionFinder
	{
		$service = new PHPStan\Rules\Properties\PropertyReflectionFinder;
		return $service;
	}


	public function createService046(): PHPStan\Rules\RegistryFactory
	{
		$service = new PHPStan\Rules\RegistryFactory($this->getService('023'));
		return $service;
	}


	public function createService047(): PHPStan\Rules\RuleLevelHelper
	{
		$service = new PHPStan\Rules\RuleLevelHelper($this->getService('broker'), false, true, false);
		return $service;
	}


	public function createService048(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		$service = new PHPStan\Rules\UnusedFunctionParametersCheck;
		return $service;
	}


	public function createService049(): PHPStan\Type\FileTypeMapper
	{
		$service = new PHPStan\Type\FileTypeMapper(
			$this->getService('027'),
			$this->getService('013'),
			$this->getService('019'),
			$this->getService('07'),
			$this->getService('014')
		);
		return $service;
	}


	public function createService050(): PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension;
		return $service;
	}


	public function createService051(): PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension;
		return $service;
	}


	public function createService052(): PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension;
		return $service;
	}


	public function createService053(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension;
		return $service;
	}


	public function createService054(): PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension;
		return $service;
	}


	public function createService055(): PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService056(): PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension;
		return $service;
	}


	public function createService057(): PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension;
		return $service;
	}


	public function createService058(): PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createService059(): PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension;
		return $service;
	}


	public function createService060(): PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createService061(): PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension;
		return $service;
	}


	public function createService062(): PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension;
		return $service;
	}


	public function createService063(): PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension;
		return $service;
	}


	public function createService064(): PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension;
		return $service;
	}


	public function createService065(): PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createService066(): PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createService067(): PHPStan\Type\Php\CountFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\CountFunctionReturnTypeExtension;
		return $service;
	}


	public function createService068(): PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService069(): PHPStan\Type\Php\CurlInitReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\CurlInitReturnTypeExtension;
		return $service;
	}


	public function createService070(): PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension;
		return $service;
	}


	public function createService071(): PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createService072(): PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension;
		return $service;
	}


	public function createService073(): PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension;
		return $service;
	}


	public function createService074(): PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension;
		return $service;
	}


	public function createService075(): PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension
	{
		$service = new PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension;
		return $service;
	}


	public function createService076(): PHPStan\Type\Php\StatDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\StatDynamicReturnTypeExtension;
		return $service;
	}


	public function createService077(): PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension;
		return $service;
	}


	public function createService078(): PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension;
		return $service;
	}


	public function createService079(): PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension;
		return $service;
	}


	public function createService080(): PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createService081(): PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension;
		return $service;
	}


	public function createService082(): PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension;
		return $service;
	}


	public function createService083(): PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createService084(): PHPStan\Type\Php\MbFunctionsReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\MbFunctionsReturnTypeExtension;
		return $service;
	}


	public function createService085(): PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension;
		return $service;
	}


	public function createService086(): PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension;
		return $service;
	}


	public function createService087(): PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createService088(): PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createService089(): PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension;
		return $service;
	}


	public function createService090(): PHPStan\Type\Php\RangeFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\RangeFunctionReturnTypeExtension;
		return $service;
	}


	public function createService091(): PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService092(): PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension;
		return $service;
	}


	public function createService093(): PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension;
		return $service;
	}


	public function createService094(): PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService095(): PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService096(): PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService097(): PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService098(): PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService099(): PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0100(): PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension($this->getService('077'));
		return $service;
	}


	public function createService0101(): PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0102(): PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0103(): PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0104(): PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0105(): PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0106(): PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0107(): PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0108(): PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0109(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0110(): PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension;
		return $service;
	}


	public function createService0111(): PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension;
		return $service;
	}


	public function createService0112(): PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension;
		return $service;
	}


	public function createService0113(): PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createServiceBroker(): PHPStan\Broker\Broker
	{
		$service = $this->getService('brokerFactory')->create();
		return $service;
	}


	public function createServiceBrokerFactory(): PHPStan\Broker\BrokerFactory
	{
		$service = new PHPStan\Broker\BrokerFactory($this->getService('023'));
		return $service;
	}


	public function createServiceCacheStorage(): PHPStan\Cache\FileCacheStorage
	{
		$service = new PHPStan\Cache\FileCacheStorage('/home/mrhn/src/descriptive/src/Descriptive/Console/cache/PHPStan');
		return $service;
	}


	public function createServiceContainer(): Container_416de23efa
	{
		return $this;
	}


	public function createServiceDirectParser(): PHPStan\Parser\DirectParser
	{
		$service = new PHPStan\Parser\DirectParser($this->getService('05'), $this->getService('03'));
		return $service;
	}


	public function createServiceErrorFormatter__checkstyle(): PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter
	{
		$service = new PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter($this->getService('simpleRelativePathHelper'));
		return $service;
	}


	public function createServiceErrorFormatter__json(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		$service = new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(false);
		return $service;
	}


	public function createServiceErrorFormatter__prettyJson(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		$service = new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(true);
		return $service;
	}


	public function createServiceErrorFormatter__raw(): PHPStan\Command\ErrorFormatter\RawErrorFormatter
	{
		$service = new PHPStan\Command\ErrorFormatter\RawErrorFormatter;
		return $service;
	}


	public function createServiceErrorFormatter__table(): PHPStan\Command\ErrorFormatter\TableErrorFormatter
	{
		$service = new PHPStan\Command\ErrorFormatter\TableErrorFormatter($this->getService('relativePathHelper'), true, true, false);
		return $service;
	}


	public function createServiceRegistry(): PHPStan\Rules\Registry
	{
		$service = $this->getService('046')->create();
		return $service;
	}


	public function createServiceRelativePathHelper(): void
	{
		throw new Nette\DI\ServiceCreationException('Unable to create imported service \'relativePathHelper\', it must be added using addService()');
	}


	public function createServiceSimpleRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		$service = new PHPStan\File\SimpleRelativePathHelper('/home/mrhn/src/descriptive/src/Descriptive/Console');
		return $service;
	}


	public function createServiceTypeNodeResolverFactory(): PHPStan\PhpDoc\TypeNodeResolverFactory
	{
		$service = new PHPStan\PhpDoc\TypeNodeResolverFactory($this->getService('023'));
		return $service;
	}


	public function createServiceTypeSpecifier(): PHPStan\Analyser\TypeSpecifier
	{
		$service = $this->getService('typeSpecifierFactory')->create();
		return $service;
	}


	public function createServiceTypeSpecifierFactory(): PHPStan\Analyser\TypeSpecifierFactory
	{
		$service = new PHPStan\Analyser\TypeSpecifierFactory($this->getService('023'));
		return $service;
	}


	public function initialize()
	{
	}
}
