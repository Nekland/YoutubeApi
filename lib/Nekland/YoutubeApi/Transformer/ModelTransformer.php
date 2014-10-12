<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer;


use Nekland\BaseApi\Transformer\TransformerInterface;
use Nekland\YoutubeApi\Transformer\Hydrator\Hydrator;
use Nekland\YoutubeApi\Transformer\Hydrator\HydratorInterface;
use Nekland\YoutubeApi\Transformer\Model\Collection;

class ModelTransformer implements TransformerInterface
{
    /**
     * @var HydratorInterface
     */
    private $hydrator;

    public function __construct(HydratorInterface $hydrator = null)
    {
        $this->hydrator = $hydrator ?: new Hydrator();
    }

    public function transform($data, $type = self::UNKNOWN)
    {
        if ($type === self::UNKNOWN) {
            $data = json_decode($data, true);

            switch ($data['kind']) {
                case 'youtube#videoListResponse':
                    return $this->transformList($data, '\Nekland\YoutubeApi\Transformer\Model\Video');
                case 'youtube#playlistListResponse':
                    return $this->transformList($data, '\Nekland\YoutubeApi\Transformer\Model\Playlist');
                case 'youtube#channelListResponse':
                    return $this->transformList($data, '\Nekland\YoutubeApi\Transformer\Model\Channel');
                case 'youtube#channelSectionListResponse':
                    return $this->transformList($data, '\Nekland\YoutubeApi\Transformer\Model\ChannelSection');
                case 'youtube#guideCategoryListResponse':
                    return $this->transformList($data, '\Nekland\YoutubeApi\Transformer\Model\GuideCategory');
                case 'youtube#i18nLanguageListResponse':
                    return $this->transformList($data, '\Nekland\YoutubeApi\Transformer\Model\I18nLanguage');
                case 'youtube#i18nRegionListResponse':
                    return $this->transformList($data, '\Nekland\YoutubeApi\Transformer\Model\I18nRegion');
            }
        }
    }

    /**
     * @param  array  $data
     * @param  string $type
     * @return Collection
     */
    public function transformList($data, $type)
    {
        $final = $this->hydrator->hydrateCollection($type, $data);

        return $final;
    }
}
