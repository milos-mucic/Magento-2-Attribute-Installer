<?php
namespace Younify\AttributeInstaller\Setup;

use Magento\Catalog\Model\Product;
use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    private $eavSetupFactory;

    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        $eavSetup->addAttribute(
            Product::ENTITY,
            'is_featured',
            [
                'type' => 'int',
                'backend' => '',
                'frontend' => '',
                'label' => 'Featured',
                'input' => 'boolean',
                'class' => '',
                'source' => '',
                'global' => ScopedAttributeInterface::SCOPE_STORE,
                'visible' => true,
                'required' => false,
                'user_defined' => true,
                'default' => '',
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'used_for_promo_rules' => true,
                'visible_on_front' => false,
                'used_in_product_listing' => false,
                'unique' => false,
                'apply_to' => ''
            ]
        );
        $eavSetup->addAttribute(
            Product::ENTITY,
            'product_label',
            [
                'type' => 'varchar',
                'backend' => '',
                'frontend' => '',
                'label' => 'Label',
                'input' => 'text',
                'class' => '',
                'source' => '',
                'global' => ScopedAttributeInterface::SCOPE_STORE,
                'visible' => true,
                'required' => false,
                'user_defined' => true,
                'default' => '',
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'used_for_promo_rules' => false,
                'filterable_in_grid' => true,
                'visible_on_front' => true,
                'used_in_product_listing' => true,
                'used_for_sort_by' => true,
                'unique' => false,
                'apply_to' => ''
            ]
        );
        $eavSetup->addAttribute(
            Product::ENTITY,
            'delivery_time',
            [
                'type' => 'varchar',
                'backend' => '',
                'frontend' => '',
                'label' => 'Delivery Time',
                'input' => 'text',
                'class' => '',
                'source' => '',
                'global' => ScopedAttributeInterface::SCOPE_STORE,
                'visible' => true,
                'required' => false,
                'user_defined' => true,
                'default' => '',
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'used_for_promo_rules' => false,
                'filterable_in_grid' => false,
                'visible_on_front' => false,
                'used_in_product_listing' => false,
                'used_for_sort_by' => false,
                'unique' => false,
                'apply_to' => ''
            ]
        );
        $eavSetup->addAttribute(
            Product::ENTITY,
            'brand',
            [
                'type' => 'int',
                'backend' => '',
                'frontend' => '',
                'label' => 'Brand',
                'input' => 'select',
                'class' => '',
                'source' => '',
                'global' => ScopedAttributeInterface::SCOPE_STORE,
                'visible' => true,
                'required' => false,
                'user_defined' => true,
                'default' => '',
                'searchable' => true,
                'filterable' => true,
                'comparable' => true,
                'visible_in_advanced_search' => true,
                'used_for_promo_rules' => false,
                'filterable_in_grid' => true,
                'filterable_in_search' => true,
                'html_allowed_on_front' => true,
                'visible_on_front' => true,
                'used_in_product_listing' => false,
                'used_for_sort_by' => false,
                'unique' => false,
                'apply_to' => 'simple,grouped,bundle,virtual,configurable'
            ]
        );
    }
}
