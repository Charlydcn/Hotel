<?php

class Hotel
{
    private string $_name;
    private string $_addressName;
    private string $_zipCode;
    private array $_rooms;
    private array $_bookings;

    public function __construct(string $_name, string $_addressName, string $_zipCode)
    {
        $this->_name = $_name;
        $this->_addressName = $_addressName;
        $this->_zipCode = $_zipCode;
        $this->_rooms = [];
        $this->_bookings = [];       
    }

    //***************************************************** MÉTHODES *****************************************************
    //******************************************* ACCESSEURS (getters) *******************************************

    public function getName() // A TESTER
    {
        return $this->_name;
    }

    public function getAddressName() // A TESTER
    {
        return $this->_addressName;
    }

    public function getZipCode() // A TESTER
    {
        return $this->_zipCode;
    }

    public function getRooms() // A TESTER
    {
        $result = "<ul>";
        foreach ($this->_rooms as $room) {
            $result .= "<li>" . $room . "</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function getNbRooms() // A TESTER
    {
        return count($this->_rooms);
    }

    public function getBookings() // A TESTER
    {
        if (count($this->_bookings) > 1)
        {
            $result = "<ul>";
            foreach ($this->_bookings as $booking) {
                $result .= "<li>" . $booking . "</li>";
            }
            $result .= "</ul>";
            return $result;
        } else {
            return "Aucune réservation !";
        }
    }

    public function getNbBookings() // A TESTER
    {
        return count($this->_bookings);
    }

    public function getInfos()
    {
        $nbAvailableRooms = $this->getNbRooms() - $this->getNbBookings();
        return "<h2>" . $this->_name . "</h2><br>"
        . "<p>" . $this->_addressName . " " . $this->_zipCode . "<br>"
        . "Nombre de chambres : " . $this->getNbRooms() . "<br>"
        . "Nombre de chambres réservées : " . $this->getNbBookings() . "<br>"
        . "Nombre de chambres disponibles : " . $nbAvailableRooms;
    }

    //************************************************************************************************************
    //******************************************* MUTATEURS (setters) *******************************************

    public function setName($name) // A TESTER
    {
        $this->_name = $name;
    }

    public function setAddressName($addressName) // A TESTER
    {
        $this->_addressName = $addressName;
    }

    public function setZipCode($zipCode) // A TESTER
    {
        $this->_zipCode = $zipCode;
    }

    public function setRooms(Room $room) // A TESTER
    {
        $this->_rooms[] = $room;
    }

    public function setBookings(Booking $booking) // A TESTER
    {
        $this->_bookings[] = $booking;
    }

    //************************************************************************************************************

    public function __toString()
    {
        return $this->_name . "<br>"
        . $this->_addressName . " " . $this->_zipCode . "<br>";
    }
    
}

?>