php5:
    pkg.installed

libapache2-mod-php5:
    pkg.installed:
        - require:
            - pkg: apache2
            - pkg: php5

php5-mysql:
    pkg.installed:
        - require:
            - pkg: mysql5
            - pkg: php5
