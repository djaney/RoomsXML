<?php
/**
 * Created by PhpStorm.
 * User: salmah
 * Date: 2/9/16
 * Time: 5:57 PM
 */

namespace SalmaAbdelhady\RoomsXML\Model;


use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Booking
 * @package SalmaAbdelhady\RoomsXML\Model
 * @XmlRoot("Booking")
 */
class Booking
{

    /**
     * @var string
     * @Type(name="string")
     * @SerializedName("Id")
     */
    protected $id;

    /**
     * @var \DateTime booking creation date
     * @Type(name="DateTime<'Y-m-d'>")
     * @SerializedName("CreationDate")
     */
    protected $CreationDate;

    /**
     * @var HotelBooking hotel booking details
     * @SerializedName("HotelBooking")
     * @XmlList(inline=true,entry="HotelBooking")
     * @XmlElement(cdata=false)
     * @Type(name="array<SalmaAbdelhady\RoomsXML\Model\HotelBooking>")
     * @SerializedName("HotelBooking")
     */
    protected $HotelBooking;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Booking
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }

    /**
     * @param \DateTime $CreationDate
     * @return Booking
     */
    public function setCreationDate($CreationDate)
    {
        $this->CreationDate = $CreationDate;
        return $this;
    }

    /**
     * @return HotelBooking
     */
    public function getHotelBooking()
    {
        return $this->HotelBooking;
    }

    /**
     * @param HotelBooking $HotelBooking
     * @return Booking
     */
    public function setHotelBooking($HotelBooking)
    {
        $this->HotelBooking = $HotelBooking;
        return $this;
    }


}