# Solution

*This is merely the solution. In-depth author writeups will be available 2023.09.07 at [shawnd.xyz/blog](https://shawnd.xyz/blog/).*

Open the pcap in Wireshark and filter for HTTP traffic. Observe the attacker achieve RCE via exploitation of the vulnerable web application. The flag is found in one of the commands the attacker remotely executed on the server, present in packet 1302.

```
ZenseCTF{w3lc0me_t0_th3_w0rld_0f_d1g17al_f0r3ns1cs}
```
