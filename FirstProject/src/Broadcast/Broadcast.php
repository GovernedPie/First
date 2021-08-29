<?php

namespace Broadcast;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class Broadcast implements Listener{
    public function onJoin(PlayerJoinEvent $event){
        $player = $event->getPlayer();
        $player->sendMessage("         §4GovHCF         \n         §fWelcome!");
    }
}