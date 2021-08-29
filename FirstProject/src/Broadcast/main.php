<?php

namespace Broadcast;
use pocketmine\plugin\PluginBase;
class main extends PluginBase{

    public function onEnable(){
        $this->getLogger()->info("Broadcast Plugin has been successfully enabled! GoodJob! Keep going");
        $this->getServer()->getPluginManager()->registerEvents(new Broadcast(), $this);
    }

    public function onLoad(){
        $this->getLogger()->info("Plugin is loading!");
    }

    public function onDisable(){
        $this->getLogger()->info("Plugin has disabled successfully!");
    }
}