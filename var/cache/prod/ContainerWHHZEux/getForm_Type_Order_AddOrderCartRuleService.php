<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.order.add_order_cart_rule' shared service.

return $this->services['form.type.order.add_order_cart_rule'] = new \PrestaShopBundle\Form\Admin\Sell\Order\AddOrderCartRuleType(($this->services['prestashop.core.form.choice.provider.order_discount_type'] ?? $this->load('getPrestashop_Core_Form_Choice_Provider_OrderDiscountTypeService.php')), ($this->services['prestashop.adapter.form.choice_provider.order_invoice_by_id'] ?? $this->load('getPrestashop_Adapter_Form_ChoiceProvider_OrderInvoiceByIdService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->language->id, ($this->services['translator'] ?? $this->getTranslatorService()));
