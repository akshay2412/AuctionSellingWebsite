FROM php:7.4-cli
COPY . /usr/src/Devops-pro
WORKDIR /usr/src/Devops-pro
CMD [ "php", "./index.php" ]
docker build -t devops-pro .
docker run -it --rm --name my-running-app devops-pro
