CREATE TABLE `blog`.`posts` ( 
    `id` INT NOT NULL AUTO_INCREMENT ,
    `title` VARCHAR(64) NOT NULL ,
    `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `content` TEXT NOT NULL ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- INSERT INTO `posts` (`title`, `date`, `content`) VALUES ('oredfe', CURRENT_TIMESTAMP, 'blabkablablabla');
-- INSERT INTO `posts` (`id`, `title`, `date`, `content`) VALUES ('1', 'lorem ipsum', CURRENT_TIMESTAMP, 'frdsghdfhgfshbdgfdgsdfg');

