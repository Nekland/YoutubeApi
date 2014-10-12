<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model\Details;

use Nekland\YoutubeApi\Transformer\Model\Standard\Location;

class RecordingDetails
{
    /**
     * @var string
     */
    private $locationDescription;

    /**
     * @var Location
     */
    private $location;

    /**
     * @var \DateTime
     */
    private $recordingDate;

    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param Location $location
     * @return self
     */
    public function setLocation(Location $location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocationDescription()
    {
        return $this->locationDescription;
    }

    /**
     * @param string $locationDescription
     * @return self
     */
    public function setLocationDescription($locationDescription)
    {
        $this->locationDescription = $locationDescription;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRecordingDate()
    {
        return $this->recordingDate;
    }

    /**
     * @param \DateTime $recordingDate
     * @return self
     */
    public function setRecordingDate(\DateTime $recordingDate)
    {
        $this->recordingDate = $recordingDate;

        return $this;
    }
}
