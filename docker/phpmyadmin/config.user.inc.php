<?php
/**
 * phpMyAdmin configuratie voor Curio DevBox
 * Standaard login gegevens worden hier ingesteld
 */

// Standaard server configuratie
$cfg['Servers'][1]['host'] = 'mysql';
$cfg['Servers'][1]['port'] = '3306';
$cfg['Servers'][1]['user'] = 'curiodevbox';
$cfg['Servers'][1]['password'] = 'curiodevbox';

// Automatisch inloggen met standaard gebruiker (config mode)
$cfg['Servers'][1]['auth_type'] = 'config';

// Toon alle databases (verberg systeem databases)
$cfg['Servers'][1]['hide_db'] = '^(information_schema|performance_schema|mysql|sys)$';

// Sta toe dat gebruikers kunnen switchen tussen servers
$cfg['AllowArbitraryServer'] = false;

