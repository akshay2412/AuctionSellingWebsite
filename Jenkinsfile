node {
   // This is to demo github action	
   // def sonarUrl = 'sonar.host.url=http://172.31.30.136:9000'
    //def mvn = tool (name: 'mavennew', type: 'maven') + '/bin/mvn'
	tool {
        maven 'Maven_3.5.2' 
    }
    stage('SCM Checkout'){
    // Clone repo
        
	git branch: 'main', 
	//credentialsId: 'github', 
	url: 'https://github.com/akshay2412/AuctionSellingWebsite.git'
  
   
   }
   stage('Mvn Package installation and build'){
	   // Build using maven
	   //def mvnHome = tool name: 'mavennew', type: 'maven'
	   //def mvnCMD  = "${mvnHome}/bin/mvn"
	   //bat "mvn clean compile"
	 withMaven(
        // Maven installation declared in the Jenkins "Global Tool Configuration"
        maven: 'maven-3', // (1)
        // Use `$WORKSPACE/.repository` for local repository folder to avoid shared repositories
        mavenLocalRepo: '.repository', // (2)
        // Maven settings.xml file defined with the Jenkins Config File Provider Plugin
        // We recommend to define Maven settings.xml globally at the folder level using
        // navigating to the folder configuration in the section "Pipeline Maven Configuration / Override global Maven configuration"
        // or globally to the entire master navigating to  "Manage Jenkins / Global Tools Configuration"
        mavenSettingsConfig: 'my-maven-settings' // (3)
    ) {

      // Run the maven build
      sh "mvn clean verify"

    } 
   }

   stage ('Testing')
   {
    echo "Successfull" 
   }

}
