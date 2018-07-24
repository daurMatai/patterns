<?php

namespace Patterns\Singleton\First;


/**
 * Class Preferences
 * @package Patterns\Singleton\First
 */
class Preferences
{
    /**
     * @var array
     */
    private $props = [];

    /**
     * @var Preferences Хранит экземпляр класса Preferences
     */
    private static $instance;

    /**
     * Preferences constructor.
     *
     * Метод является приватным чтобы извне небыло возможности содать
     * объект этого класса
     */
    private function __construct() { }

    /**
     * Возвращает объект Preferences
     *
     * Статический метод, возвращающии объект Preferences, если он уже хранится в свойстве
     * $instance. Если в нем нет ничего то он создается и сохраняется в свойтсве $instance
     *
     * @return Preferences
     */
    public static function getInstance(): self
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @param mixed $key
     * @param mixed $val
     */
    public function setProperty($key, $val)
    {
        $this->props[$key] = $val;
    }

    /**
     * @param mixed $key
     * @return mixed
     */
    public function getProperty($key)
    {
        return $this->props[$key];
    }
}