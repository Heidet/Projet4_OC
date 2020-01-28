------------- Table Posts -------------
CREATE TABLE `blog`.`posts` ( 
    `id` INT NOT NULL AUTO_INCREMENT ,
    `title` VARCHAR(64) NOT NULL ,
    `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `content` TEXT NOT NULL ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- INSERT INTO `posts` (`title`, `date`, `content`) VALUES ('oredfe', CURRENT_TIMESTAMP, 'blabkablablabla');
-- INSERT INTO `posts` (`id`, `title`, `date`, `content`) VALUES ('1', 'lorem ipsum', CURRENT_TIMESTAMP, 'frdsghdfhgfshbdgfdgsdfg');

------------- Table Commentaire -------------
CREATE TABLE `blog`.`comments` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `fullname` VARCHAR(32) NOT NULL , 
    `content` TEXT NOT NULL , 
    `post_id` INT NOT NULL , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB; 

ALTER TABLE `comments` ADD `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `content`; -- ajout de la colonne date dans la table comments après colonne content

------------- Table User_Name -------------
CREATE TABLE `blog`.`author` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `username` VARCHAR(16) NOT NULL , 
    `hash` VARCHAR(64) NOT NULL , 
    PRIMARY KEY (`id`), 
    UNIQUE `username` (`username`)
    ) ENGINE = InnoDB;