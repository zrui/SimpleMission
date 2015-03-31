java_repo:
  pkgrepo.managed:
    - ppa: webupd8team/java
    - require_in: install_java

install_java:
  pkg.latest:
    - name: oracle-java8-installer

oracle-java-license-autoaccept:
  debconf.set:
    - data:
        'shared/accepted-oracle-license-v1-1': {'type': 'boolean', 'value':True}
    - require_in:
      - pkg: install_java

    