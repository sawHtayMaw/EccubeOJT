<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Customize\Form\Extension\AdminProductTypeExtension' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
include_once $this->targetDirs[3].'\\app\\Customize\\Form\\Extension\\AdminProductTypeExtension.php';

return $this->services['Customize\\Form\\Extension\\AdminProductTypeExtension'] = new \Customize\Form\Extension\AdminProductTypeExtension(${($_ = isset($this->services['Eccube\\Common\\EccubeConfig']) ? $this->services['Eccube\\Common\\EccubeConfig'] : ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'});
