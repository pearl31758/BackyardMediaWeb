<?php
/**
 * Backyard Media 
 * Filename: init.php
 * 
 * @author Chatsuda Rattarasan
 * 
 * Credits
 * 
 * Created for the Everything About Backyard Media Sites
 * 
 * Date created: June 13 2018 
 * Copyright (c) 2018 Backyard Media Company & XN TEAM (Chatsuda Rattarasan, Ngoc Tran, Haocheng Li)
 *
 * For the full copyright and license information, please view the LICENSE
 */
use php\Sessions\PersistentSessionHandler;

require_once __DIR__ . '/Psr4AutoloaderClass.php';
require_once __DIR__ . '/connectDB.php';

$loader = new Psr4AutoloaderClass();
$loader->register();
$loader->addNamespace('php', __DIR__ . '/../../php');

$handler = new PersistentSessionHandler ($db);
session_set_save_handler($handler);
session_start();
$_SESSION['active'] = time();

?>