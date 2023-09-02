# Easy Login

### Setup

```dockerfile
docker build -t easylogin .
docker run --rm p 1234:80 easylogin
```

**Flag:** `ZenseCTF{php_15_34zy}`

#### Hints:

- Understand `preg_replace()` function

#### Solution

- `preg_replace()` has 3 parameters, `$pattern, $replacement, $string` .
- Here, the pattern we search for is `admin` from password field, so if we type something like`adadminmin`, which is basically `admin` embedded inside `admin` the `admin` part gets replaced and we get the flag. 
