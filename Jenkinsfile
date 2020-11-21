node {
   // This is to demo github action	
   // def sonarUrl = 'sonar.host.url=http://172.31.30.136:9000'
    def mvn = tool (name: 'maven3', type: 'maven') + '/bin/mvn'
    stage('SCM Checkout'){
    // Clone repo
        
	git branch: 'main', 
	//credentialsId: 'github', 
	url: 'https://github.com/akshay2412/AuctionSellingWebsite.git'
  
   
   }
   stage('Mvn Package installation and build'){
	   // Build using maven
	   
	   sh "${mvn} clean package deploy"
   }

   stage ('Testing')
   {
    echo "Successfull" 
   }

}
