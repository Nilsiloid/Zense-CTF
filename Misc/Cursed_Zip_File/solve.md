# Solution

This is a simple challenge regarding zipped files.

The "Cursed" aspect of this challenge is that there are multiple nested `zip` directories, opening them up one by one leads to `flag.txt`, which incidentally is also a zip file!

Hence, running `unzip` multiple times leads us to `flag.txt`, and `cat flag.txt` exposes the flag.

The flag is:

```
ZENSE{ALL_TH3_ZIP_FILES_9gjq1}
```
