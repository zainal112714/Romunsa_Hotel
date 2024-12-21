pipeline {
    agent any

    stages {
        stage('Teams') {
            steps {
                script {
                    echo 'Menggunakan Microsoft Teams untuk komunikasi dan perencanaan'
                    // Kirim pesan ke Microsoft Teams
                    def response = httpRequest(
                        httpMode: 'POST',
                        url: 'https://telkomuniversityofficial.webhook.office.com/webhookb2/4236462a-a0eb-49df-a58f-fae7bf9b4dc5@90affe0f-c2a3-4108-bb98-6ceb4e94ef15/IncomingWebhook/12a092609da04a80979dddad6e6806b7/c022d2a5-a58f-4370-b281-a1ccfdc91383/V2ua2B_VgGnYW8i9urxW4lmo6wNBqG7t_UUrQFy6OK30I1', // Ganti dengan URL webhook Teams Anda
                        contentType: 'APPLICATION_JSON',
                        requestBody: """
                        {
                            "text": "Tahap Plan telah dimulai dalam pipeline Jenkins."
                        }
                        """
                    )
                    echo "Response dari Teams: ${response.status}, Body: ${response.content}"
                }
            }
        }
        stage('GitHub') {
            steps {
                // Mengambil kode dari repositori GitHub
                git branch: 'main', url: 'https://github.com/zainal112714/Romunsa_Hotel.git'
            }
        }
        stage('Build') {
            steps {
                echo 'Membangun aplikasi menggunakan Visual Studio Code'
            }
        }
        stage('Test') {
            steps {
                echo 'Menguji aplikasi dengan pipeline Jenkins'
            }
        }
        stage('Ngrok') {
            steps {
                echo 'Mengekspos aplikasi secara lokal menggunakan Ngrok'
            }
        }
        stage('Docker') {
            steps {
                echo 'Membuat container untuk aplikasi menggunakan Docker'
            }
        }
    }
}
