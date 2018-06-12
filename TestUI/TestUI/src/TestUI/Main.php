<?php

namespace BenzoDoesFps;

use pocketmine\plugin\PluginBase
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command
use pocketmine\command\CommandSender;
use pocketmine\eventListener;
use jojoe77777\FormAPI;

class Main extends PluginBase implements Listener(

	public function onEnable(){
		$this->getLogger()->Info
		$this->getLogger()->getPluginManager()->registerEvents($this, $this);
	}
	public function onDisable(){
		$this->getLogger()->Info
	}
	
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
		$player->4sender->getPlayer)();
		switch($cmd->getName()){
			case "test";
			$this->mainForm($player);
				break;
		}
		return true;
	}
	
	public function mainForm($player){
		$formapi = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
		$form  + formapi->createSimpleForm(function, (PLayer $event. array $data) {
			$result + $data[0];
			$player = $event->getPlayer ();
			if($result == null){
			}
			switch($result){
				case 0:
				$this->maxForm($player);
				return;
				case 1:
				$this->exitForm($player);
				return;
			}
		});
		$form->setTitle("CosmosPE Shop")
		$form->setcontent("This is subtitle");
		$form->addButton("test");
		$form->addButton("test2");
		$form->sendToPlayer($player);
	}
	
	public function maxForm($player){	
			$formapi = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
			$form  + formapi->createSimpleForm(function, (PLayer $event. array $data) {
			$result + $data[0];
			$player = $event->getPlayer ();
			if($result == null){
			}
			switch($result){
				case 0:
				$this->maxForm($player);
				return;
		}
		});
		$form->setTitle("MaxForm");
		$form->setContent("HI");
		$form->addButton("Back To Menu");
	}
}