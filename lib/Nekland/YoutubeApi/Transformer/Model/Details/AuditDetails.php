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


class AuditDetails
{
    /**
     * @var bool
     */
    private $overallGoodStanding;

    /**
     * @var bool
     */
    private $communityGuidelinesGoodStanding;

    /**
     * @var bool
     */
    private $copyrightStrikesGoodStanding;

    /**
     * @var bool
     */
    private $contentIdClaimsGoodStanding;

    /**
     * @return boolean
     */
    public function isCommunityGuidelinesGoodStanding()
    {
        return $this->communityGuidelinesGoodStanding;
    }

    /**
     * @param boolean $communityGuidelinesGoodStanding
     * @return self
     */
    public function setCommunityGuidelinesGoodStanding($communityGuidelinesGoodStanding)
    {
        $this->communityGuidelinesGoodStanding = $communityGuidelinesGoodStanding;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isContentIdClaimsGoodStanding()
    {
        return $this->contentIdClaimsGoodStanding;
    }

    /**
     * @param boolean $contentIdClaimsGoodStanding
     * @return self
     */
    public function setContentIdClaimsGoodStanding($contentIdClaimsGoodStanding)
    {
        $this->contentIdClaimsGoodStanding = $contentIdClaimsGoodStanding;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isCopyrightStrikesGoodStanding()
    {
        return $this->copyrightStrikesGoodStanding;
    }

    /**
     * @param boolean $copyrightStrikesGoodStanding
     * @return self
     */
    public function setCopyrightStrikesGoodStanding($copyrightStrikesGoodStanding)
    {
        $this->copyrightStrikesGoodStanding = $copyrightStrikesGoodStanding;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isOverallGoodStanding()
    {
        return $this->overallGoodStanding;
    }

    /**
     * @param boolean $overallGoodStanding
     * @return self
     */
    public function setOverallGoodStanding($overallGoodStanding)
    {
        $this->overallGoodStanding = $overallGoodStanding;

        return $this;
    }
}
