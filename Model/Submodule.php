<?php
namespace Logshub\OpenSubscriptionsSubDefault\Model;

use Logshub\OpenSubscriptions\Model\SubmoduleInterface;
use Logshub\OpenSubscriptions\Model\SubmoduleAbstract;
use Logshub\OpenSubscriptions\Model\CommandInterface;
use Logshub\OpenSubscriptions\Model\Connection as OaConnection;
use Logshub\OpenSubscriptions\Model\SubmoduleConnectionInterface;

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
        return \Logshub\OpenSubscriptionsSubDefault\Block\Adminhtml\Help::class;
    }
}
