<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model\BrandingSettings;


use Nekland\YoutubeApi\Transformer\Model\Standard\Url;

class Image
{
    /**
     * @var string
     */
    private $bannerImageUrl;

    /**
     * @var string
     */
    private $bannerMobileImageUrl;

    /**
     * @var Url
     */
    private $backgroundImageUrl;

    /**
     * @var Url
     */
    private $largeBrandedBannerImageImapScript;

    /**
     * @var Url
     */
    private $largeBrandedBannerImageUrl;

    /**
     * @var Url
     */
    private $smallBrandedBannerImageImapScript;

    /**
     * @var Url
     */
    private $smallBrandedBannerImageUrl;

    /**
     * @var string
     */
    private $watchIconImageUrl;

    /**
     * @var string
     */
    private $trackingImageUrl;

    /**
     * @var string
     */
    private $bannerTabletLowImageUrl;

    /**
     * @var string
     */
    private $bannerTabletImageUrl;

    /**
     * @var string
     */
    private $bannerTabletHdImageUrl;

    /**
     * @var string
     */
    private $bannerTabletExtraHdImageUrl;

    /**
     * @var string
     */
    private $bannerMobileLowImageUrl;

    /**
     * @var string
     */
    private $bannerMobileMediumHdImageUrl;

    /**
     * @var string
     */
    private $bannerMobileHdImageUrl;

    /**
     * @var string
     */
    private $bannerMobileExtraHdImageUrl;

    /**
     * @var string
     */
    private $bannerTvImageUrl;

    /**
     * @var string
     */
    private $bannerTvLowImageUrl;

    /**
     * @var string
     */
    private $bannerTvMediumImageUrl;

    /**
     * @var string
     */
    private $bannerTvHighImageUrl;

    /**
     * @var string
     */
    private $bannerExternalUrl;

    /**
     * @return Url
     */
    public function getBackgroundImageUrl()
    {
        return $this->backgroundImageUrl;
    }

    /**
     * @param Url $backgroundImageUrl
     * @return self
     */
    public function setBackgroundImageUrl(Url $backgroundImageUrl)
    {
        $this->backgroundImageUrl = $backgroundImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getBannerExternalUrl()
    {
        return $this->bannerExternalUrl;
    }

    /**
     * @param string $bannerExternalUrl
     * @return self
     */
    public function setBannerExternalUrl($bannerExternalUrl)
    {
        $this->bannerExternalUrl = $bannerExternalUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getBannerImageUrl()
    {
        return $this->bannerImageUrl;
    }

    /**
     * @param string $bannerImageUrl
     * @return self
     */
    public function setBannerImageUrl($bannerImageUrl)
    {
        $this->bannerImageUrl = $bannerImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getBannerMobileExtraHdImageUrl()
    {
        return $this->bannerMobileExtraHdImageUrl;
    }

    /**
     * @param string $bannerMobileExtraHdImageUrl
     * @return self
     */
    public function setBannerMobileExtraHdImageUrl($bannerMobileExtraHdImageUrl)
    {
        $this->bannerMobileExtraHdImageUrl = $bannerMobileExtraHdImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getBannerMobileHdImageUrl()
    {
        return $this->bannerMobileHdImageUrl;
    }

    /**
     * @param string $bannerMobileHdImageUrl
     * @return self
     */
    public function setBannerMobileHdImageUrl($bannerMobileHdImageUrl)
    {
        $this->bannerMobileHdImageUrl = $bannerMobileHdImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getBannerMobileImageUrl()
    {
        return $this->bannerMobileImageUrl;
    }

    /**
     * @param string $bannerMobileImageUrl
     * @return self
     */
    public function setBannerMobileImageUrl($bannerMobileImageUrl)
    {
        $this->bannerMobileImageUrl = $bannerMobileImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getBannerMobileLowImageUrl()
    {
        return $this->bannerMobileLowImageUrl;
    }

    /**
     * @param string $bannerMobileLowImageUrl
     * @return self
     */
    public function setBannerMobileLowImageUrl($bannerMobileLowImageUrl)
    {
        $this->bannerMobileLowImageUrl = $bannerMobileLowImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getBannerMobileMediumHdImageUrl()
    {
        return $this->bannerMobileMediumHdImageUrl;
    }

    /**
     * @param string $bannerMobileMediumHdImageUrl
     * @return self
     */
    public function setBannerMobileMediumHdImageUrl($bannerMobileMediumHdImageUrl)
    {
        $this->bannerMobileMediumHdImageUrl = $bannerMobileMediumHdImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getBannerTabletExtraHdImageUrl()
    {
        return $this->bannerTabletExtraHdImageUrl;
    }

    /**
     * @param string $bannerTabletExtraHdImageUrl
     * @return self
     */
    public function setBannerTabletExtraHdImageUrl($bannerTabletExtraHdImageUrl)
    {
        $this->bannerTabletExtraHdImageUrl = $bannerTabletExtraHdImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getBannerTabletHdImageUrl()
    {
        return $this->bannerTabletHdImageUrl;
    }

    /**
     * @param string $bannerTabletHdImageUrl
     * @return self
     */
    public function setBannerTabletHdImageUrl($bannerTabletHdImageUrl)
    {
        $this->bannerTabletHdImageUrl = $bannerTabletHdImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getBannerTabletImageUrl()
    {
        return $this->bannerTabletImageUrl;
    }

    /**
     * @param string $bannerTabletImageUrl
     * @return self
     */
    public function setBannerTabletImageUrl($bannerTabletImageUrl)
    {
        $this->bannerTabletImageUrl = $bannerTabletImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getBannerTabletLowImageUrl()
    {
        return $this->bannerTabletLowImageUrl;
    }

    /**
     * @param string $bannerTabletLowImageUrl
     * @return self
     */
    public function setBannerTabletLowImageUrl($bannerTabletLowImageUrl)
    {
        $this->bannerTabletLowImageUrl = $bannerTabletLowImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getBannerTvHighImageUrl()
    {
        return $this->bannerTvHighImageUrl;
    }

    /**
     * @param string $bannerTvHighImageUrl
     * @return self
     */
    public function setBannerTvHighImageUrl($bannerTvHighImageUrl)
    {
        $this->bannerTvHighImageUrl = $bannerTvHighImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getBannerTvImageUrl()
    {
        return $this->bannerTvImageUrl;
    }

    /**
     * @param string $bannerTvImageUrl
     * @return self
     */
    public function setBannerTvImageUrl($bannerTvImageUrl)
    {
        $this->bannerTvImageUrl = $bannerTvImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getBannerTvLowImageUrl()
    {
        return $this->bannerTvLowImageUrl;
    }

    /**
     * @param string $bannerTvLowImageUrl
     * @return self
     */
    public function setBannerTvLowImageUrl($bannerTvLowImageUrl)
    {
        $this->bannerTvLowImageUrl = $bannerTvLowImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getBannerTvMediumImageUrl()
    {
        return $this->bannerTvMediumImageUrl;
    }

    /**
     * @param string $bannerTvMediumImageUrl
     * @return self
     */
    public function setBannerTvMediumImageUrl($bannerTvMediumImageUrl)
    {
        $this->bannerTvMediumImageUrl = $bannerTvMediumImageUrl;

        return $this;
    }

    /**
     * @return Url
     */
    public function getLargeBrandedBannerImageImapScript()
    {
        return $this->largeBrandedBannerImageImapScript;
    }

    /**
     * @param Url $largeBrandedBannerImageImapScript
     * @return self
     */
    public function setLargeBrandedBannerImageImapScript(Url $largeBrandedBannerImageImapScript)
    {
        $this->largeBrandedBannerImageImapScript = $largeBrandedBannerImageImapScript;

        return $this;
    }

    /**
     * @return Url
     */
    public function getLargeBrandedBannerImageUrl()
    {
        return $this->largeBrandedBannerImageUrl;
    }

    /**
     * @param Url $largeBrandedBannerImageUrl
     * @return self
     */
    public function setLargeBrandedBannerImageUrl(Url $largeBrandedBannerImageUrl)
    {
        $this->largeBrandedBannerImageUrl = $largeBrandedBannerImageUrl;

        return $this;
    }

    /**
     * @return Url
     */
    public function getSmallBrandedBannerImageImapScript()
    {
        return $this->smallBrandedBannerImageImapScript;
    }

    /**
     * @param Url $smallBrandedBannerImageImapScript
     * @return self
     */
    public function setSmallBrandedBannerImageImapScript(Url $smallBrandedBannerImageImapScript)
    {
        $this->smallBrandedBannerImageImapScript = $smallBrandedBannerImageImapScript;

        return $this;
    }

    /**
     * @return Url
     */
    public function getSmallBrandedBannerImageUrl()
    {
        return $this->smallBrandedBannerImageUrl;
    }

    /**
     * @param Url $smallBrandedBannerImageUrl
     * @return self
     */
    public function setSmallBrandedBannerImageUrl(Url $smallBrandedBannerImageUrl)
    {
        $this->smallBrandedBannerImageUrl = $smallBrandedBannerImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingImageUrl()
    {
        return $this->trackingImageUrl;
    }

    /**
     * @param string $trackingImageUrl
     * @return self
     */
    public function setTrackingImageUrl($trackingImageUrl)
    {
        $this->trackingImageUrl = $trackingImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getWatchIconImageUrl()
    {
        return $this->watchIconImageUrl;
    }

    /**
     * @param string $watchIconImageUrl
     * @return self
     */
    public function setWatchIconImageUrl($watchIconImageUrl)
    {
        $this->watchIconImageUrl = $watchIconImageUrl;

        return $this;
    }
}
