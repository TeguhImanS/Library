<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'backpack/crud' => '5.1.4@4539c787a2e052d2e2e2c00188c38432dc2a7ea9',
  'brick/math' => '0.9.3@ca57d18f028f84f777b2168cd1911b0dee2343ae',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'creativeorange/gravatar' => 'v1.0.22@0eed243a16bcd01e618036f9b8021526ea26f64a',
  'dflydev/dot-access-data' => 'v3.0.1@0992cc19268b259a39e86f296da5f0677841f42c',
  'digitallyhappy/assets' => '2.0.4@a79e6b0e4d50f31c325f7da9b6e600d89256177d',
  'doctrine/cache' => '2.2.0@1ca8f21980e770095a31456042471a57bc4c68fb',
  'doctrine/dbal' => '3.3.7@9f79d4650430b582f4598fe0954ef4d52fbc0a8a',
  'doctrine/deprecations' => 'v1.0.0@0e2a4f1f8cdfc7a92ec3b01c9334898c806b30de',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'dragonmantank/cron-expression' => 'v3.3.1@be85b3f05b46c39bbc0d95f6c071ddff669510fa',
  'egulias/email-validator' => '3.2.1@f88dcf4b14af14a98ad96b14b2b317969eab6715',
  'fruitcake/php-cors' => 'v1.2.0@58571acbaa5f9f462c9c77e911700ac66f446d4e',
  'graham-campbell/result-type' => 'v1.0.4@0690bde05318336c7221785f2a932467f98b64ca',
  'guzzlehttp/guzzle' => '7.4.5@1dd98b0564cb3f6bd16ce683cb755f94c10fbd82',
  'guzzlehttp/promises' => '1.5.1@fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
  'guzzlehttp/psr7' => '2.4.0@13388f00956b1503577598873fffb5ae994b5737',
  'laravel/framework' => 'v9.19.0@bbce25bd823133f6a5a724f2d62680b711f1d0df',
  'laravel/sanctum' => 'v2.15.1@31fbe6f85aee080c4dc2f9b03dc6dd5d0ee72473',
  'laravel/serializable-closure' => 'v1.2.0@09f0e9fb61829f628205b7c94906c28740ff9540',
  'laravel/tinker' => 'v2.7.2@dff39b661e827dae6e092412f976658df82dbac5',
  'league/commonmark' => '2.3.3@0da1dca5781dd3cfddbe328224d9a7a62571addc',
  'league/config' => 'v1.1.1@a9d39eeeb6cc49d10a6e6c36f22c4c1f4a767f3e',
  'league/flysystem' => '3.1.0@34a68067b7ae3b836ea5e57e1fc432478372a4f5',
  'league/mime-type-detection' => '1.11.0@ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
  'monolog/monolog' => '2.7.0@5579edf28aee1190a798bfa5be8bc16c563bd524',
  'nesbot/carbon' => '2.59.1@a9000603ea337c8df16cc41f8b6be95a65f4d0f5',
  'nette/schema' => 'v1.2.2@9a39cef03a5b34c7de64f551538cbba05c2be5df',
  'nette/utils' => 'v3.2.7@0af4e3de4df9f1543534beab255ccf459e7a2c99',
  'nikic/php-parser' => 'v4.14.0@34bea19b6e03d8153165d8f30bba4c3be86184c1',
  'phpoption/phpoption' => '1.8.1@eab7a0df01fe2344d172bff4cd6dbd3f8b84ad15',
  'prologue/alerts' => '1.0.0@b2880e28814b8dba8768e60e00511627381efe14',
  'psr/cache' => '3.0.0@aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
  'psr/container' => '2.0.2@c71ecc56dfe541dbd90c5360474fbc405f8d5963',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '3.0.0@fe5ea303b0887d5caefd3d431c3e61ad47037001',
  'psr/simple-cache' => '3.0.0@764e0b3939f5ca87cb904f570ef9be2d78a07865',
  'psy/psysh' => 'v0.11.5@c23686f9c48ca202710dbb967df8385a952a2daf',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.2.2@cccc74ee5e328031b15640b51056ee8d3bb66c0a',
  'ramsey/uuid' => '4.3.1@8505afd4fea63b81a85d3b7b53ac3cb8dc347c28',
  'symfony/console' => 'v6.0.10@d8d41b93c16f1da2f2d4b9209b7de78c4d203642',
  'symfony/css-selector' => 'v6.0.3@1955d595c12c111629cc814d3f2a2ff13580508a',
  'symfony/deprecation-contracts' => 'v3.0.2@26954b3d62a6c5fd0ea8a2a00c0353a14978d05c',
  'symfony/error-handler' => 'v6.0.9@732ca203b3222cde3378d5ddf5e2883211acc53e',
  'symfony/event-dispatcher' => 'v6.0.9@5c85b58422865d42c6eb46f7693339056db098a8',
  'symfony/event-dispatcher-contracts' => 'v3.0.2@7bc61cc2db649b4637d331240c5346dcc7708051',
  'symfony/finder' => 'v6.0.8@af7edab28d17caecd1f40a9219fc646ae751c21f',
  'symfony/http-foundation' => 'v6.0.10@47f2aa677a96ff3b79d2ed70052adf75b16824a9',
  'symfony/http-kernel' => 'v6.0.10@fa3e92a78c3f311573671961c7f7a2c5bce0f54d',
  'symfony/mailer' => 'v6.0.10@9b60de35f0b4eed09ee2b25195a478b86acd128d',
  'symfony/mime' => 'v6.0.10@4de7886c66e0953f5d6edab3e49ceb751d01621c',
  'symfony/polyfill-ctype' => 'v1.26.0@6fd1b9a79f6e3cf65f9e679b23af304cd9e010d4',
  'symfony/polyfill-intl-grapheme' => 'v1.26.0@433d05519ce6990bf3530fba6957499d327395c2',
  'symfony/polyfill-intl-idn' => 'v1.26.0@59a8d271f00dd0e4c2e518104cc7963f655a1aa8',
  'symfony/polyfill-intl-normalizer' => 'v1.26.0@219aa369ceff116e673852dce47c3a41794c14bd',
  'symfony/polyfill-mbstring' => 'v1.26.0@9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e',
  'symfony/polyfill-php72' => 'v1.26.0@bf44a9fd41feaac72b074de600314a93e2ae78e2',
  'symfony/polyfill-php80' => 'v1.26.0@cfa0ae98841b9e461207c13ab093d76b0fa7bace',
  'symfony/polyfill-php81' => 'v1.26.0@13f6d1271c663dc5ae9fb843a8f16521db7687a1',
  'symfony/process' => 'v6.0.8@d074154ea8b1443a96391f6e39f9e547b2dd01b9',
  'symfony/routing' => 'v6.0.8@74c40c9fc334acc601a32fcf4274e74fb3bac11e',
  'symfony/service-contracts' => 'v3.0.2@d78d39c1599bd1188b8e26bb341da52c3c6d8a66',
  'symfony/string' => 'v6.0.10@1b3adf02a0fc814bd9118d7fd68a097a599ebc27',
  'symfony/translation' => 'v6.0.9@9ba011309943955a3807b8236c17cff3b88f67b6',
  'symfony/translation-contracts' => 'v3.0.2@acbfbb274e730e5a0236f619b6168d9dedb3e282',
  'symfony/var-dumper' => 'v6.0.9@ac81072464221e73ee994d12f0b8a2af4a9ed798',
  'tijsverkoyen/css-to-inline-styles' => '2.2.4@da444caae6aca7a19c0c140f68c6182e337d5b1c',
  'vlucas/phpdotenv' => 'v5.4.1@264dce589e7ce37a7ba99cb901eed8249fbec92f',
  'voku/portable-ascii' => '2.0.1@b56450eed252f6801410d810c8e1727224ae0743',
  'webmozart/assert' => '1.11.0@11cb2199493b2f8a3b53e7f19068fc6aac760991',
  'backpack/generators' => 'v3.1.13@ca7f840d43de6e649fd2b22ef9a37cb2459dbc21',
  'doctrine/instantiator' => '1.4.1@10dcfce151b967d20fde1b34ae6640712c3891bc',
  'facade/ignition-contracts' => '1.0.2@3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
  'fakerphp/faker' => 'v1.19.0@d7f08a622b3346766325488aa32ddc93ccdecc75',
  'filp/whoops' => '2.14.5@a63e5e8f26ebbebf8ed3c5c691637325512eb0dc',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'laracasts/generators' => '2.0.1@5527f50260c6d3bf50a8e62e902e3fb44e87c4d8',
  'laravel/sail' => 'v1.15.0@676e1ff33c1b8af657779f62f57360c376cba666',
  'mockery/mockery' => '1.5.0@c10a5f6e06fc2470ab1822fa13fa2a7380f8fbac',
  'myclabs/deep-copy' => '1.11.0@14daed4296fae74d9e3201d2c4925d1acb7aa614',
  'nunomaduro/collision' => 'v6.2.1@5f058f7e39278b701e455b3c82ec5298cf001d89',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.6.1@77a32518733312af16a44300404e945338981de3',
  'phpspec/prophecy' => 'v1.15.0@bbcd7380b0ebf3961ee21409db7b38bc31d69a13',
  'phpunit/php-code-coverage' => '9.2.15@2e9da11878c4202f97915c1cb4bb1ca318a63f5f',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.21@0e32b76be457de00e83213528f6bb37e2a38fcb1',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.4@1b5dff7bb151a4db11d49d90e5408e4e938270f7',
  'sebastian/exporter' => '4.0.4@65e8b7db476c5dd267e65eea9cab77584d3cfff9',
  'sebastian/global-state' => '5.0.5@0ca8db5a5fc9c8646244e629625ac486fa286bf2',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '3.0.0@b233b84bc4465aff7b57cf1c4bc75c86d00d6dad',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'spatie/backtrace' => '1.2.1@4ee7d41aa5268107906ea8a4d9ceccde136dbd5b',
  'spatie/flare-client-php' => '1.2.0@86a380f5b1ce839af04a08f1c8f2697184cdf23f',
  'spatie/ignition' => '1.3.1@997363fbcce809b1e55f571997d49017f9c623d9',
  'spatie/laravel-ignition' => '1.3.1@fe37a0eafe6ea040804255c70e9808af13314f87',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'laravel/laravel' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
