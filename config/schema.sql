DROP TABLE IF EXISTS `category_post`;
#---
DROP TABLE IF EXISTS `category`;
#---
DROP TABLE IF EXISTS `post`;
#---
CREATE TABLE `post` (
    `post_id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Post ID',
    `sku` varchar(63) NOT NULL COMMENT 'SKU',
    `name` varchar(127) NOT NULL COMMENT 'Name',
    `url` varchar(127) NOT NULL COMMENT 'URL',
    `description` varchar(4095) DEFAULT NULL COMMENT 'Description',
    `qty` smallint DEFAULT NULL COMMENT 'Qty',
    PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Post Entity';
#---
INSERT INTO `post` (`sku`, `name`, `url`, `description`, `qty`)
VALUES ('sku-1', 'Post 1', 'post-1', 'Lorem ipsum dolor sit amet', 1),
       ('sku-2', 'Post 2', 'post-2', 'Lorem ipsum dolor sit amet', 10),
       ('sku-3', 'Post 3', 'post-3', 'Lorem ipsum dolor sit amet', 20),
       ('sku-4', 'Post 4', 'post-4', 'Lorem ipsum dolor sit amet', 30),
       ('sku-5', 'Post 5', 'post-5', 'Lorem ipsum dolor sit amet', 15),
       ('sku-6', 'Post 6', 'post-6', 'Lorem ipsum dolor sit amet', 12),
       ('sku-7', 'Post 7', 'post-7', 'Lorem ipsum dolor sit amet', 99);
#---
ALTER TABLE `post`
    ADD COLUMN `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
        COMMENT 'Created At' AFTER `name`,
    ADD COLUMN `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP
        COMMENT 'Updated At' AFTER `created_at`;
#---
CREATE TABLE `category` (
    `category_id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Category ID',
    `name` varchar(127) NOT NULL COMMENT 'Name',
    `url` varchar(127) NOT NULL COMMENT 'URL',
    PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Category Entity';
#---
INSERT INTO `category` (`name`, `url`)
VALUES ('Summer holidays', 'summer-holidays'),
       ('Winter holidays', 'winter-holidays'),
       ('Other holidays', 'other-holidays');
#---
CREATE TABLE `category_post` (
    `category_post_id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
    `post_id` int unsigned NOT NULL COMMENT 'Post ID',
    `category_id` int unsigned NOT NULL COMMENT 'Category ID',
    PRIMARY KEY (`category_post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Category Post';
#---
ALTER TABLE `category_post`
    ADD CONSTRAINT `FK_CATEGORY_ID` FOREIGN KEY (`category_id`)
        REFERENCES `category` (`category_id`) ON DELETE CASCADE,
    ADD CONSTRAINT `FK_POST_ID` FOREIGN KEY (`post_id`)
        REFERENCES `post` (`post_id`) ON DELETE CASCADE;
#---
INSERT INTO `category_post` (`category_id`, `post_id`)
VALUES (1, 1), (1, 2), (1, 3), (1, 4),
       (2, 2), (2, 3), (2, 4), (2, 5),
       (3, 3), (3, 4), (3, 5), (3, 6);
