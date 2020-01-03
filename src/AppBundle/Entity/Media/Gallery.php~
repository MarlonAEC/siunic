<?php
namespace AppBundle\Entity\Media;

use Doctrine\ORM\Mapping as ORM;
use Sonata\MediaBundle\Entity\BaseGallery as BaseGallery;

/**
 * Class Gallery
 * @package AppBundle\Entity\Media
 *
 * @ORM\Table(name="sonata_media__gallery")
 * @ORM\Entity()
 */
class Gallery extends BaseGallery
{
    /**
     * @var guid
     *
     * @ORM\Id
     * @ORM\Column(type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     */
    protected $id;

    /**
     * @return guid
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add galleryHasMedia.
     *
     * @param \AppBundle\Entity\Media\GalleryHasMedia $galleryHasMedia
     *
     * @return Gallery
     */
    public function addGalleryHasMedia(\AppBundle\Entity\Media\GalleryHasMedia $galleryHasMedia)
    {
        $this->galleryHasMedias[] = $galleryHasMedia;

        return $this;
    }

    /**
     * Remove galleryHasMedia.
     *
     * @param \AppBundle\Entity\Media\GalleryHasMedia $galleryHasMedia
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeGalleryHasMedia(\AppBundle\Entity\Media\GalleryHasMedia $galleryHasMedia)
    {
        return $this->galleryHasMedias->removeElement($galleryHasMedia);
    }
}
