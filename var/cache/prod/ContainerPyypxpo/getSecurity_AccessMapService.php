<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_map' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpFoundation/RequestMatcherInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpFoundation/RequestMatcher.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/AccessMapInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/AccessMap.php';

$this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/administracio'), array(0 => 'ROLE_ADMIN'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/administracioCreacio'), array(0 => 'ROLE_ADMIN'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/administracioEdicio'), array(0 => 'ROLE_ADMIN'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/editarEnquesta^'), array(0 => 'ROLE_ADMIN'), NULL);

return $instance;
