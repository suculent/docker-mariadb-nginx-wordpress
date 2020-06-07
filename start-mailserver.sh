#!/bin/bash

docker run \
    -d \
    --net=host \
    -e TZ=Europe/Prague \
    -e HTTP_PORT=9090 \
    -e HTTPS_PORT=4433 \
    -v $(pwd)/data:/data \
    -h "mail.zentour.net" \
    -t analogic/poste.io
