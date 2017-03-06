<?php

/**
 * Copyright (C) 2014 - 2017 Addison Électronique Inc - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary  and confidential
 * Written by : Yanick Lafontaine <ylafontaine@addison-electronique.com>
 * Last edit : 17-02-06 13:27
 */
class core
{

    /**
     * Return needed image

     *
*@param $working
     * @param $img
     *
*@return string
     */
    public static function working($working, $img)
    {
        if (is_null($img) || empty($img)) {
            return 'bouton-empty.jpg';
        }

        switch ($working) {
            case 0:
                return 'bouton-off.jpg';
                break;
            case 1:
                return 'bouton-on.jpg';
                break;
            default :
                return 'bouton-off.jpg';
                break;

        }
    }

    /**
     * Return needed image
     *
     * @param $working
     *
     * @return string
     */
    public static function workingAdmin($working)
    {

        $return = '<span class="label label-danger">En congé</span>';
        switch ($working) {
            case 0:
                $return = '<span class="label label-danger">En congé</span>';
                break;
            case 1:
                $return = '<span class="label label-success">En service</span>';
                break;

        }

        return $return;
    }

    /**
     * Return image needed
     *
     * @param $img
     *
     * @return string
     */
    public static function baseImg($img)
    {
        if (!is_null($img) && !empty($img)) {
            $return = 'small_' . $img;
        }
        else {
            $return = 'recruting.png';
        }

        return $return;
    }

    /**
     * Return needed image
     *
     * @param $img
     *
     * @return string
     */
    public static function img($img)
    {
        if (!is_null($img) && !empty($img)) {
            $return = 'big_' . $img;
        }
        else {
            $return = 'no_image.png';
        }

        return $return;
    }

    /**
     * Return profile link
     *
     * @param $id
     * @param $img
     *
     * @return string
     */
    public static function profile($id, $img)
    {
        if (!is_null($img) && !empty($img)) {
            $return = 'profile.php?girl=' . $id;
        }
        else {
            $return = 'recrutement.php';
        }

        return $return;
    }

    /**
     * Affiche des informations lisibles pour une variable.
     *
     * @param mixed $array - L'expression à afficher.
     */
    public static function print_r2($array)
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

    /**
     * Simple number format
     *
     * @param     $float     - Number
     * @param int $precision - Precusion
     *
     * @return string
     */
    public static function nf($float, $precision = 2)
    {
        return number_format(round($float, $precision, PHP_ROUND_HALF_EVEN), $precision, '.', ' ');
    }

    /**
     * Vérifie si l'utilisateur est authentifié
     */
    public static function IdentityVerification()
    {
        global $_DB;

        //Aucune variable de session user
        if (!isset($_SESSION['user'])) {
            header('Location: ' . self::rootpath() . '/manage/index.php');
            exit;
        }

        //Variable de session user
        else {
            $login = $_DB->query("SELECT `password_hash` FROM `account` WHERE username = '" . strtoupper($_SESSION['user']['username']) . "'")->fetch_assoc();

            //Validate password hash
            if (!$login['password_hash'] == $_SESSION['user']['password']) {
                header('Location: ' . self::rootpath() . '/manage/index.php');
                exit;
            }
        }

        return;
    }

    /**
     * Retourne l'url de base du site web.
     *
     * @return string
     */
    public static function rootpath()
    {
        return self::getHttpProtocol() . $_SERVER['HTTP_HOST'];
    }

    /**
     * Retourne le protocol utilisé.
     *
     * @return string
     */
    public static function getHttpProtocol()
    {
        return (isset($_SERVER['HTTPS']) &&
            ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
            $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
            ? $protocol = 'https://' : $protocol = 'http://';
    }


    /**
     * Generate / Get CSRF Token
     *
     * @param      $module   - Module name
     * @param bool $generate - Mode

     *
*@return mixed
     */
    public static function csrf($module, $generate = false)
    {
        if ($generate) {
            $_SESSION[ 'csrf_' . $module ] = strtoupper(uniqid(sha1($module)));
        }
        else {
            return $_SESSION[ 'csrf_' . $module ];
        }
    }

    /**
     * Set message to display.
     *
     * @param $message - Message
     * @param $type    - Message type
     */
    public static function setMessage($message, $type)
    {
        $msg = null;
        switch ($type) {
            case 'success' :
                $msg = '<div class="alert alert-success">
                          <i class="fa fa-check-circle fa-fw"></i> ' . $message . '
                        </div>';
                break;

            case 'info' :
                $msg = '<div class="alert alert-info">
                          <i class="fa fa-info-circle fa-fw"></i> ' . $message . '
                        </div>';
                break;

            case 'warning' :
                $msg = '<div class="alert alert-warning">
                         <i class="fa fa-pause-circle fa-fw"></i> ' . $message . '
                        </div>';
                break;

            case 'danger' :
                $msg = '<div class="alert alert-danger">
                          <i class="fa fa-times-circle fa-fw"></i> ' . $message . '
                        </div>';
                break;

        }

        $_SESSION['DISPLAY_MSG'] = $msg;
    }

    /**
     * Display message
     */
    public static function getMessage()
    {
        echo isset($_SESSION['DISPLAY_MSG']) ? $_SESSION['DISPLAY_MSG'] : null;
        unset($_SESSION['DISPLAY_MSG']);
    }
}
