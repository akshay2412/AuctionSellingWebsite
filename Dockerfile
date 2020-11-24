FROM php:7.0-cli
COPY . /usr/src/Devopspro
WORKDIR /usr/src/Devopspro
CMD [ "php", "./index.php" ]
EXPOSE 8000
#docker build -t devops-pro .
#docker run -it --rm --name my-running-app devops-pro
