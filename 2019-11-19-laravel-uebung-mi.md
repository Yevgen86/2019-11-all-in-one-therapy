# Übungsaufgabe für morgen Mittwoch

1. Übungsaufgaben von Dienstag finalisieren.
2. Sobald diese fertig sind:

## Patienten-Verwaltung finalisieren

    * Jede Zeile in der patients-view soll auf die entsprechende Detail-View verlinken.
    * Die Detail-View soll via Get-Route /patient/{id} für bestehende Patienten sowie über /patient/new für neue Patienten zugänglich sein
    * Die Detailansicht soll für jedes editierbare Feld des Patienten ein Textfeld anzeigen.
    * Die Detailansicht soll einen Submit-Button enthalten und einen Link, der zurück auf die Übersicht zeigt.
    * Verwenden Sie die Methode PatientController@edit (Parameter $id), um die Detail-View mit einem bestehenden Patienten zu laden. Übergeben Sie der View den Patienten via Variable $patient
    * Verwenden Sie die Methode PatientController@create, um die Detail-View für einen neuen Patienten aufzurufen. Bedenken Sie: In der View gibt es in diesem Fall keine Variable $patient.
    * Speichert der Nutzer das Formular, soll via Post-Route /patient{id} die Methode PatientController@store das Model speichern

## Dokumentation verwalten

Model Documentation mit Tabelle documentations anlegen. Benötigte Spalten:

    * id (Primärschlüssel, Auto-Increment)
    * user_id (Fremdschlüssel zu users) (Datentyp unsignedBigInteger verwenden)
    * patient_id(Fremdschlüsselzu patients) (Datentyp unsignedBigInteger verwenden)
    * text
    * die üblichen Timestamps

Wird ein Patient gelöscht, sollen automatisch seine Dokus gelöscht werden (->onDelete('cascade') zu patient_id hinzufügen)

    * Verwenden Sie den Seeder aus dem Anhang, um Documentations zu befüllen.

    * Für das Anlegen von Dokumentationen benötigen Sie keine eigene View.
    
    * Bearbeiten oder Löschen von Dokumentationen ist nicht vorgesehen.

    * Die Dokumentationen eines Patienten, die vom aktuellen User erstellt wurden, sollen auf der Detailseite eines Patienten angezeigt werden.

    * Ebenfalls auf der Detailseite soll der Benutzer bestehende Dokumentationen anzeigen nd neue Dokumentationen eintragen können (Benutzer und Patient sollen dabei automatisch befüllt werden).

    * Eine eigene View 'documentations' soll via Get-Route '/documentations' zugänglich sein und nur die vom aktuellen Benutzer verfassten, bestehenden Dokumentationen (aller Patienten) nach Erstelldatum absteigend sortiert anzeigen
