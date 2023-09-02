FROM ubuntu:latest

RUN \
  useradd -m <user> && \
  apt-get update && \
  apt-get install -y gcc

WORKDIR /home/<user>

COPY . .

RUN \
  chown -R root:root /home/<user> && \
  chmod -R 555 /home/<user> && \
  ./compile.sh

USER <user>
CMD ./ynetd -p 1337 ./babybof
EXPOSE 1337
