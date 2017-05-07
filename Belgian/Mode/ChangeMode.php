<?php 

/*
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/belgianphp/mode
 * @link        https://codeigniter.com/userguide3/general/reserved_names.html 
 * @copyright   2017 
 *
 * 
 */


namespace Belgian\Mode;


class ChangeMode
{
    /*
     * ----------------------------------------
     * File and Directory Modes
     * ----------------------------------------
     * Octal values should always be used
     */
    const FILE_READ_MODE  = 0644;
    const FILE_WRITE_MODE = 0666;
    const DIR_READ_MODE   = 0755;
    const DIR_WRITE_MODE  = 0755;


    /*
     * ----------------------------------------
     *  File Stream Modes
     * ----------------------------------------
     *  These modes are used when working with fopen()/popen()
     */
    const FOPEN_READ                          = 'rb';
    const FOPEN_READ_WRITE                    = 'r+b';
    const FOPEN_WRITE_CREATE_DESTRUCTIVE      = 'wb';  // truncates existing file data, use with care
    const FOPEN_READ_WRITE_CREATE_DESTRUCTIVE = 'w+b'; // truncates existing file data, use with care
    const FOPEN_WRITE_CREATE                  = 'ab';
    const FOPEN_READ_WRITE_CREATE             = 'a+b';
    const FOPEN_WRITE_CREATE_STRICT           = 'xb';
    const FOPEN_READ_WRITE_CREATE_STRICT      = 'x+b';
}    



