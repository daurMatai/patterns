<?php
namespace First;

abstract class Lesson
{
    private $duration;

    private $costStrategy;

    /**
     * Lesson constructor.
     *
     * Объекты Lesson работают только с типом CostStrategy, а не с конкретной реализацией,
     * поэтому мы в любое время можем добавить новые алгоритмы расчета стоимости,
     * создавая подклассы на основе CostStrategy. При этом не понадобится вносить вообще
     * никаких изменений в классы Lesson
     *
     * @param int $duration Продолжительность
     * @param CostStrategy $strategy Способ оплаты
     */
    public function __construct($duration, CostStrategy $strategy)
    {
        $this->duration = $duration;
        $this->costStrategy = $strategy;
    }

    /**
     * @return mixed
     */
    public function cost()
    {
        return $this->costStrategy->cost($this);
    }

    /**
     * @return mixed
     */
    public function chargeType()
    {
        return $this->costStrategy->chargeType();
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }
}