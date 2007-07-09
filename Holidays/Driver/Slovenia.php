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
// | Authors:   Anders Karlsson <anders.x.karlsson@tdcsong.se>            |
// | Authors:   Carsten Lucke <luckec@php.net>                            |
// +----------------------------------------------------------------------+
//
//    $Id$

require_once 'Date/Holidays/Driver/Christian.php';

/**
 * Driver class that calculates Slovenian holidays
 *
 * @category Date
 * @package  Date_Holidays
 * @author   Jakob Munih <jakob.munih@obala.si>
 * @subpackage  Driver
 * @license  http://www.php.net/license/3_01.txt PHP License 3.0.1
 * @version  $Id$
 * @link     http://www.uvi.si/slo/slovenija/kratka-predstavitev/prazniki/
 */
class Date_Holidays_Driver_Slovenia extends Date_Holidays_Driver
{
    /**
     * Constructor
     *
     * Use the Date_Holidays::factory() method to construct an object of 
     * a certain driver
     *
     * @access   protected
     */
    function Date_Holidays_Driver_Slovenia()
    {
    }

    /**
     * Build the internal arrays that contain data about the calculated holidays
     *
     * @access   protected
     * @return   boolean true on success, otherwise a PEAR_ErrorStack object
     * @throws   object PEAR_ErrorStack
     */
    function _buildHolidays()
    {
        /**
         * New Year's Day
         */
        $this->_addHoliday('novoleto1', $this->_year . '-01-01', 'Novo leto');
        $this->_addHoliday('novoleto2', $this->_year . '-01-02', 'Novo leto');

        /**
         * Prešernov dan
         */
        $this->_addHoliday('preseren', 
                           $this->_year . '-02-08',
                           'Prešernov dan, slovenski kulturni praznik');

        /**
         * Dan upora proti okupatorju
         */
        $this->_addHoliday('okupator', 
                           $this->_year . '-04-27',
                           'Dan upora proti okupatorju');

        /**
         * Praznik dela
         */
        $this->_addHoliday('delo1', $this->_year . '-05-01', 'Praznik dela');
        $this->_addHoliday('delo2', $this->_year . '-05-02', 'Praznik dela');

        /**
         * Dan državnosti
         */
        $this->_addHoliday('drzavnost', $this->_year . '-06-25', 'Dan državnosti');

        /**
         * Easter Sunday
         */
        $easter = Date_Holidays_Driver_Christian::calcEaster($this->_year);
        $this->_addHoliday('vnoc', $easter, 'Binkoštna nedelja - binkošti');

        /**
         * Easter Monday
         */
        $easterMon = clone $easter;
        $easterMon->day++;
        $this->_addHoliday('vnocpon', $easterMon, 'Velikonočni ponedeljek');

        /**
         * Marijino vnebovzetje
         */
        $this->_addHoliday('marija', 
                           $this->_year . '-08-15',
                           'Marijino vnebovzetje');

        /**
         * Združitev prekmurskih Slovencev
         */
        $this->_addHoliday('prekmurski', 
                           $this->_year . '-08-17',
                           'Združitev prekmurskih Slovencev z matičnim narodom');

        /**
         * Združitev prekmurskih Slovencev
         */
        $this->_addHoliday('marija', 
                           $this->_year . '-09-15',
                           'Vrnitev Primorske k matični domovini');

        /**
         * Dan reformacije
         */
        $this->_addHoliday('reformacija', 
                           $this->_year . '-10-31',
                           'Dan reformacije');

        /**
         * Dan spomina na mrtve
         */
        $this->_addHoliday('danmrtvih', 
                           $this->_year . '-11-01',
                           'Dan spomina na mrtve');

        /**
         * Dan spomina na mrtve
         */
        $this->_addHoliday('danmrtvih', 
                           $this->_year . '-11-23',
                           'Dan Rudolfa Maistra');

        /**
         * Christmas day
         */
        $this->_addHoliday('xmasDay', $this->_year . '-12-25', 'Božič');
        
        /**
         * Dan samostojnosti in enotnosti
         */
        $this->_addHoliday('samostijnosti', 
                           $this->_year . '-12-26',
                           'Dan samostojnosti in enotnosti');

        if (Date_Holidays::errorsOccurred()) {
            return Date_Holidays::getErrorStack();
        }
        return true;
    }
  
    /**
     * Method that returns an array containing the ISO3166 codes that may possibly 
     * identify a driver.
     * 
     * @static
     * @access public
     * @return array possible ISO3166 codes
     */
    function getISO3166Codes()
    {
        return array('si');
    }
}
?>
