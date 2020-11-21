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
	   bat "mvn clean compile"
   }

   stage ('Testing')
   {
    echo "Successfull" 
   }

}
