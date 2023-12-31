<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.shop.traffic_seo.meta.shop_url' shared service.

return $this->services['form.type.shop.traffic_seo.meta.shop_url'] = new \PrestaShopBundle\Form\Admin\Configure\ShopParameters\TrafficSeo\Meta\ShopUrlType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? $this->load('getMultistoreFeatureService.php'))->isActive(), ($this->services['prestashop.adapter.shop.shop_url'] ?? $this->load('getPrestashop_Adapter_Shop_ShopUrlService.php'))->doesMainShopUrlExist());
