node {
   // This is to demo github action	
   // def sonarUrl = 'sonar.host.url=http://172.31.30.136:9000'
    //def mvn = tool (name: 'mavennew', type: 'maven') + '/bin/mvn'       maven 'Maven_3.5.2' 
    stage('SCM Checkout'){
    // Clone repo
        
	git branch: 'main', 
	//credentialsId: 'github', 
	url: 'https://github.com/akshay2412/auctionsellingwebsite.git'
  
   
   }
   stage('Mvn Package installation and build'){
	   
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
    stage ('Push Docker Image')
   {
     docker.withRegistry('https://registry.hub.docker.com', 'Dockerhub') {

        def customImage = docker.build("akshay2412/auctionsellingwebsite:3.0.0")

        /* Push the container to the custom Registry */
        customImage.push()
    }
   }
   stage('Run and build Docker Image')
   {
	  sshagent (credentials: ['a9ced8d9-4558-463a-b0b8-61236ddf49f4']) {
		 //def dockerRun = "docker run -d -p 8080:8080 --name=devopspro akshay2412/auctionsellingwebsite:3.0.0"
		// bat "ssh -o StrictHostKeyChecking=no ec2-user@172.31.43.90  ${dockerRun} "
		}
   }
   stage ('Testing')
   {
    echo "Successfull" 
   }

}
