FROM php:7.4-cli
WORKDIR /usr/src/Devops_pro
RUN npm install
docker build -t devops-pro .
docker run -it --rm --name my-running-app devops-pro
