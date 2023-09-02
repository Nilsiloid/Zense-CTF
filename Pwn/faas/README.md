# FaaS

### Setup

```
docker build -t faas .
docker run --rm -p 1729:1337 faas
```

> I made Figlet-As-A-Service that runs on a Bash shell! Could you test if it's secure?

**Flag:** `ZenseCTF{e4sy-p345y-j41L}`

### Solution

Test random characters to see if something is filtered or not. One can find that the character `\`` is unfiltered. It so happens that backticks can also be used to execute code in a Bash shell.

```
`ls`

# . is filtered so you cannot use flag.txt
`cat flag*`
```
