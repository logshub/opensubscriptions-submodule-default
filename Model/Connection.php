<?php
namespace Logshub\OpenSubscriptionsSubDefault\Model;

use Logshub\OpenSubscriptions\Model\SubmoduleConnectionInterface;

class Connection implements SubmoduleConnectionInterface
{
    public function getSettingsDefinitions(): array
    {
        return [];
    }
}
