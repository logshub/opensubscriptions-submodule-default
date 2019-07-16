<?php
namespace OpenSubscriptions\OpenSubscriptionsSubDefault\Model;

use OpenSubscriptions\OpenSubscriptions\Model\SubmoduleConnectionInterface;

class Connection implements SubmoduleConnectionInterface
{
    public function getSettingsDefinitions(): array
    {
        return [];
    }
}
