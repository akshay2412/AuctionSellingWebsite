node {
   // This is to Jenkins pipeline
    stage('SCM Checkout'){
    // Clone repo
        
	git branch: 'main', 
	//credentialsId: 'github', 
	url: 'https://github.com/akshay2412/auctionsellingwebsite.git'
  
   
   }
   stage('Dependencies installation and build'){
	   
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
   stage ('Testing')
   {
//  bat 'python home.py'
    echo "VerySuccessfull   " 
  
   }
    stage ('Build and Deploy Docker Image')
   {
    
     docker.withRegistry('https://registry.hub.docker.com', 'Dockerhub') {
	     def customImage = docker.build("akshay2412/auctionsellingwebsite:8.0.0")
	      /*Push the container to the custom Registry */
	   customImage.push()
	     
    }
   }
}

