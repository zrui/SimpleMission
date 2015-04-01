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
    - target: /root/Moova-j
    - require:
      - pkg: git
      - ssh_known_hosts: github.com

runsite:
  cmd.run:
    - name: |
        mvn package
        mv config/sitej.conf /etc/init/sitej.conf
        ln -s /etc/init/sitej.conf /etc/init.d/sitej
        service sitej start
    - cwd: /root/Moova-j
    - require:
      - git: sitej