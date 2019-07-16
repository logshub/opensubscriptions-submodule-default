<?php
namespace OpenSubscriptions\OpenSubscriptionsSubDefault\Model;

use OpenSubscriptions\OpenSubscriptions\Model\SubmoduleInterface;
use OpenSubscriptions\OpenSubscriptions\Model\SubmoduleAbstract;
use OpenSubscriptions\OpenSubscriptions\Model\CommandInterface;
use OpenSubscriptions\OpenSubscriptions\Model\Connection as OaConnection;
use OpenSubscriptions\OpenSubscriptions\Model\SubmoduleConnectionInterface;

class Submodule extends SubmoduleAbstract implements SubmoduleInterface
{
    const ID = 'OpenSubscriptionsSubDefault';
    
    public function getId(): string
    {
        return self::ID;
    }
    
    public function getConnection(OaConnection $connection): SubmoduleConnectionInterface
    {
        return new Connection($connection);
    }

    /**
     * Returns array of CommandAdditionalInterface obejcts
     * @return array
     */
    public function getAdditionalCommands(): array
    {
        return [];
    }

    public function getHelpBlock(): string
    {
        return \OpenSubscriptions\OpenSubscriptionsSubDefault\Block\Adminhtml\Help::class;
    }
}
