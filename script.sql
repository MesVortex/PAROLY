-- Structure de la table `user`
CREATE TABLE `user` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
);

-- Structure de la table `album`
CREATE TABLE `album` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `style_id` int(11) NOT NULL
);

ALTER TABLE `album`
  ADD CONSTRAINT `FK_styleAlbum_id` FOREIGN KEY (`style_id`) REFERENCES `style` (`id`),
  ADD CONSTRAINT `FK_user_ID` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

-- Structure de la table `badge`
CREATE TABLE `badge` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
);

ALTER TABLE `badge`
  ADD CONSTRAINT `FK_userBadge_ID` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

-- Structure de la table `lyrics`
CREATE TABLE `lyrics` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `text` varchar(500) NOT NULL,
  `song_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
);

ALTER TABLE `lyrics`
  ADD CONSTRAINT `FK_song_id` FOREIGN KEY (`song_id`) REFERENCES `song` (`id`),
  ADD CONSTRAINT `FK_userr_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

-- Structure de la table `notification`
CREATE TABLE `notification` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `message` varchar(255) NOT NULL,
  `reclam_id` int(11) NOT NULL
);

ALTER TABLE `notification`
  ADD CONSTRAINT `FK_reclam_ID` FOREIGN KEY (`reclam_id`) REFERENCES `reclamation` (`id`);

-- Structure de la table `playlist`
CREATE TABLE `playlist` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
);

ALTER TABLE `playlist`
  ADD CONSTRAINT `FK_userPlay_ID` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

-- Structure de la table `reaction`
CREATE TABLE `reaction` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
);

ALTER TABLE `reaction`
  ADD CONSTRAINT `FK_userReact_ID` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

-- Structure de la table `reclamation`
CREATE TABLE `reclamation` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `description` varchar(300) NOT NULL,
  `lyrics_id` int(11) NOT NULL
);

ALTER TABLE `reclamation`
  ADD CONSTRAINT `FK_lcsRecl_ID` FOREIGN KEY (`lyrics_id`) REFERENCES `lyrics` (`id`);

-- Structure de la table `song`
CREATE TABLE `song` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `album_id` int(11) NOT NULL
);

ALTER TABLE `song`
  ADD CONSTRAINT `FK_album_ID` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`);

-- Structure de la table `style`
CREATE TABLE `style` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
);

ALTER TABLE `style`
  ADD CONSTRAINT `FK_userStyle_ID` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
