# Solution

This question involves installing a python package and finding hidden functionalities hidden in it. While there are a few shortcuts to this (viz. downloading the zip files from the package listing), this is the comprehensive way.

```
pip install --upgrade zensectfpy.
```

To show where we can find the site packages, we run pip show zensectfpy and navigate to that location.
cd zensectfpy/ and ls shows us that there is a "hidden" file.

cat top_secret_wisefox_64.py reveals the flag... almost.

```
 ❯ cat top_secret_wisefox_64.py
"""
    This file should be top-secret
    If you can read this and are looking for the flag, you're in the right place!
"""
```

```
enc_flag = "WkVOU0V7U0lURV9QQUNLQUdFU19XSEVSRVJVIV9WRVJZX1dJU0VfRk9YfQ=="
```

On passing enc_flag through a base64 decoder (we get the hint that it's base64 through the file name), we can get the flag!!

The flag is:

```
ZENSE{SITE_PACKAGES_WHERERU!_VERY_WISE_FOX}
```
