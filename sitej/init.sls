github.com:
  ssh_known_hosts:
    - present
    - user: root
    - enc: rsa
    - fingerprint: 16:27:ac:a5:76:28:2d:36:63:1b:56:4d:eb:df:a6:48

git:
  pkg.installed:
    - name: git

sitej:
  git.latest:
    - name: https://github.com/zrui/Moova-j.git
    - rev: master
    - target: /root
    - require:
      - pkg: git
      - ssh_known_hosts: github.com

runsite:
  cmd.run:
    - unless: which mvn
    - name: |
        cd ~/Moova-j
        mvn compile exec:java -Dexec.mainClass="com.zeerui.App"
    - require:
      - git: sitej