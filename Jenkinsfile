pipeline {
    agent any

    stages {
        stage('Plan') {
            steps {
                echo 'Using Microsoft Teams for communication and planning'
            }
        }
        stage('Code') {
            steps {
                echo 'Fetching code from GitHub repository'
            }
        }
        stage('Build') {
            steps {
                echo 'Building the application using Visual Studio Code'
            }
        }
        stage('Test') {
            steps {
                echo 'Testing the application with Jenkins pipeline'
            }
        }
        stage('Expose') {
            steps {
                echo 'Exposing application locally using Ngrok'
            }
        }
        stage('Dockerize') {
            steps {
                echo 'Containerizing the application with Docker'
            }
        }
    }
}
