FROM python:3

RUN \
  useradd -m <user> && \
  apt-get update && \
  apt-get install -y socat figlet

WORKDIR /home/<user>

COPY . .

RUN \
  chown -R root:root /home/<user> && \
  chmod -R 555 /home/<user>

USER <user>
CMD [ "socat", "TCP-LISTEN:1337,reuseaddr,fork", "EXEC:'python3 faas.py'" ]
EXPOSE 1337
