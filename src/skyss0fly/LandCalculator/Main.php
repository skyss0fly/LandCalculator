<?php
/* 
//         /$$                                     /$$$$$$   /$$$$$$  /$$          
          | $$                                    /$$$_  $$ /$$__  $$| $$          
  /$$$$$$$| $$   /$$ /$$   /$$  /$$$$$$$ /$$$$$$$| $$$$\ $$| $$  \__/| $$ /$$   /$$
 /$$_____/| $$  /$$/| $$  | $$ /$$_____//$$_____/| $$ $$ $$| $$$$    | $$| $$  | $$
|  $$$$$$ | $$$$$$/ | $$  | $$|  $$$$$$|  $$$$$$ | $$\ $$$$| $$_/    | $$| $$  | $$
 \____  $$| $$_  $$ | $$  | $$ \____  $$\____  $$| $$ \ $$$| $$      | $$| $$  | $$
 /$$$$$$$/| $$ \  $$|  $$$$$$$ /$$$$$$$//$$$$$$$/|  $$$$$$/| $$      | $$|  $$$$$$$
|_______/ |__/  \__/ \____  $$|_______/|_______/  \______/ |__/      |__/ \____  $$
                     /$$  | $$                                            /$$  | $$
                    |  $$$$$$/                                           |  $$$$$$/
                     \______/                                             \______/ 
@author: skyss0fly: https://github.com/skyss0fly
@repository: https://www.github.com/skyss0fly/AntiSpaces
@License: GPL 3.0


*/

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {



  public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        if (!$sender instanceof Player) {
            $this->getLogger()->warning("Please use this command in-game");
            return false;
        }

        $x = $sender->getPosition()->getX();
        $y = $sender->getPosition()->getY();
        $z = $sender->getPosition()->getZ();
        $coords = $x . $y . $z;

        switch ($command->getName()) {
            case "pos1":
                  
                  return $coords;

        }
             case "pos2":


        }

  }

          public function calculate(): int {

          }


}
