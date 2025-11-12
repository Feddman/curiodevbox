# MySQL Configuratie

## Probleem met Database Gebruiker?

Als je de foutmelding krijgt: `Access denied for user 'curiodevbox'`, betekent dit dat de gebruiker nog niet bestaat in de database.

### Oplossing 1: Gebruiker Handmatig Aanmaken (Snelste)

Voer dit commando uit:

```bash
docker exec -i devbox-mysql mysql -uroot -proot -e "CREATE USER IF NOT EXISTS 'curiodevbox'@'%' IDENTIFIED BY 'curiodevbox'; GRANT ALL PRIVILEGES ON curiodevbox.* TO 'curiodevbox'@'%'; GRANT ALL PRIVILEGES ON *.* TO 'curiodevbox'@'%' WITH GRANT OPTION; FLUSH PRIVILEGES;"
```

### Oplossing 2: Database Opnieuw Initialiseren

Als je geen data hebt die je wilt behouden:

```bash
# Stop containers
curio down

# Verwijder MySQL volume
docker volume rm curiodevbox_mysql-data

# Start opnieuw
curio up
```

### Oplossing 3: Via SQL Script

```bash
docker exec -i devbox-mysql mysql -uroot -proot < docker/mysql/fix-user.sql
```

## Database Verbindingsgegevens

- **Host**: `mysql` (vanuit containers) of `localhost` (vanuit host, poort 3309)
- **Port**: `3306` (in container) of `3309` (vanuit host)
- **Database**: `curiodevbox`
- **Gebruikersnaam**: `curiodevbox`
- **Wachtwoord**: `curiodevbox`
- **Root Wachtwoord**: `root`

