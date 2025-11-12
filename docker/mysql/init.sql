-- Curio DevBox MySQL Initialization Script
-- Dit script wordt automatisch uitgevoerd bij de eerste start van MySQL

-- Maak de database aan als deze nog niet bestaat
CREATE DATABASE IF NOT EXISTS curiodevbox CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Maak games database aan
CREATE DATABASE IF NOT EXISTS games CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Maak de gebruiker aan als deze nog niet bestaat
CREATE USER IF NOT EXISTS 'curiodevbox'@'%' IDENTIFIED BY 'curiodevbox';

-- Geef alle rechten op de databases
GRANT ALL PRIVILEGES ON curiodevbox.* TO 'curiodevbox'@'%';
GRANT ALL PRIVILEGES ON games.* TO 'curiodevbox'@'%';

-- Geef ook rechten op alle databases (voor flexibiliteit)
GRANT ALL PRIVILEGES ON *.* TO 'curiodevbox'@'%' WITH GRANT OPTION;

-- Flush privileges om wijzigingen toe te passen
FLUSH PRIVILEGES;

