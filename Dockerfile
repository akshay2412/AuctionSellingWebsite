FROM php:7.0-apache
COPY . /usr/src/auction
WORKDIR /usr/src/auction
CMD [ "php", "./auction/index.php" ]
EXPOSE 80
#docker build -t auctionsellingwebsite .
#docker run -it --rm --name my-running-app auctionsellingwebsite
  
#FROM tomcat:8
# Take the war and copy to webapps of tomcat
#COPY target/*.war /usr/local/tomcat/webapps/myweb-0.0.11.war
