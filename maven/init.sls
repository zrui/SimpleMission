maven:
  pkg.installed:
    - unless: which java
    - name: maven