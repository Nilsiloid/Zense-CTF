# Segfault

### Setup

```
docker build -t babybof .
docker run --rm -p 13131:1337 babybof
```

<br/>

> Will you return as a winner?

**Flag:** `ZenseCTF{c_1s_4_c00l_pr0gr4mm1n6_l4nguag3}`

<br/>

### Solution

ret2win style buffer overflow to overwrite the return pointer and execute another function. More can be read about this sort of challenge [here](https://ir0nstone.gitbook.io/notes/types/stack/ret2win).

Solve script `exploit.py` present with comments explaining payload. To really understand what's happening, you can watch LiveOverflow series on Binary Exploitation and Reversing on Youtube.
