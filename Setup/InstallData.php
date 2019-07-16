<?php
namespace OpenSubscriptions\OpenSubscriptionsSubDefault\Setup;

class InstallData extends \OpenSubscriptions\OpenSubscriptions\Setup\InstallAttributesAbstract
{
    public function getNewAttributeSetName(): string
    {
        return 'Open Subscriptions - Default';
    }

    public function getNewProductsAttributes(): array
    {
        return [
            'open_sub_default_notes' => [
                'type' => 'text',
                'label' => 'Notes for customer',
                'input' => 'textarea',
                'wysiwyg_enabled' => true,
                'is_html_allowed_on_front' => true,
            ],
        ];
    }
}