<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
// +----------------------------------------------------------------------+
// | PHP Version 4                                                        |
// +----------------------------------------------------------------------+
// | Copyright (c) 1997-2002 The PHP Group                                |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the PHP license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available at through the world-wide-web at                           |
// | http://www.php.net/license/2_02.txt.                                 |
// | If you did not receive a copy of the PHP license and are unable to   |
// | obtain it through the world-wide-web, please send a note to          |
// | license@php.net so we can mail you a copy immediately.               |
// +----------------------------------------------------------------------+
// | Authors:   Carsten Lucke <luckec@tool-garage.de>                     |
// |            Mark Wiesemann <wiesemann@php.net>                        |
// +----------------------------------------------------------------------+
//
//    $Id$

/**
 * Filter that only accepts official holidays in the Saarland.
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Carsten Lucke <luckec@tool-garage.de>
 * @author   Mark Wiesemann <wiesemann@php.net>
 * @subpackage  Filter
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Date_Holidays
 */
class Date_Holidays_Filter_Germany_Saarland extends Date_Holidays_Filter_Whitelist
{
    /**
     * Constructor.
     */
    function __construct() 
    {
        parent::__construct(array('newYearsDay',
                                  'goodFriday',
                                  'easterMonday',
                                  'dayOfWork',
                                  'ascensionDay',
                                  'whitMonday',
                                  'corpusChristi',
                                  'mariaAscension',
                                  'germanUnificationDay',
                                  'allSaintsDay',
                                  'xmasDay',
                                  'boxingDay'));
    }
    
    /**
     * Constructor.
     * 
     * Only accepts official holidays in the Saarland.
     */
    function Date_Holidays_Filter_Germany_Saarland()
    {
        $this->__construct();
    }
}
?>
