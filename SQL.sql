DROP TABLE IF EXISTS `media`;

CREATE TABLE `media` (
	`id_media` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`titre` VARCHAR(255) NOT NULL,
	`type` VARCHAR(255),
	`lien` VARCHAR(255));

INSERT INTO `media` (`titre`, `type`, `lien`)
VALUES ("test1_img", "image", "https://leblogauto.b-cdn.net/wp-content/uploads/2017/03/RenaultGroup_87805_global_fr.jpg");

INSERT INTO `media` (`titre`, `type`, `lien`)
VALUES ("test2_vidéo", "vidéo", "https://www.youtube.com/watch?v=YgtStCghUtg");
