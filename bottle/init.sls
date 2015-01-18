include:
  - pip

bottle:
  cmd.wait:
    - name: 'pip install bottle'
    - watch:
      - pkg: python-pip
