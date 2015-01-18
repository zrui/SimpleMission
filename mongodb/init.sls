mongodb:
  pkg.installed
  service.running
    - watch:
      - file: /etc/mongodb.conf
    - require:
      - pkg: mongodb
      
/etc/mongodb.conf
  file.managed:
    - source: salt://mongodb/mongodb.conf
    - require:
      - pkg: mongodb