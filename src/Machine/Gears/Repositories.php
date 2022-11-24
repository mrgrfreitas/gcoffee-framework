<?php

namespace Machine\Gears;

use Illuminate\Support\Arr;

class Repositories
{

    /**
     * All the configuration items.
     *
     * @var array
     */
    protected $items = [];


    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    /**
     * @param $key
     * @param $default
     * @return void|null
     */
    public function get($key, $default)
    {
        $key = explode('.', $key);

        $configFile = root_path() . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . $key[0].'.php';
        array_shift($key);

        if (file_exists($configFile)){
            /**
             * require the file in config directory
             */
            $required = require $configFile;

            //get the array value in this file
            $array_data = $required[$key[0]];
            array_shift($key);

            // checks if the array is empty after removing the first value in the array above
            if (!empty($key)){
                foreach ($key as $value){
                    $array_data = $array_data[$value];
                    array_shift($key);
                }
            }

            return $array_data;

        }else{
            return null;
        }

    }

    public function set($key, $value = null)
    {
        $keys = is_array($key) ? $key : [$key => $value];
        foreach ($keys as $key => $value) {
            Arr::set($this->items, $key, $value);
        }
    }


}