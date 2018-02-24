<?PHP

class Teamspeak_Connection
{
    private $Socket = null;
    private $Address = null;
    private $Port = 10011;
    private $Timeout = 2; //Seconds

    public function __construct($Address, $Port = 10011)
    {
        $this->Address = $Address;
        $this->Port = $Port;
    }

    public function Connect()
    {
        $errnum = 0;
        $errstr = null;

        $Socket = @fsockopen($this->Address, $this->Port, $errnum, $errstr, $this->Timeout);

        if($Socket === false)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public function SetTimeout($Timeout)
    {
        $this->Timeout = $Timeout;
    }
}

/*
 *                         ts3admin.class.php
 *                         ------------------   
 *   copyright            : (C) 2018 Stefan Zehnpfennig 
 *   version              : 2.0.0.0
 *   website              : http://ts3admin.info
 *  
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *  
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *  
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
/* 
 * @file
 * The ts3admin.class is a powerful api for communication with Teamspeak 3 Servers from your website! Your creativity knows no bounds!
 * 
 * @author      Stefan Zehnpfennig
 * @copyright   Copyright (c) 2018, Stefan Zehnpfennig
 * @version     2.0.0.0
 * @package     ts3admin
 *
 */

?>