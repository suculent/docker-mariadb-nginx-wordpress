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

**SSL Proxy**

START 23:20

Jsou vygenerované certifikáty a funguje SSL proxy, ale nefunguje prostup na nginx:8080 s wordpressem.

END 03:00

Nic nedorazí do frontendu, pokud je to z 80/443. Na portu 8080 HTTP funguje.

    ==> ssl.error.log <==
    2020/06/07 01:22:28 [error] 6#6: *1 connect() failed (111: Connection refused) while connecting to upstream, client: 86.49.11.212, server: www.zentour.net, request: "GET / HTTP/1.1", upstream: "http://192.168.64.2:8080/", host: "www.zentour.net"

    ==> ssl.access.log <==
    86.49.11.212 - - [07/Jun/2020:01:22:28 +0000] "GET / HTTP/1.1" 502 560 "-" "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36"


Ping funguje, curl tam není, apk index tam není.

    curl http://192.168.64.2:8080/

Ping funguje i lokálně, curl vrací connection rejected.

    root@zentour:~/zentour.net# curl http://192.168.64.2:8080/
    curl: (7) Failed to connect to 192.168.64.2 port 8080: Connection refused

Už to skoro jde, akorát při odstranění 8080 a SSL redirectu jsou obrázky servované z http://:8080 a to nejde...

3:22

### TODO

[ ] SSL proxy (částečně už funguje)

[ ] Rozchodit mailserver nebo jak je to s tím Hukotem?

# ACME.sh

Create certificate (does not work witnout --alpn on port 80, does not work when port is busy):

    acme.sh --alpn --standalone --issue -d www.zentour.net


    [Sun Jun  7 01:47:58 CEST 2020] Your cert key is in  /root/.acme.sh/www.zentour.net/www.zentour.net.key 
    [Sun Jun  7 01:47:58 CEST 2020] The intermediate CA cert is in  /root/.acme.sh/www.zentour.net/ca.cer 
    [Sun Jun  7 01:47:58 CEST 2020] And the full chain certs is there:  /root/.acme.sh/www.zentour.net/fullchain.cer 

Install/Reload (will change certificate internal format to pem):

    acme.sh --install-cert -d www.zentour.net \
        --key-file       /root/zentour.net/cert/key.pem  \
        --fullchain-file /root/zentour.net/cert/cert.pem