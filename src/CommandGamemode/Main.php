<?php
namespace CommandGamemode;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Command\Command;
use pocketmine\Command\CommandSender;
use pocketmine\entity\Effect;
class Main extends PluginBase{
	
	public function onEnable(){
		$this->getServer()->getLogger()->info("CommandGamemode enabled!");
	}
	
	public function onDisable(){
		$this->getServer()->getLogger()->info("CommandGamemode disabled!");
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
		
		switch($cmd->getName()){
			 
      case "gms":
      if($sender->hasPermission("gms.command")} {         
         $sender->setGamemode(0);
         $sender->sendMessage("§aBạn đã đc chuyễn thành sinh tồn");
         if(!$sender->hasPermission("gms.command")} {
            $sender->sendMessage("§cBạn không có quyền để xài command");
         }
      break;
      			 
      case "gmc":
      if($sender->hasPermission("gmc.command")} {         
         $sender->setGamemode(1);
         $sender->sendMessage("§aBạn đã đc chuyễn thành sáng tạo");
         if(!$sender->hasPermission("gmc.command")} {
            $sender->sendMessage("§cBạn không có quyền để xài command");
         }
      break;
      			 
      case "gmt":
      if($sender->hasPermission("gmt.command")} {         
         $sender->setGamemode(0);
         $sender->sendMessage("§aBạn đã đc chuyễn thành theo dõi");
         if(!$sender->hasPermission("gmt.command")} {
            $sender->sendMessage("§cBạn không có quyền để xài command");
         }
      break;
    }
    return true;
  }
}
