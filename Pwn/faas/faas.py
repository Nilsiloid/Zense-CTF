import string
import os

print('Try my new Software-As-A-Service. This is FaaS (aka Figlet-As-A-Service)!\n', flush = True)

filtered = string.punctuation
filtered = filtered.replace('`', '').replace('*', '')

cmd = input('>>> ')

for c in filtered:
  if c in cmd:
    print('Your input contains a filtered character!')
    exit()

os.system(f'figlet {cmd}')
