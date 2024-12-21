pipeline {
    agent any

    stages {
        stage('Teams') {
            steps {
                echo 'Using Microsoft Teams for communication and planning'
            }
        }
        stage('Github') {
            steps {
                echo 'Fetching code from GitHub repository'
            }
        }
        stage('VsCode') {
            steps {
                echo 'Building the application using Visual Studio Code'
            }
        }
        stage('Jenkins') {
            steps {
                echo 'Testing the application with Jenkins pipeline'
            }
        }
        stage('Ngrok') {
            steps {
                echo 'Exposing application locally using Ngrok'
            }
        }
        stage('Docker') {
            steps {
                echo 'Containerizing the application with Docker'
            }
        }
    }
}
