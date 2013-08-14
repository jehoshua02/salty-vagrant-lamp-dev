apache2:
    pkg:
        - installed
    service:
        - running
        - require:
            - pkg: apache2

/etc/apache2/sites-enabled:
    file.recurse:
        - source: salt://files/etc/apache2/sites-enabled
        - clean: true
        - require:
            - pkg: apache2
        - watch_in:
            - service: apache2

a2enmod vhost_alias:
    cmd.run:
        - unless: ls /etc/apache2/mods-enabled/vhost_alias.load
        - require:
            - pkg: apache2
        - watch_in:
            - service: apache2
