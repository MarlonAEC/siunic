<?php

namespace AppBundle\Entity\Media;

use Doctrine\ORM\Mapping as ORM;
use Sonata\MediaBundle\Entity\BaseMedia as BaseMedia;

/**
 * Class Media
 * @package AppBundle\Entity\Media
 *
 * @ORM\Table(name="sonata_media__media")
 * @ORM\Entity()
 */
class Media extends BaseMedia
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->galleryHasMedias = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add galleryHasMedia.
     *
     * @param \AppBundle\Entity\Media\GalleryHasMedia $galleryHasMedia
     *
     * @return Media
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

    /**
     * Set category.
     *
     * @param \AppBundle\Entity\Classification\Category|null $category
     *
     * @return Media
     */
    public function setCategory(\AppBundle\Entity\Classification\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }
}
