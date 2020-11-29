#FROM php:7.0-cli
#COPY . /usr/src/ourpro
#WORKDIR /usr/src/ourpro
#CMD [ "php", "./index.php" ]
#EXPOSE 80
#docker build -t devops-pro .
#docker run -it --rm --name my-running-app devops-pro
  
#FROM tomcat:8
# Take the war and copy to webapps of tomcat
#COPY target/*.war /usr/local/tomcat/webapps/myweb-0.0.11.war
