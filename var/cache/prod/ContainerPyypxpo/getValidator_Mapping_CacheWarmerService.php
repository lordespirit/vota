<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'validator.mapping.cache_warmer' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/CacheWarmer/CacheWarmerInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/CacheWarmer/ValidatorCacheWarmer.php';

return $this->services['validator.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->load(__DIR__.'/getValidator_BuilderService.php')) && false ?: '_'}, ($this->targetDirs[0].'/validation.php'), ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->load(__DIR__.'/getCache_ValidatorService.php')) && false ?: '_'});
