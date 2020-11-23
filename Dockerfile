FROM php:7.0-cli
COPY . /usr/src/Devops-pro
WORKDIR /usr/src/Devops-pro
CMD [ "php", "./index.php" ]
EXPOSE 80
#docker build -t devops-pro .
#docker run -it --rm --name my-running-app devops-pro
