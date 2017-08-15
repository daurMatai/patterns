<?php

class WeatherData implements Subject
{
    private $observers;
    private $temperature;
    private $humidity;
    private $pressure;

    public function __construct()
    {
        $this->observers = [];
    }

    public function registerObserver(Observer $o)
    {
        $this->observers[$o->id];
    }

    public function removeObserver(Observer $o)
    {
        if (array_key_exists($o->id, $this->observers)) {
            unset($this->observers[$o->id]);
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    /**
     * Так сделано как мне кажется чтобы, все кто реализует интерфейс Subject
     * могли по своему делать отправку. А notifyObservers делаеть только одно
     * и для всех он одинаков
     */
    public function measurementsChange()
    {
        $this->notifyObservers();
    }

    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChange();
    }
}