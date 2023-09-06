# Solution

*This is merely the solution. In-depth author writeups will be available 2023.09.07 at [shawnd.xyz/blog](https://shawnd.xyz/blog/).*

There are a lot of ways to approach this problem. Analyzing the memdump with a tool such as Volatility 3 reveals the `czip` process. Volatility 3 reveals the virtual memory address ranges of `czip`. You need to translate this to the physical address ranges present in the memdump.

This is a non-trivial process that requires deep knowledge of operating systems. I'll be going over the process in my in-depth author writeups available 2023.09.07 at [shawnd.xyz/blog](https://shawnd.xyz/blog/). Until then, the solution involves discovering the malware's physical memory address containing the flag at 0x203ffc80.

```
ZenseCTF{memdumps_c4n_t3ll_y0u_a_l0t_ab0ut_wh4t_h4pp3n3d}
```
