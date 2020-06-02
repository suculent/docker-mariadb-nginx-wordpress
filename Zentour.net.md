# Žentour.net

## Logbook

### 22/04/2020

START <nevim>

> hukot.net: 46.36.37.63

* Přístup k serveru, zabezpečení přístupu, firewall, testovací instalace

KONEC <cca po 1h>

### 24/05/2020

START 21.00

**Web Server**

* Vytvoření repozitáře (transparentní datový úložiště – kdybychom to chtěli někomu předat)
* přístupové klíče ke zdroji dat pro server
* převod domény ze starých DNS serverů na Forpsi.com
* nastavené nové IP adresy 46.36.37.63

* Změna DNS otestována, zentour.net i www.zentour.net nyní odkazuje na nový server

**Mail Server**

> Administrace na admin.hukot.net

Na Hukotu není momentálně aktivní služba Mailserver, píšu na podporu, co je pro to potřeba udělat.


KONEC 23:15

Už toho mám dost, server/loadbalancer nenabíhá, nevim kde je problém, jsem při neděli večer docela unavenej.


### 1/06/2020

START 21.30

**Web Server**

* Všechno znova, rozchození aktualizované verze Wordpressu bez HTTPS.

LOG 23.42

* Prázdná Wordpress-site běží na adrese http://www.zentour.net:8080, login zentour heslo H7VO#vEMERyP6BiGpK

* Příprava branche s load-balancerem/SSL

END 1.30 

SUBTOTAL 6h

### TODO

[ ] Dodělat SSL přes traefik s auto-restartem (traefik musí jít asi na jiný port než 8080 nebo proč jinde ten nginx nejde?)

[ ] Rozchodit mailserver nebo jak je to s tím Hukotem?

[x] Dodělat volumes nebo opravit tak, aby fungovaly zápisy
