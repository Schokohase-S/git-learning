import hashlib
import requests
import re as reee

passwort = input("Her mit dem Passwort!: ")

SHA1 = hashlib.sha1(passwort.encode('utf-8'))
passworthash = SHA1.hexdigest().upper()
prafix = passworthash[0:5]
url = "https://api.pwnedpasswords.com/range/{}".format(prafix)
header = {'User-Agent': 'JessiBLABLAdingsdabumsda'}
req = requests.get(url, headers = header).content.decode('utf-8')
hashes = req.split('\r\n')
for suffix in hashes:
        hash_list = reee.sub(r':(.*)', "", req).split('\n')
for i in hash_list:
        testhash = prafix + i
        if passworthash == testhash:
                print("oh shit")
                exit()
print("super")


