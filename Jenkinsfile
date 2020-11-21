node {
   // This is to demo github action	
   // def sonarUrl = 'sonar.host.url=http://172.31.30.136:9000'
    def mvn = tool (name: 'mavennew', type: 'maven') + '/bin/mvn'
    stage('SCM Checkout'){
    // Clone repo
        
	git branch: 'main', 
	//credentialsId: 'github', 
	url: 'https://github.com/akshay2412/AuctionSellingWebsite.git'
  
   
   }
   stage('Mvn Package installation and build'){
	   // Build using maven
	   
	   bat "mvn clean package"
   }

   stage ('Testing')
   {
    echo "Successfull" 
   }

}
