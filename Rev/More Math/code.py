import hashlib
import sys

N = 24793
MOD = 1000000016531
VERIFY_KEY = "25bf463b459bdca8d84504bd3b34ee34"

def alpha(n):
    if n <= 1:
        return 1

    result = 0

    for i in range(n):
        result += alpha(i) * alpha(n - i - 1)
 
    return result


val = str(alpha(N) % MOD)
val_md5 = hashlib.md5(val.encode()).hexdigest()

if val_md5 != VERIFY_KEY:
    print("Wrong solution.")
    sys.exit(1)

key = str(hashlib.sha256(val.encode()).digest())
flag = "ctf{" + "".join(list([x for x in key if x.isalpha() or x.isnumeric()])) + "}"

print(flag)