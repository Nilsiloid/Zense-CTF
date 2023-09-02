# HashCatch

### Setup

```dockerfile
docker build -t hashcatch .
docker run --rm p 8080:80 hashcatch
```

>

**Flag:** `ZenseCTF{c011i5i0N_d373c73d}`

#### Hints:

- What is the difference between `==` and `===` ?

#### Solution

This challenge involves understanding of hash collisions/ type juggling.

- We compare hashes of `username` and `password` and return flag if they are equal.
- Use https://github.com/spaze/hashes as reference for magic hashes
