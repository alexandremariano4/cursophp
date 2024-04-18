<?php
require_once ('vendor/autoload.php');


use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverWait;
use Facebook\WebDriver\WebDriverElement;
use Facebook\WebDriver\WebDriverExpectedCondition;

$capabilities = DesiredCapabilities::chrome();
$capabilities->setCapability('chromeOptions', ['args'=> []]);


$driver = RemoteWebDriver::create("http://localhost:4444/",$capabilities);

$driver->get('https://caminhosdamoda.sebraemg.com.br');
$driver->manage()->window()->maximize();

$wait = new WebDriverWait($driver, 10);

/** @var WebDriverElement $botao_entrar */
$botao_entrar = $wait->until(
    WebDriverExpectedCondition::visibilityOfElementLocated(WebDriverBy::cssSelector('div[aria-label="Entrar"]'))
);
$botao_entrar->click();

$username = $wait->until(
    WebDriverExpectedCondition::visibilityOfElementLocated(WebDriverBy::id('username'))
);
$username->sendKeys('12345678911');

$password = $wait->until(
    WebDriverExpectedCondition::visibilityOfElementLocated(WebDriverBy::id('password'))
);
$password->sendKeys('passw');

sleep(1.5);

$driver->quit();