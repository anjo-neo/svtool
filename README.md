# SV Tool

SV Tool im Rahmen des Informatik-Zusatzkurses des ONG

## Storyboard

### User Story:

* Interner Bereich
  * registrieren
  * anmelden
* Umfragen
  * erstellen
  * ausfüllen
  * auswerten
  * Anwesenheit notieren
  * Wahlen
* Dateienverwaltung
  * hochladen
  * herunterladen
  * automatisches Protokoll anfertigen
* Blog
  * Termine und Ankündigungen einsehen
* dynamisches Design und Darkmode wechseln

### Umsetzung
| Element | HTML | CSS | JS | PHP | SQL | Notiz |
| IB_registrieren | x | | x | x | x | Formular -> vom Admin? |
| IB_anmelden | x | | x | x | x | Formular -> Datenbank |
| U_erstellen | x | | x | x | x | Dynamische Erstellung mit JS und Datenbank vermerken |
| U_ausfüllen | x | | x | x | x | Formular, Ergebnisse -> Datenbank |
| U_auswerten | x | | x | x | x | Graphische Darstellung, Ergebnisse aus Datenbank |
| U_Anwesenheit | ? | ? | ? | ? | x | bei der Abstimmung wird in einer Tabelle vermerkt, wer teilgenommen hat |
| U_Wahlen | x | | x | x | x | Ähnlich wie Abstimmung nur für Wahlen |
| D_hochladen | x | | | x | x | Dateien wie Protokolle oder Briefe hochladen -> Datenbank |
| D_herunterladen | x | | | x | x | Einfacher Download der Dateien aus der Datenbank |
| D_Protokoll | x | | x | x | x | Anhand der Umfragen und Anweseheit wird eine Maske erstellt, die das Protokoll erleichtert |
| B_Termine/Ankündigungen | x | | x | | | Dynamische erstellung von Punkten |
| Design | x | x | x | | | Moderner Style und Switch für Darkmode, Barrierefreiheit für Mobilgeräte |

### TODO
- [x] Github Repository erstellen
- [] Startseite erstellen
- [] Datenbank erstellen
- [] Anmeldung und Registrierung
- [] Umfrage Maske erstellen
- [] Umfrage ausfüllbar
- [] Speicherung Umfrage Ergebnisse in Datenbank
- [] Umfrage Ergebnisse auswertbar
- [] Graphische Darstellung der Umfrage hinzufügen
- [] Wahlen als alternative Umfragemöglichkeit mit mehr Möglichkeiten
- [] Anwesenheit in Datenbank erstellen
- [] Auf Anwesenheit dynamisch zugreifen -> Dokument
- [] Umfrage mit Anwesenheit verknüpfen
- [] Terminseite hinzufügen
- [] Dynamisch neue Termine erstellen
- [] Termine mit Protokoll verknüpfen
- [] Anwesenheit mit Protokoll verknüpfen
- [] Umfragen mit Protokoll verknüpfen
- [] Protokoll als Dokument
- [] Dateien hochladen
- [] Dateien herunterladen
- [] Protokoll als Newsletter
- [] Modernes Design hinzufügen
- [] Darkmode hinzufügen
- [] dynamischer Style (Darkmode/Mobilgeräte)
