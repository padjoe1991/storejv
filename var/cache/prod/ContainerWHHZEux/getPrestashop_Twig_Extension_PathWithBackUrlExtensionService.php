<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.twig.extension.path_with_back_url_extension' shared service.

return $this->services['prestashop.twig.extension.path_with_back_url_extension'] = new \PrestaShopBundle\Twig\Extension\PathWithBackUrlExtension(($this->privates['twig.extension.routing'] ?? $this->load('getTwig_Extension_RoutingService.php')), ($this->services['prestashop.core.uti.back_url_provider'] ?? ($this->services['prestashop.core.uti.back_url_provider'] = new \PrestaShop\PrestaShop\Core\Util\Url\BackUrlProvider())), ((($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))) ? (($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))) : (null)));
