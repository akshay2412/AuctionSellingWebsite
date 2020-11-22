FROM php:7.4-cli
WORKDIR /usr/src/Devops_pro
RUN npm install
EXPOSE 8080
#docker build --tag devops_pro:1.0 .
#docker run --publish 8000:8080 --detach --name bb devops_pro:1.0
