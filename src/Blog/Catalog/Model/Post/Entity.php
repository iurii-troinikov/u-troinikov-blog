<?php

declare(strict_types=1);

namespace Blog\Catalog\Model\Post;

class Entity
{
    private int $postId;

    private string $sku;

    private string $name;

    private string $url;
    private string $description;

    private int $qty;

    private int $createdAt;

    private int $updatedAt;

    /**
     * @return int
     */
    public function getPostId(): int
    {
        return $this->postId;
    }
    /**
     * @param int $postId
     * @return $this
     */
    public function setPostId(int $postId): Entity
    {
        $this->postId = $postId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku): Entity
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): Entity
    {
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url): Entity
    {
        $this->url = $url;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description): Entity
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getQty(): int
    {
        return $this->qty;
    }

    /**
     * @param int $qty
     * @return $this
     */
    public function setQty(int $qty): Entity
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * @return int
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     * @return $this
     */
    public function setCreatedAt(int $createdAt): Entity
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return int
     */
    public function getUpdatedAt(): int
    {
        return $this->updatedAt;
    }

    /**
     * @param int $updatedAt
     * @return $this
     */
    public function setUpdatedAt(int $updatedAt): Entity
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
