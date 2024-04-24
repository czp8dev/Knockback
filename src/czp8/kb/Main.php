<?php

namespace czp8\kb;


use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\Listener;

class main extends PluginBase implements Listener{

	public function onEnable() : void {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);

	}

	public function onDamage(EntityDamageByEntityEvent $event) {
		if ($event->getEntity() instanceof Player) {
			$event->setKnockBack(0.4); //put ur value 
		}
	}
}