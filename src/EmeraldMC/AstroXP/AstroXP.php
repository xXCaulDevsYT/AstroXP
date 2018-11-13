<?php
namespace EmeraldMC\AstroXP;
use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\entity\ThrownExpBottle;
use pocketmine\Level;
use pocketmine\level\Explosion;
use pocketmine\level\Position;
use pocketmine\event\Listener;
use pocketmine\event\entity\ProjectileHitEvent;
class AstroXP extends PluginBase implements Listener {
	
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(TextFormat::GREEN."[Addon] AstroXP Enabled!");
	}
	public function onDisable() {
		$this->getLogger()->info(TextFormat::RED."[Addon] AstroXP Disabled!");
	}
	public function onProjectileHit(ProjectileHitEvent $event) {
		$entity = $event->getEntity();
		if ($entity instanceof ThrownExpBottle) {
			$theX = $entity->getX();
			$theY = $entity->getY();
			$theZ = $entity->getZ();
			$level = $entity->getLevel();
			$thePosition = new Position($theX, $theY, $theZ, $level);
			$theExplosion = new Explosion($thePosition, 5, NULL);
			$theExplosion->explodeB();
            $impact = 1;
            $damage = 1;
            
    }
    }
}
