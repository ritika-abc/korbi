CREATE TABLE `discounts` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `min_items` INT NOT NULL,
    `discount_percentage` INT NOT NULL,
    `status` BOOLEAN NOT NULL DEFAULT 1
);
