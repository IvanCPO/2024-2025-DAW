FROM debian:12

RUN apt update && apt install -y apache2

# RUN 

EXPOSE 80
EXPOSE 443
# CMD apache2ctl start && tail -f /dev/null
CMD apache2ctl -DFOREGROUND "$@"
