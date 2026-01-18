# GravUploadInfo
Grav Plugin, Fornisce informazioni dinamiche sui limiti di configurazione del server PHP direttamente all'interno dei Blueprint dell'amministrazione di Grav.
Questo plugin è una utility leggera, il suo scopo è fornire informazioni dinamiche sui limiti di configurazione del server PHP direttamente all'interno dei Blueprint dell'amministrazione di Grav.

### Perché è utile?
Spesso i curatori caricano file PDF o immagini che superano i limiti imposti dal server (upload_max_filesize). Questo plugin mostra dinamicamente questi limiti sotto i campi di upload, evitando errori silenziosi e confusione.

### Installazione
Copia i file del plugin nella seguente directory: user/plugins/upload-helper

### Utilizzo nei Blueprint
Per visualizzare i limiti del server in un campo file o filepicker, aggiungi la proprietà help@ richiamando la funzione del plugin nel tuo file YAML:

Questo plugin è una utility leggera progettata per la Fondazione Sergio Poggianella. Il suo scopo è fornire informazioni dinamiche sui limiti di configurazione del server PHP direttamente all'interno dei Blueprint dell'amministrazione di Grav.

Perché è utile?
Spesso i curatori caricano file PDF o immagini che superano i limiti imposti dal server (upload_max_filesize). Questo plugin mostra dinamicamente questi limiti sotto i campi di upload, evitando errori silenziosi e confusione.

Installazione
Copia i file del plugin nella seguente directory: user/plugins/upload-helper

Utilizzo nei Blueprint
Per visualizzare i limiti del server in un campo file o filepicker, aggiungi la proprietà help@ richiamando la funzione del plugin nel tuo file YAML:

```yaml
      fields:
        header.mio_file:
          type: filepicker
          label: Carica Documento
          folder: 'self@'
          accept:
            - .pdf
          # Qui avviene la magia:
          help@: '\Grav\Plugin\GravUploadInfoPlugin::getPhpLimits'
```
### Cosa restituisce
Il plugin interroga le impostazioni ini di PHP e restituisce una stringa formattata come segue: ⚙️ Server Limits — File Max: 8M | Post Max: 16M | RAM: 128M

### Requisiti
* Grav CMS v1.6 o superiore.
* Accesso alle funzioni ini_get di PHP.
