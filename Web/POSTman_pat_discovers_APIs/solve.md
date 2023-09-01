# Solution

As the name suggests (viz. POST), this challenge involved the use of APIs.
<br />

On navigating to the infra, we get the following message as response from the base route: Message from Zense: send POSTman Pat to /flag to get the 4 hidden treasures. The purpose of this message is to lead us to /flag and send a POST request to it. On doing so, we get a random index (from 0 to 3) of the flag. We can note them down and stitch them together into the flag.
<br />

Quirk: There was a sneaky message in the question - Ask and you shall receive. If one puts a {"part" : "1"} json body in the POST request, they are guaranteed to receive the part of the flag with index 1. This way, the flag can be retrieved with precisely 4 API calls.
<br />

The flag is:
```
ZENSE{HOW_2_R3ND9R_AN_AP_HAHA_U_THOUGHT??}
```