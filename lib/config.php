<?php

/**
 * Created by PhpStorm.
 * User: ylafontaine
 * Date: 2017-02-06
 * Time: 19:32
 */
class config
{

    /**
     * Get and return config value by config name
     *
     * @param $name - Config Name
     *
     * @return null
     */
    public static function get($name)
    {

        global $_DB;

        $value = $_DB->query("SELECT `value` FROM `config` WHERE  `name` = '" . $name . "'")->fetch_object()->value;

        if (isset($value) && !empty($value)) {
            return $value;
        }
        else {
            return null;
        }
    }

    /**
     * Set config value by config name
     *
     * @param $name  - Config Name
     * @param $value - Config Value
     *
     * @return bool
     */
    public static function set($name, $value)
    {

        global $_DB;

        if ($_DB->query("   UPDATE
                                `config`
                            SET
                                `value` = '" . $_DB->escape_string($value) . "'
                            WHERE
                                `name` = '" . $name . "'")
        ) {
            return true;
        }
        else {
            return false;
        }
    }

}