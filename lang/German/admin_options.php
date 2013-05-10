<?php

// Sprachdefinitionen, die in admin_options.php verwendet werden
$lang_admin_options = array(

'Bad HTTP Referer message'			=>	'Falscher HTTP_REFERER. Wenn Du diese Foren innerhalb Ihrer Verzeichnisstruktur oder auf eine andere Domain verschoben hast, musst Du die Basis-URL in der Datenbank manuell aktualisieren (schau in der Tabelle config nach o_base_url) und leere dann den Zwischenspeicher, indem Du alle im Verzeichnis /cache enthaltenen .php-Dateien löschst.',
'Must enter title message'			=>	'Du musst ein Titel für dieses Board eingeben.',
'Invalid e-mail message'			=>	'Die für den Administrator eingegebene Email-Adresse ist ungültig.',
'Invalid webmaster e-mail message'	=>	'Die für den Webmaster eingegebene Email-Adresse ist ungültig.',
'SMTP passwords did not match'		=>	'Du musst zweimal das exakt gleiche SMTP-Passwort eingeben um es zu ändern.',
'Enter announcement here'			=>	'Gib hier Deine Ankündigungen ein.',
'Enter rules here'					=>	'Gib hier Deine Nutzungsbedingungen ein.',
'Default maintenance message'		=>	'Die Foren sind aufgrund von Wartungsarbeiten vorübergehend geschlossen. Bitte versuch es in ein paar Minuten noch einmal.',
'Timeout error message'				=>	'Der Wert für "Online-Zeitüberschreitung" muss kleiner sein als der Wert für "Besuchszeitüberschreitung".',
'Options updated redirect'			=>	'Optionen aktualisiert. Leite weiter …',
'Options head'						=>	'Optionen',

// Sektion Grundlegendes
'Essentials subhead'				=>	'Allgemeines',
'Board title label'					=>	'Board-Titel',
'Board title help'					=>	'Der Titel dieses Boards (wird auf jeder Seite ganz oben angezeigt). Dieses Feld darf <strong>KEIN</strong> HTML enthalten.',
'Board desc label'					=>	'Board-Beschreibung',
'Board desc help'					=>	'Eine kurze Beschreibung dieses Boards (wird auf jeder Seite ganz oben angezeigt). Dieses Feld kann HTML enthalten.',
'Base URL label'					=>	'Basis-URL',
'Base URL help'						=>	'Die vollständige URL des Forums ohne Folge-Slash (z.Bsp. http://www.meine-domain.de/foren). Damit alle Funktionen für Administratoren und Moderatoren ausgeführt werden können, <strong>MUSS</strong> dieser Eintrag richtig sein. Wenn Du einen Fehler "Falscher Referer" bekommst, ist die Basis-URL höchstwahrscheinlich falsch.',
'Timezone label'					=>	'Voreingestellte Zeitzone',
'Timezone help'						=>	'Die voreingestellte Zeitzone für Gäste und neu registrierte Mitglieder dieses Boards.',
'DST label'							=>	'Sommerzeit verwenden',
'DST help'							=>	'Wähle hier, ob die Sommerzeit verwendet werden soll (der aktuellen Zeit wird 1 Stunde hinzu addiert).',
'Language label'					=>	'Voreingestellte Sprache',
'Language help'						=>	'Das ist die voreingestellte Sprache für Gäste und Mitglieder, die die Voreinstellungen in Ihrem Profil nicht geändert haben. Wenn Du ein Sprachpaket entfernt hast, muss dieses aktualisiert werden.',
'Default style label'				=>	'Voreingestellter Style',
'Default style help'				=>	'Das ist der voreingestellte Style, der für Gäste und Mitglieder, die die Voreinstellungen nicht geändert haben, verwendet wird.',

// Grundlegende Sektion für die Zeitzonen-Einstellung
'UTC-12:00'							=>	'(WEZ-12:00) Internationale Datumsgrenze West',
'UTC-11:00'							=>	'(WEZ-11:00) Niue, Samoa',
'UTC-10:00'							=>	'(WEZ-10:00) Hawaii-Aleuten, Cook-Inseln',
'UTC-09:30'							=>	'(WEZ-09:30) Marquesas-Inseln',
'UTC-09:00'							=>	'(WEZ-09:00) Alaska, Gambier-Inseln',
'UTC-08:30'							=>	'(WEZ-08:30) Pitcairn-Inseln',
'UTC-08:00'							=>	'(WEZ-08:00) Pazifik',
'UTC-07:00'							=>	'(WEZ-07:00) Mountain',
'UTC-06:00'							=>	'(WEZ-06:00) Zentral',
'UTC-05:00'							=>	'(WEZ-05:00) Osten',
'UTC-04:00'							=>	'(WEZ-04:00) Atlantik',
'UTC-03:30'							=>	'(WEZ-03:30) Neufundland',
'UTC-03:00'							=>	'(WEZ-03:00) Amazonas, Zentral-Grönland',
'UTC-02:00'							=>	'(WEZ-02:00) Mittlerer Atlantik',
'UTC-01:00'							=>	'(WEZ-01:00) Azoren, Cape Verde, Östliches Grönland',
'UTC'								=>	'(WEZ) Westeuropäische Zeit, Greenwich',
'UTC+01:00'							=>	'(WEZ+01:00) Mitteleuropäische Zeit (MEZ), Westafrika',
'UTC+02:00'							=>	'(WEZ+02:00) Osteuropäische Zeit, Zentralafrika',
'UTC+03:00'							=>	'(WEZ+03:00) Ostafrika',
'UTC+03:30'							=>	'(WEZ+03:30) Iran',
'UTC+04:00'							=>	'(WEZ+04:00) Moskau, Golf, Samara',
'UTC+04:30'							=>	'(WEZ+04:30) Afghanistan',
'UTC+05:00'							=>	'(WEZ+05:00) Pakistan',
'UTC+05:30'							=>	'(WEZ+05:30) Indien, Sri Lanka',
'UTC+05:45'							=>	'(WEZ+05:45) Nepal',
'UTC+06:00'							=>	'(WEZ+06:00) Bangladesh, Bhutan, Jekaterinburg',
'UTC+06:30'							=>	'(WEZ+06:30) Cocos-Inseln, Myanmar',
'UTC+07:00'							=>	'(WEZ+07:00) Indochina, Nowosibirsk',
'UTC+08:00'							=>	'(WEZ+08:00) Groß-China, Westliches Australien, Krasnoyarsk',
'UTC+08:45'							=>	'(WEZ+08:45) Südöstliches West-Australien',
'UTC+09:00'							=>	'(WEZ+09:00) Japan, Korea, Chita, Irkutsk',
'UTC+09:30'							=>	'(WEZ+09:30) Zentral-Australian',
'UTC+10:00'							=>	'(WEZ+10:00) Ost-Australien',
'UTC+10:30'							=>	'(WEZ+10:30) Lord Howe',
'UTC+11:00'							=>	'(WEZ+11:00) Solomon-Inseln, Wladiwostok',
'UTC+11:30'							=>	'(WEZ+11:30) Norfolk-Inseln',
'UTC+12:00'							=>	'(WEZ+12:00) Neuseeland, Fiji, Magadan',
'UTC+12:45'							=>	'(WEZ+12:45) Chatham-Inseln',
'UTC+13:00'							=>	'(WEZ+13:00) Tonga, Phoenix-Inseln, Kamtschatka',
'UTC+14:00'							=>	'(WEZ+14:00) Grenz-Inseln',

// Sektion Zeitüberschreitung
'Timeouts subhead'					=>	'Zeit und Zeitüberschreitungen',
'Time format label'					=>	'Zeitformat',
'PHP manual'						=>	'PHP-Dokumentation',
'Time format help'					=>	'[Aktuelles Format: %s]. Weitere Informationen zu den Formatierungs-Optionen findest Du in der %s.',
'Date format label'					=>	'Datumsformat',
'Date format help'					=>	'[Aktuelles Format: %s]. Weitere Informationen zu den Formatierungs-Optionen findest Du in der %s.',
'Visit timeout label'				=>	'Besuchszeitüberschreitung',
'Visit timeout help'				=>	'Anzahl der Sekunden, die ein Mitglied im Forum nichts getan haben muss, bis die Daten seines letzten Besuchs aktualisiert werden (dies hat primär Auswirkungen auf die Anzeige neuer Beiträge).',
'Online timeout label'				=>	'Online-Zeitüberschreitung',
'Online timeout help'				=>	'Anzahl der Sekunden, die ein Mitglied im Forum nichts getan haben muss, bis es aus der Liste der Mitglieder, die online sind, entfernt wird.',
'Redirect time label'				=>	'Weiterleitungsdauer',
'Redirect time help'				=>	'Anzahl der Sekunden, die vor einer Weiterleitung gewartet werden soll. Ist der Wert 0, wird keine Weiterleitungsseite angezeigt (nicht empfohlen).',

// Sektion Anzeige
'Display subhead'					=>	'Anzeige',
'Version number label'				=>	'Versionsnummer',
'Version number help'				=>	'Zeigt die FluxBB-Versionsnummer in der Fußzeile an.',
'Info in posts label'				=>	'Mitglieder-Informationen in Beiträgen',
'Info in posts help'				=>	'Zeigt in der Themenansicht Informationen über den Autor des Beitrags unter dem Mitgliedsnamen an. Die Einstellung hat Auswirkungen auf den Ort, das Registrierungsdatum, den Beitragszähler und die Kontakt-Links (Email und Webseite).',
'Post count label'					=>	'Mitglieder-Beitragszähler',
'Post count help'					=>	'Zeigt die bisherige Anzahl der Beiträge eines Mitgliedes an (hat Auswirkungen auf die Themenansicht, das Profil und die Mitgliederliste).',
'Smilies label'						=>	'Smilies in Beiträgen',
'Smilies help'						=>	'Konvertiert Smilies in Beiträgen in kleine grafische Darstellungen.',
'Smilies sigs label'				=>	'Smilies in Signaturen',
'Smilies sigs help'					=>	'Konvertiert Smilies in den Mitgliedersignaturen in kleine grafische Darstellungen.',
'Clickable links label'				=>	'Klickbare Links erzeugen',
'Clickable links help'				=>	'Ist diese Option aktiviert, versucht FluxBB, eingegebene URLs in Beiträgen automatisch zu erkennen und klickbare Hyperlinks daraus zu machen.',
'Topic review label'				=>	'Themen-Ansicht',
'Topic review help'					=>	'Die maximale Anzahl der Beiträge, die angezeigt werden, wenn ein neuer Beitrag verfasst wird (jeweils der neueste zuerst). Mit 0 wird dies deaktiviert.',
'Topics per page label'				=>	'Themen pro Seite',
'Topics per page help'				=>	'Die voreingestellte Anzahl an Themen, die in einem Forum pro Seite angezeigt werden. Die Mitglieder können diese Einstellung individuell anpassen.',
'Posts per page label'				=>	'Beiträge pro Seite',
'Posts per page help'				=>	'Die voreingestellte Anzahl an Beiträgen, die pro Seite zu einem Thema angezeigt werden. Die Mitglieder können diese Einstellung individuell anpassen.',
'Indent label'						=>	'Größe der Einzugs',
'Indent help'						=>	'Wird dieser Wert auf 8 gesetzt, wird ein regulärer Tabulator verwendet, um den Text innerhalb der [code][/code]-Tags anzuzeigen. Anderenfalls wird diese Anzahl Leerzeichen verwendet, um den Text einzurücken.',
'Quote depth label'					=>	'Maximale [quote] Tiefe',
'Quote depth help'					=>	'Die maximale Anzahl an [quote]-Tags, die in anderen [quote]-Tags enthalten sein können. Tiefer verschachtelte Tags werden nicht mehr angezeigt.',

// Sektion Features
'Features subhead'					=>	'Funktionen',
'Quick post label'					=>	'Schnellantwort',
'Quick post help'					=>	'Wird dies aktiviert, zeigt FluxBB unterhalb des Themas einen Textbereich an, über den eine schnelle Antwort zu diesem Thema erstellt werden kann. Auf diesem Weg können die Mitglieder Ihre Antworten direkt in der Themen-Ansicht eingeben.',
'Users online label'				=>	'Mitglieder online',
'Users online help'					=>	'Zeigt auf der Übersichtsseite Informationen an, wie viele Gäste und Mitglieder sich aktuell im Forum aufhalten.',
'Censor words label'				=>	'Wortzensur',
'Censor words help'					=>	'Aktiviere dies, um bestimmte Wörter im Forum zu zensieren. Weitere Informationen dazu finden Sie unter %s.',
'Signatures label'					=>	'Signaturen',
'Signatures help'					=>	'Erlaubt den Mitgliedern, ihren Beiträgen eine Signatur anzuhängen.',
'User has posted label'				=>	'Mitglied hat einen Beitrag verfasst',
'User has posted help'				=>	'Diese Funktion zeigt einen Punkt vor jedem Thema in der viewforum.php an, wenn das aktuell angemeldete Mitglied in diesem Thema irgendwann einen Beitrag verfasst hat. Deaktivieren Sie dies, falls Sie eine hohe Serverauslastung festgestellt haben.',
'Topic views label'					=>	'Thema gelesen',
'Topic views help'					=>	'Aktiviert die Zählung, wie oft ein Thema gelesen wurde. Deaktivieren Sie dies, falls Sie eine hohe Serverauslastung festgestellt haben.',
'Quick jump label'					=>	'Schnellsprung',
'Quick jump help'					=>	'Aktiviert den Schnellsprung-(Sprung zum Forum)-Auswahlliste.',
'GZip label'						=>	'GZip verwenden',
'GZip help'							=>	'Wird dies aktiviert, wird FluxBB die Inhalte via gzip komprimiert an die Browser senden. Dies reduziert die Bandbreite etwas, erhöht aber die Serverauslastung. Für diese Funktion muss PHP für die Verwendung der zlib konfiguriert sein (--with-zlib). Hinweis: Wenn Du bereits ein Apache-Modul wie etwa mod_gzip oder mod_deflate verwendest, um PHP-Skripte zu komprimieren, sollten Sie diese Funktion deaktivieren.',
'Search all label'					=>	'Alle Foren durchsuchen',
'Search all help'					=>	'Wird dies deaktiviert, wird nur ein Forum pro Durchlauf durchsucht. Wenn die Serverauslastung aufgrund der Suchvorgänge zu hoch ist, solltest Du dies deaktivieren.',
'Menu items label'					=>	'Zusätzliche Menü-Einträge',
'Menu items help'					=>	'Wenn Du in dieses Textfeld HTML-Hyperlinks eingibst, werden diese Einträge dem Navigations-Menü in der Kopfzeile jeder Seite hinzugefügt. Das Format für das Hinzufügen von neuen Links ist folgendes X = <a href="URL">LINK</a>. Dabei ist X die Position, an welcher der neue Link eingefügt werden soll (z.B. 0 zum Einfügen am Anfang des Menüs und 2 zum Einfügen nach der "Mitgliederliste"). Die einzelnen Einträge müssen durch einen Zeilenumbruch voneinander getrennt werden.',

// Sektion Feeds
'Feed subhead'						=>	'Syndication',
'Default feed label'				=>	'Voreingestellter Feed-Typ',
'Default feed help'					=>	'Wähle den anzuzeigenden Feed-Typ. Hinweis: Die Auswahl "Ohne Vorgabe" daktiviert nicht die Feeds, sondern versteckt sie nur.',
'None'								=>	'Ohne Vorgabe',
'RSS'								=>	'RSS',
'Atom'								=>	'Atom',
'Feed TTL label'					=>	'Zeitdauer für die Zwischenspeicherung von Feeds',
'Feed TTL help'						=>	'Damit die Nutzung von Feeds die Ressourcen deines Servers weniger belastet, können Feeds zwischengespeichert werden.',
'No cache'							=>	'Nicht zwischenspeichern',
'Minutes'							=>	'%d Minuten',

// Sektion Meldungen
'Reports subhead'					=>	'Meldungen',
'Reporting method label'			=>	'Melde-Methode',
'Internal'							=>	'Intern',
'By e-mail'							=>	'Per Email',
'Both'								=>	'Beides',
'Reporting method help'				=>	'Wähle hier eine Methode aus, wie Meldungen über Themen/Beiträge behandelt werden sollen. Du hast mehrere Optionen zur Auswahl - entweder werden die Meldungen über ein internes Berichtssystem verarbeitet oder via Email an eine Mailingliste (siehe unten) versandt werden. Es können auch beide Optionen parallel verwendet werden.',
'Mailing list label'				=>	'Mailingliste',
'Mailing list help'					=>	'Eine durch Kommata getrennte Liste von Empfängern. An diese Personen werden die eingehenden Foren-Meldungen versandt.',

// Sektion Avatare
'Avatars subhead'					=>	'Avatare',
'Use avatars label'					=>	'Avatare verwenden',
'Use avatars help'					=>	'Wird dies aktiviert, können Mitglieder einen eigenen Avatar hochladen, der dann unter dem Titel angezeigt wird.',
'Upload directory label'			=>	'Avatar-Verzeichnis',
'Upload directory help'				=>	'Das Verzeichnis, in welches die Avatare hochgeladen werden (relativ zum Wurzelverzeichnis von FluxBB). PHP muss für dieses Verzeichnis eine Schreibberechtigung haben.',
'Max width label'					=>	'Maximale Breite',
'Max width help'					=>	'Die maximal erlaubte Breite des Avatars in Pixel (empfohlen 60).',
'Max height label'					=>	'Maximale Höhe',
'Max height help'					=>	'Die maximal erlaubte Höhe des Avatars in Pixel (empfohlen 60).',
'Max size label'					=>	'Maximale Größe',
'Max size help'						=>	'Die maximal erlaubte Dateigröße des Avatars in Bytes (empfohlen 10240).',

// Sektion Email
'E-mail subhead'					=>	'Email',
'Admin e-mail label'				=>	'Administratoren-Email',
'Admin e-mail help'					=>	'Die Email-Adresse des Foren-Administrators.',
'Webmaster e-mail label'			=>	'Webmaster-Email',
'Webmaster e-mail help'				=>	'Das ist die Email-Adresse, die als Absender für alle vom Forum versandten Emails verwendet wird.',
'Forum subscriptions label'			=>	'Foren-Abonnements',
'Forum subscriptions help'			=>	'Ermöglicht den Mitgliedern, Foren zu abonnieren (werden bei neuen Themen in diesem Forum via Email informiert).',
'Topic subscriptions label'			=>	'Themen-Abonnements',
'Topic subscriptions help'			=>	'Ermöglicht den Mitgliedern, Themen zu abonnieren (werden bei neuen Beiträgen zu diesem Thema via Email informiert).',
'SMTP address label'				=>	'SMTP-Server-Adresse',
'SMTP address help'					=>	'Die Adresse des externen SMTP-Server, mit dem die Emails versandt werden sollen. Du kannst hier einen eigenen Port festlegen, falls der SMTP-Server nicht mit dem Standard-Port 25 arbeitet (Beispiel: mail.meinhost.de:3580). Ohne Eintrag wird das lokale Mail-Programm verwendet.',
'SMTP username label'				=>	'SMTP-Benutzername',
'SMTP username help'				=>	'Benutzername für den SMTP-Server. Gib nur dann einen Benutzernamen ein, wenn dieser vom SMTP-Server angefordert wird (bei den meisten Servern ist <strong>keine</strong> Authentifizierung erforderlich).',
'SMTP password label'				=>	'SMTP-Passwort',
'SMTP change password help'			=>	'Aktiviere dies um das aktuell gespeicherte Passwort zu ändern oder zu löschen.',
'SMTP password help'				=>	'Passwort für den SMTP-Server. Gib nur dann ein Passwort ein, wenn dieses vom SMTP-Server angefordert wird (bei den meisten Servern ist <strong>keine</strong> Authentifizierung erforderlich).',
'SMTP SSL label'					=>	'SMTP mit SSL verschlüsseln',
'SMTP SSL help'						=>	'Verschlüsselt die Verbindung mit dem SMTP-Server mit SSL. Sollte nur dann verwendet werden, wenn Dein SMTP-Server es erfordert und Deine PHP-Version SSL unterstützt.',

// Sektion Registrierungen
'Registration subhead'				=>	'Registrierung',
'Allow new label'					=>	'Neue Registrierungen erlauben',
'Allow new help'					=>	'Legt fest, ob dieses Forum neue Registrierungen akzeptiert. Sollte nur unter besonderen Umständen deaktiviert werden.',
'Verify label'						=>	'Registrierung bestätigen',
'Verify help'						=>	'Wird dies aktiviert, wird den Neu-Mitgliedern nach der Registrierung ein zufällig erstelltes Password via Email zugesandt. Erst dann können sich die neuen Mitglieder anmelden und das Passwort in ihrem Profil ändern. Auch, wenn die ursprünglichen Registrierungs-Email-Adresse in eine andere geändert wird, ist eine Bestätigung durch das Mitglied erforderlich. Dies ist ein effektiver Weg, um mißbräuchliche Registrierungen zu vermeiden und sicherzustellen, dass in den Profilen der Mitglieder die "richtigen" Email-Adressen eingetragen sind.',
'Report new label'					=>	'Neue Registrierungen melden',
'Report new help'					=>	'Wird dies aktiviert, benachrichtigt FluxBB die Mitglieder auf der Mailingliste (siehe unten), wenn sich neue Mitglieder in den Foren registrieren.',
'Use rules label'					=>	'Nutzungsbedingungen',
'Use rules help'					=>	'Wird dies aktiviert, müssen neue Mitglieder bei der Registrierung den Nutzungsbedingungen zustimmen (Text unten eingeben). Die Nutzungsbedingungen sind immer über einen Link in der Navigationsleiste im Kopf jeder Seite zu erreichen.',
'Rules label'						=>	'Gib hier die Nutzungsbedingungen ein',
'Rules help'						=>	'Hier kannst Du die Nutzungsbedingungen und sonstige Informationen eingeben, die sich jedes neue Mitglied durchlesen und akzeptieren muss. Um diese Option zu aktivieren, gib in dieses Feld Deine Nutzungsbedingungen ein - ohne Eintrag bleibt diese Option deaktiviert. Dieser Text wird nicht wie reguläre Beiträge verarbeitet und kann daher HTML enthalten.',
'E-mail default label'				=>	'Standard-Email-Einstellungen',
'E-mail default help'				=>	'Wähle die die Privatsphären-Einstellungen für neu registrierte Mitglieder.',
'Display e-mail label'				=>	'Anderen Mitgliedern die Email-Adresse anzeigen.',
'Hide allow form label'				=>	'Die Email-Adresse verbergen, aber die Kontaktaufnahme via Formular erlauben.',
'Hide both label'					=>	'Die Email-Adresse verbergen und die Kontaktaufnahme via Formular verbieten.',

// Sektion Ankündigungen
'Announcement subhead'				=>	'Ankündigungen',
'Display announcement label'		=>	'Ankündigungen anzeigen',
'Display announcement help'			=>	'Aktiviere diese Option, um die unten angezeigte Nachricht oberhalb der Foren anzuzeigen.',
'Announcement message label'		=>	'Text der Ankündigung',
'Announcement message help'			=>	'Dieser Text wird nicht wie reguläre Beiträge verarbeitet und kann daher HTML enthalten.',

// Sektion Wartung
'Maintenance subhead'				=>	'Wartung',
'Maintenance mode label'			=>	'Wartungs-Modus',
'Maintenance mode help'				=>	'Wird diese Option aktiviert, können nur die Administratoren auf das Board zugreifen. Dieser Modus sollte verwendet werden, wenn zeitlich beschränkte Wartungsarbeiten am Board erforderlich sind. WARNUNG! Melde Dich NIEMALS ab, wenn sich das Board im Wartungs-Modus befindet. Du kannst Dich anschließend niemals wieder anmelden.',
'Maintenance message label'			=>	'Wartungs-Nachricht',
'Maintenance message help'			=>	'Die Nachricht, die den Besuchern der Webseite angezeigt wird, wenn sich das Board im Wartungs-Modus befindet. Bleibt dieses Feld leer, wird eine voreingestellte Nachricht verwendet. Dieser Text wird nicht wie reguläre Beiträge verarbeitet und kann daher HTML enthalten.',

);
