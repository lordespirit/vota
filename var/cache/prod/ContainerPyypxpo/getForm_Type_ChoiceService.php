<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.type.choice' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/ChoiceList/Factory/ChoiceListFactoryInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/ChoiceList/Factory/DefaultChoiceListFactory.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/ChoiceList/Factory/PropertyAccessDecorator.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/ChoiceList/Factory/CachingFactoryDecorator.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Extension/Core/Type/ChoiceType.php';

return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->load(__DIR__.'/getPropertyAccessorService.php')) && false ?: '_'})));