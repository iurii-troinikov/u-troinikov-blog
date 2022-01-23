SELECT * FROM `category`;

SELECT post_id FROM `category_post`;

SELECT *
FROM post
ORDER BY post_id DESC
LIMIT 10;

SELECT *
FROM post
ORDER BY created_at DESC
LIMIT 10, 5;

SELECT *
FROM post AS p, category_post AS cp
WHERE p.post_id = cp.post_id
    AND cp.category_id = 1;

SELECT *
FROM category AS c
     LEFT JOIN category_post AS cp
     ON c.category_id = cp.category_id;

# Categories with posts
SELECT c.*
FROM category AS c
         INNER JOIN category_post AS cp
                   ON c.category_id = cp.category_id;

SELECT DISTINCT c.*
FROM category AS c
     NATURAL JOIN category_post AS cp;
