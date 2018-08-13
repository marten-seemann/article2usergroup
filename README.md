# Article2Usergroup

Dieses OXID-Modul ermöglicht es, ausgewählte Artikel nur einer bestimmten Benutzergruppe anzuzeigen.

## Installation

1. Kopieren Sie den Inhalt des Ordners *copy_this* in das Hauptverzeichnis Ihres Shops.
2. Gehen Sie ins Backend Ihres Shops, und öffnen Sie dort die Seite *Service -> Tools*. Wählen Sie dort die Datei *install.sql* aus dem Ordner *sql* aus und klicken Sie auf *Update starten*. Klicken Sie dann auf den Button *VIEWS jetzt updaten*.
3. Aktivieren Sie das Modul im Backend unter *Erweiterungen -> Module* und leeren Sie den *tmp/*-Ordner Ihres Shops.
4. Öffnen Sie die Datei *modules/functions.php* mit einem Texteditor und fügen Sie dort folgende Zeile hinzu:

   ```php
   require(dirname(__FILE__).'/article2usergroup/functions.php');
   ```

## Benutzung

1. Legen Sie in den Moduleinstellungen (im Backend unter *Erweiterungen -> Module -> Article2Usergroup -> Einstellungen*) die OXID der Benutzergruppe, die alle Artikel sehen darf, fest. Die OXID der Benutzergruppe wird unter *Benutzer verwalten -> Benutzergruppen* angezeigt.
2. Legen Sie die Artikel fest, die nur dieser Benutzergruppe angezeigt werden sollen. Gehen Sie dazu auf *Artikel verwalten -> Artikel* und wählen Sie dort den entsprechenden Artikel aus. Setzen Sie dann den Haken bei *Article2Usergroup: Sonderrechte benötigt*.

Diese Artikel werden jetzt nur noch Benutzern der entsprechenden Benutzergruppe angezeigt.

Nutzer mit Admin-Rechten immer Zugriff auf alle Artikel haben, unabhängig davon, welchen Benutzergruppen sie zugeordnet sind.

## Kompatibilität

Dieses Modul ist kompatibel mit OXID ab Version 4.7.0 bis Version 4.10.x.


## Technical Explanation

The module adds a column *SPECIALRIGHTS* to the *oxarticles* table. There, a boolean value is saved.

If special rights are needed for an article, only users from a predefined user group (configurable via the module settings in the backend) is allowed to view this product.

Technically, this is realized using a view, namely the *oxv_articles_de_sr0* view, which contains all products which do not require special rights. In *functions.php*, the default OXID `getViewName()` function is replaced. The new `getViewName()` function checks for the user group of the user, and returns *oxv_articles_de* if the user has special rights, and *oxv_articles_de_sr0* otherwise.

Note that users which have admin rights automatically have special rights, regardless of their user groups.
