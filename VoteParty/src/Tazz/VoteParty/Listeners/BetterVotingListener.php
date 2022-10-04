<?php

#Author: Tazz

namespace Tazz\VoteParty\Listeners;

use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\utils\TextFormat;
use twisted\bettervoting\event\PlayerVoteEvent;
use Tazz\VoteParty\Main;
class BetterVotingListener implements Listener{

    private $plugin;


    public function __construct(Main $plugin)
    {
        $this->plugin = $plugin;
    }

    public function PlayerVoteEvent(PlayerVoteEvent $event) {
        $this->plugin->PlayerVoted();
    }
}