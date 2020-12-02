pipeline {
   // This is to Jenkins pipeline
    agent { docker { image 'python:2.7.0' } }

	
	stages{
    stage('SCM Checkout'){
    // Clone repo
        steps{
	git branch: 'main', 
	//credentialsId: 'github', 
	url: 'https://github.com/akshay2412/auctionsellingwebsite.git'
              }
  
   
   }
   stage(' Dependencies installation and build'){
	steps{   
                    withMaven(
        // Maven installation declared in the Jenkins "Global Tool Configuration"
        maven: 'maven-3', // (1)
        // Use `$WORKSPACE/.repository` for local repository folder to avoid shared repositories
        mavenLocalRepo: '.repository', // (2)
        // Maven settings.xml file defined with the Jenkins Config File Provider Plugin
        // We recommend to define Maven settings.xml globally at the folder level using
        // navigating to the folder configuration in the section "Pipeline Maven Configuration / Override global Maven configuration"
        // or globally to the entire master navigating to  "Manage Jenkins / Global Tools Configuration"
        mavenSettingsConfig: '05e11f96-9451-45ba-9e6a-3aa0842654eb' // (3)
    ) {

      // Run the maven build
         bat 'mvn clean install'

    }
	}
}
     

   stage ('Testing')
   {
   // echo "Successfull" 
steps{
	  bat 'python home.py'
}
   }
    stage ('Build and Deploy Docker Image')
   {
    steps{
     docker.withRegistry('https://registry.hub.docker.com', 'Dockerhub') {
	     def customImage = docker.build("akshay2412/auctionsellingwebsite:7.0.0")
	     /* Push the container to the custom Registry */
	     customImage.push()
}
	     
    }
   }
  // stage('Deploy Docker Image')
   //{
	  //def dockerRun = "docker run -d -p 8080:8080 --name=devopspro akshay2412/auctionsellingwebsite:3.0.0"
	  //sshagent(credentials: ['sshcred']) {
		//bat "ssh -o StrictHostKeyChecking=no ec2-user@172.31.43.90  ${dockerRun} "
		//}
	     //def tomcatDevIp = '172.31.28.172'
	   //def tomcatHome = '/opt/tomcat8/'
	   //def webApps = tomcatHome+'webapps/'
	   //def tomcatStart = "${tomcatHome}bin/startup.sh"
	   //def tomcatStop = "${tomcatHome}bin/shutdown.sh"
	  // echo "hlo"
	   //sshagent (credentials: ['sshcred2']) {
		//   echo "hi"
	      //bat "scp -o StrictHostKeyChecking=no target/myweb*.war akshay2412@${tomcatDevIp}:${webApps}myweb.war"
          //bat "ssh akshay2412@${tomcatDevIp} ${tomcatStop}"
		//  bat "ssh akshay2412@${tomcatDevIp} ${tomcatStart}"
       //}
	
         // bat 'docker run --rm --name hello-world-test auctionsellingwebsite:7.0.0'
 		   
	   
   //}
	//}


}
   
}
