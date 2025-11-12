# Curio DevBox - Full-Stack Ontwikkelomgeving

Een Docker-gebaseerde ontwikkelomgeving vergelijkbaar met Devilbox, met alle tools die je nodig hebt voor full-stack web ontwikkeling.

## 🚀 Functies

- **PHP 8.4** met Apache en PHP-FPM
- **MySQL 8.0** databaseserver
- **Nginx** webserver
- **Apache** webserver
- **Node.js 20** runtime
- **phpMyAdmin** voor databasebeheer
- **Adminer** (alternatief database tool)
- **Redis** voor caching
- **MailHog** voor e-mail testen
- **Composer** vooraf geïnstalleerd
- **Xdebug** voor debugging
- Veelgebruikte PHP extensies (MySQL, Redis, GD, ZIP, etc.)

## 📋 Vereisten

- [Docker](https://www.docker.com/get-started) (versie 20.10 of hoger)
- [Docker Compose](https://docs.docker.com/compose/install/) (versie 2.0 of hoger)

## 🛠️ Installatie

1. **Clone of download deze repository**

2. **Start de omgeving:**
   ```bash
   docker-compose up -d
   ```

3. **Wacht tot alle containers zijn gestart** (dit kan een paar minuten duren bij de eerste keer)

4. **Toegang tot je services:**
   - **Apache**: http://localhost:8080
   - **Nginx**: http://localhost
   - **phpMyAdmin**: http://localhost:8081
   - **Adminer**: http://localhost:8082
   - **MailHog UI**: http://localhost:8025

## 📁 Projectstructuur

```
.
├── docker/
│   ├── apache/          # Apache configuratie
│   ├── mysql/           # MySQL configuratie
│   ├── nginx/           # Nginx configuratie
│   └── php/             # PHP Dockerfiles en config
├── www/                 # Je webprojecten (document root)
└── docker-compose.yml   # Docker Compose configuratie
```

## 🗄️ Database Configuratie

**MySQL Verbindingsgegevens:**
- **Host**: `mysql` (vanuit containers) of `localhost` (vanuit host)
- **Port**: `3306`
- **Database**: `curiodevbox`
- **Gebruikersnaam**: `curiodevbox`
- **Wachtwoord**: `curiodevbox`
- **Root Wachtwoord**: `root`

**phpMyAdmin Login:**
- **Server**: `mysql`
- **Gebruikersnaam**: `root` of `curiodevbox`
- **Wachtwoord**: `root` (voor root) of `curiodevbox` (voor curiodevbox gebruiker)

## 💻 Gebruik

### Werken met PHP

Plaats je PHP bestanden in de `www/` directory. Ze zijn toegankelijk via:
- Apache: http://localhost:8080
- Nginx: http://localhost

### Werken met Node.js

1. Navigeer naar je project in `www/`:
   ```bash
   cd www/jouw-node-project
   ```

2. Toegang tot de Node.js container:
   ```bash
   docker exec -it devbox-nodejs sh
   ```

3. Installeer dependencies en start je app:
   ```bash
   npm install
   npm start
   ```

### Composer Gebruiken

Composer is vooraf geïnstalleerd in PHP containers. Je kunt het gebruiken via:
```bash
docker exec -it devbox-php-apache composer install
```

Of vanuit de container:
```bash
docker exec -it devbox-php-apache bash
composer install
```

### Redis Gebruiken

Verbind met Redis vanuit je PHP applicatie:
```php
$redis = new Redis();
$redis->connect('redis', 6379);
```

Vanuit Node.js:
```javascript
const redis = require('redis');
const client = redis.createClient({ host: 'redis', port: 6379 });
```

### E-mails Testen met MailHog

Configureer je applicatie om e-mails te versturen naar:
- **SMTP Host**: `mailhog`
- **SMTP Port**: `1025`
- **Web UI**: http://localhost:8025

## 🔧 Configuratie

### PHP Configuratie

Bewerk `docker/php/php.ini` om PHP instellingen aan te passen.

### Nginx Configuratie

Bewerk `docker/nginx/default.conf` om Nginx virtual host instellingen aan te passen.

### Apache Configuratie

Bewerk `docker/apache/000-default.conf` om Apache virtual host instellingen aan te passen.

### MySQL Configuratie

Bewerk `docker/mysql/my.cnf` om MySQL instellingen aan te passen.

## 🐛 Debuggen met Xdebug

Xdebug is vooraf geconfigureerd en ingeschakeld. Om het te gebruiken:

1. Configureer je IDE om te luisteren op poort `9003`
2. Stel de server naam in op `devbox`
3. Plaats breakpoints en begin met debuggen!

## 📦 Beschikbare Services

| Service | Container Naam | Poort | Beschrijving |
|---------|---------------|------|-------------|
| Apache | devbox-php-apache | 8080 | PHP 8.4 met Apache |
| Nginx | devbox-nginx | 80 | Nginx webserver |
| PHP-FPM | devbox-php-fpm | 9000 | PHP-FPM voor Nginx |
| MySQL | devbox-mysql | 3306 | MySQL 8.0 database |
| phpMyAdmin | devbox-phpmyadmin | 8081 | Databasebeheer |
| Adminer | devbox-adminer | 8082 | Alternatief DB tool |
| Node.js | devbox-nodejs | 3000, 3001 | Node.js runtime |
| Redis | devbox-redis | 6379 | Redis cache |
| MailHog | devbox-mailhog | 1025, 8025 | E-mail testen |

## 🛑 Omgeving Stoppen

```bash
docker-compose down
```

Om volumes te verwijderen (⚠️ dit verwijdert je database data):
```bash
docker-compose down -v
```

## 🔄 Services Herstarten

Herstart alle containers:
```bash
docker-compose restart
```

Herstart een specifieke service:
```bash
docker-compose restart <service-naam>
```

Voorbeeld:
```bash
docker-compose restart php-apache
```

## 📝 Logs

Bekijk logs voor alle services:
```bash
docker-compose logs -f
```

Bekijk logs voor een specifieke service:
```bash
docker-compose logs -f <service-naam>
```

## 🧹 Opschonen

Verwijder alle containers, netwerken en volumes:
```bash
docker-compose down -v
docker system prune -a
```

## 📁 Meerdere Projecten Beheren

Curio DevBox ondersteunt meerdere projecten in subdirectories. Je kunt zoveel projecten hebben als je wilt!

### Methode 1: Subdirectories (Aanbevolen - Eenvoudigst)

1. **Maak een nieuwe project directory:**
   ```bash
   mkdir www/mijn-project
   ```

2. **Plaats je project bestanden in die directory**

3. **Toegang tot je project:**
   - **Via Apache:** http://localhost:8080/mijn-project
   - **Via Nginx:** http://localhost/mijn-project

**Voorbeeld:**
- `www/project1/` → http://localhost:8080/project1 (Apache) of http://localhost/project1 (Nginx)
- `www/project2/` → http://localhost:8080/project2 (Apache) of http://localhost/project2 (Nginx)
- `www/laravel-app/` → http://localhost:8080/laravel-app (Apache) of http://localhost/laravel-app (Nginx)

### Methode 2: Virtual Hosts met Eigen Domeinen (Geavanceerd)

Voor aparte domeinen zoals `project1.localhost` en `project2.localhost`:

#### Voor Nginx:

1. **Kopieer de template:**
   ```bash
   cp docker/nginx/project-template.conf docker/nginx/project1.conf
   ```

2. **Bewerk het bestand** en pas aan:
   - `server_name project1.localhost;` → je gewenste domein
   - `root /var/www/html/project1;` → je project pad

3. **Voeg toe aan docker-compose.yml** (nginx volumes):
   ```yaml
   volumes:
     - ./docker/nginx/project1.conf:/etc/nginx/conf.d/project1.conf
   ```

4. **Voeg toe aan je hosts bestand:**
   - **Windows:** `C:\Windows\System32\drivers\etc\hosts`
   - **Linux/Mac:** `/etc/hosts`
   
   Voeg toe:
   ```
   127.0.0.1 project1.localhost
   ```

5. **Herstart nginx:**
   ```bash
   docker-compose restart nginx
   ```

#### Voor Apache:

1. **Kopieer de template:**
   ```bash
   cp docker/apache/project-template.conf docker/apache/project1.conf
   ```

2. **Bewerk het bestand** en pas aan:
   - `ServerName project1.localhost;` → je gewenste domein
   - `DocumentRoot /var/www/html/project1;` → je project pad

3. **Voeg toe aan docker-compose.yml** (php-apache volumes):
   ```yaml
   volumes:
     - ./docker/apache/project1.conf:/etc/apache2/sites-available/project1.conf
   ```

4. **Activeer de site:**
   ```bash
   docker exec -it devbox-php-apache a2ensite project1
   docker-compose restart php-apache
   ```

5. **Voeg toe aan je hosts bestand** (zie Nginx instructies hierboven)

### Voorbeeld Projecten

Er zijn al twee voorbeeld projecten aangemaakt:
- **Project 1:** http://localhost:8080/project1 of http://localhost/project1
- **Project 2:** http://localhost:8080/project2 of http://localhost/project2

## 🤝 Tips

1. **Meerdere Projecten**: Maak subdirectories in `www/` voor verschillende projecten - ze zijn direct beschikbaar!
2. **Aangepaste Domeinen**: Gebruik virtual hosts voor aparte domeinen per project (zie hierboven)
3. **Prestaties**: Pas MySQL en PHP geheugenlimieten aan in hun respectievelijke config bestanden
4. **Backup**: Database data wordt opgeslagen in Docker volumes, maar overweeg regelmatige backups
5. **Project-specifieke Databases**: Maak aparte databases voor elk project in phpMyAdmin

## 📚 Aanvullende Bronnen

- [Docker Documentatie](https://docs.docker.com/)
- [Docker Compose Documentatie](https://docs.docker.com/compose/)
- [PHP Documentatie](https://www.php.net/docs.php)
- [MySQL Documentatie](https://dev.mysql.com/doc/)
- [Nginx Documentatie](https://nginx.org/en/docs/)

## 🐛 Probleemoplossing

**Poort al in gebruik:**
- Wijzig poort mappings in `docker-compose.yml`

**Permissie problemen:**
- Zorg dat Docker de juiste permissies heeft
- Op Linux moet je mogelijk je gebruiker toevoegen aan de docker groep

**MySQL verbinding geweigerd:**
- Wacht een paar seconden na het starten van containers tot MySQL is geïnitialiseerd
- Controleer of MySQL container draait: `docker ps`

**PHP extensies laden niet:**
- Herbouw de PHP containers: `docker-compose build php-apache php-fpm`

## 📄 Licentie

Dit project is open source en beschikbaar voor persoonlijk en commercieel gebruik.

---

**Veel Codeerplezier! 🎉**
