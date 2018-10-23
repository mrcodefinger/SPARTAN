<?php
/**
 * Created by PhpStorm.
 * User: Philipnormal
 * Date: 17.10.18
 * Time: 20:15
 */

/**
 * Class ParameterBag
 *
 * The ParameterBag holds all of our $_GET or $_POST request parameters in form of an array.
 */

class ParameterBag
{
    /**
     * This array holds the elements of our $_POST, $_GET or $_Files array.
     *
     * @var array
     */
    private $elements;

    /**
     * ParameterBag constructor.
     *
     * @param array $elements
     */
    public function __construct(array $elements)
    {
        $this->elements = $elements;
    }

    /**
     * @param string $key
     *
     * @return mixed
     *
     * @throws \UnexpectedValueException
     */
    public function get($key)
    {
        if(!$this->hasKey($key))
        {
            return false;
        }

        return $this->elements[$key];
    }

    /**
     * @param string $key
     *
     * @return bool
     */
    public function hasKey($key)
    {
        return isset($this->elements[$key]);
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->elements);
    }
}
