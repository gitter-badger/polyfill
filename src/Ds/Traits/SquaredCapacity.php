<?php
namespace Ds\Traits;

/**
 * SquaredCapacity
 *
 * @package Ds\Traits
 */
trait SquaredCapacity
{
    use Capacity;

    /**
     * Square
     *
     * @param int $capacity
     *
     * @return int
     */
    private function square(int $capacity): int
    {
        return pow(2, ceil(log($capacity, 2)));
    }

    /**
     * Ensures that enough memory is allocated for a specified capacity. This
     * potentially reduces the number of reallocations as the size increases.
     *
     * @param int $capacity The number of values for which capacity should be
     *                      allocated. Capacity will stay the same if this value
     *                      is less than or equal to the current capacity.
     */
    public function allocate(int $capacity)
    {
        $this->capacity = max($this->square($capacity), $this->capacity);
    }

    /**
     * Increase Capacity
     */
    protected function increaseCapacity()
    {
        $this->capacity = $this->square(max(count($this), $this->capacity + 1));
    }
}
