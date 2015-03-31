install_java:
  pkg.installed:
    - name: oracle-java8-installer
    - require:
      - pkgrepo: java_repo


java_repo:
  pkgrepo.managed:
    - humanname: Oracle Java PPA
    - name: ppa:webupd8team/java
    