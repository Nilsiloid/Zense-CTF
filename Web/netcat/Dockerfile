FROM python:3

RUN \
  apt-get update && \
  apt-get install -y socat && \
  useradd -m <user>

WORKDIR /home/<user>

COPY . .

RUN \
    chown -R root:root /home/<user> && \
    chmod -R 555 /home/<user>

USER <user>
CMD [ "socat", "TCP-LISTEN:1337,reuseaddr,fork", "EXEC:'python3 app.py'" ]
EXPOSE 1337
