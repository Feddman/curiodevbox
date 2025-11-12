-- Script om de curiodevbox gebruiker en database aan te maken
-- Voer dit uit met: docker exec -i devbox-mysql mysql -uroot -proot < docker/mysql/fix-user.sql

-- Maak de database aan
CREATE DATABASE IF NOT EXISTS curiodevbox CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Maak de gebruiker aan
CREATE USER IF NOT EXISTS 'curiodevbox'@'%' IDENTIFIED BY 'curiodevbox';

-- Geef alle rechten op de database
GRANT ALL PRIVILEGES ON curiodevbox.* TO 'curiodevbox'@'%';

-- Geef ook rechten op alle databases (voor flexibiliteit)
GRANT ALL PRIVILEGES ON *.* TO 'curiodevbox'@'%' WITH GRANT OPTION;

-- Flush privileges om wijzigingen toe te passen
FLUSH PRIVILEGES;

