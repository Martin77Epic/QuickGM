<?php

namespace QuickGM;


use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\permission\Permission;
use pocketmine\plugin\PluginLogger;
use pocketmine\plugin\PluginDescription;


class QuickGM extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("enabled!");
    }
    public function onDisable()
    {
        $this->getLogger()->info("disabled!");
    }
    public function onCommand(CommandSender $sender, Command $command, $label, array $args)
    {
        switch ($command->getName()) {
            case "gmc":
                if ($sender->hasPermission(m77e.gmc)) {
                    $sender->sendMessage(TextFormat::GRAY . "Changed gamemode to creative!");
                    $sender->getServer()->getPlayer()->setGamemode(1);
                }
            case "gms":
                if ($sender->hasPermission(m77e.gms)) {
                    $sender->sendMessage(TextFormat::GRAY . "Changed gamemode to survival!");
                    $sender->getServer()->getPlayer()->setGamemode(0);
        }
            case "gmsp":
                if ($sender->hasPermission(m77e.gmsp)) {
                    $sender->sendMessage(TextFormat::GRAY . "Changed gamemode to spectater!");
                    $sender->getServer()->getPlayer()->setGamemode(2);
                }
            

                }

}