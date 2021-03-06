<?php

namespace SVC;

if ( !defined("ENABLE") || @ENABLE != true )
{
    header("HTTP/1.1 401 Unauthorized");
    exit;
}

class Config
{
    /**
     * Debugging state
     *
     * @var bool
     */
    public static $debug = true;

    /**
     * Location of the asset directory
     *
     * @var string
     */
    public static $assetDirectory = "assets\\";

    /**
     * Location and name of the database file (defaults to asset directory)
     *
     * @var string
     */
    public static $database = "svc.db";

    /**
     * Regexp sanitization filter, used in \SVC\System\Request
     *
     * @var string
     */
    public static $filter = "/[^A-Za-z0-9_]/";

    /**
     * Key to prevent prying eyes
     *
     * @var string
     */
    public static $key = "USA23";
}

