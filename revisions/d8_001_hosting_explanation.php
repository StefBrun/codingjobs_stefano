<?php
/*

        Hosting your website
        1. Host
        2. Domain name

        // Type of hosting servers
        1.Shared hosting

        A physical server for multiple users
        Cons:
        - Shared resources: CPU / RAM, email, HDD
        - Unable to add its own server modules
        - Unable to change some server settings

        2.Dedicated hosting
        A server for me alone
        Sometimes a physical server with several virtual
        Disadvantages:
        - Cost
        - Server maintenance


        Examples of hosters:
        OVH, Gandi, 1 & 1


        Get a domain name
        Important: make the link with your server

        Go through a "registar" (reseller) who registers our domain name
        from "domain name registry"
        In France, the official register of domain names is AFNIC.
        You can rent domain names from registars,
        like OVH, Gandi, etc.


        IIt is possible to create subdomains:
                perso.example.com
                impots.gouv.fr

        They do not pay, once we rented the domain

        IP & DNS

        Computer address

        Network number and host number:
        192.168.0.1 / 16
        255.255.0.0

        Examples of address families:
                127.0.0.X (localhost)
                192.168.X.X (private network)
                10.0.0.X (private network)

        IPv4: 000.000.000.000 - 255.255.255.255
        IPv6: 0000.0000.0000.0000.0000.0000.0000.0000 - ffff.ffff.ffff.ffff.ffff.ffff.ffff.ffff

        IPv4: 4o: 256 ^ 4 = 4.2.10 ^ 9
        IPv6: 16o: 256 ^ 16 = 1.798.10 ^ 308

        IPv6: 667 million billion IP addresses available per square mm of the Earth's surface (3.4 × 10 ^ 38)


        Access a website: know your IP address
    
        DNS servers

        The DNS mechanism, basically:
        - URL entered
        - Cache address? If yes, we go
        - If no, DNS contacted
        - DNS returns the IP address of the site
        - If the DNS is not qualified to answer, it contacts a server that knows more than him
        - The DNS will look for the address from another server
        - It ends up returning to the client the right IP address


        Different types of DNS servers
 
        - Resolving name server
            Configured for each computer
        
        - Root name server (root server): 13
            a.root-servers.net - m.root-servers.net
            They know the address of the DNS servers of
            each top level domain
            (com, fr, net, it, de ...)

        - TLD name server
            One for each TLD

        - Authoritative name server
            There are several by TLD
            The DNS servers of the "com" domain know the address of the servers
            manager "google.com"


        cf https://www.youtube.com/watch?v=72snZctFFtA
        cf https://www.youtube.com/watch?v=oN7ripK5uGM

        Example of DNS configuration lines :

        Domaine         TTL     IN  Type    Valeur
        ---------------------------------------------------
        @               7200    IN  A       210.19.14.58
        @               7200    IN  MX 10   aspmx.1.google.com.
        @               7200    IN  MX 20   aspmx.2.google.com.
        uploads	        7200    IN  A       92.120.58.186
        www             7200    IN  A       92.89.25.201
        dev             7200    IN  CNAME   beta.myexample.com.

        One record per line:
        The domain name concerned
                @ refers to the base domain, for example choucroute.com
                To set the www.choucroute.com subdomain,
                just write `www`

        TTL: Time To Live specific to recording.
        It means here that other DNS servers will keep cached
        this subdomain for 7200 seconds (2H)

        Type: the type of record. Some lines serve
        to assign an IP to a subdomain (record type A),
        others to define the mail server for the domain (MX type), etc.

        Value: IP address or other domain name
 */