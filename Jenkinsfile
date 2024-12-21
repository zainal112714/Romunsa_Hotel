pipeline {
    agent any

    stages {
        stage('Teams') {
            steps {
                script {
                    def url = 'https://telkomuniversityofficial.webhook.office.com/webhookb2/4236462a-a0eb-49df-a58f-fae7bf9b4dc5@90affe0f-c2a3-4108-bb98-6ceb4e94ef15/IncomingWebhook/12a092609da04a80979dddad6e6806b7/c022d2a5-a58f-4370-b281-a1ccfdc91383/V2ua2B_VgGnYW8i9urxW4lmo6wNBqG7t_UUrQFy6OK30I1'
                    def payload = '{"text": "Tahap Plan telah dimulai dalam pipeline Jenkins."}'

                    def connection = new URL(url).openConnection()
                    connection.setRequestMethod('POST')
                    connection.setRequestProperty('Content-Type', 'application/json')
                    connection.setDoOutput(true)
                    connection.getOutputStream().write(payload.getBytes('UTF-8'))

                    def responseCode = connection.getResponseCode()
                    echo "Response Code: ${responseCode}"
                    def responseMessage = connection.getInputStream().getText()
                    echo "Response Message: ${responseMessage}"
                }
            }
        }
        stage('Github') {
            steps {
                echo 'Mengambil kode dari repository GitHub'
            }
        }
        stage('VsCode') {
            steps {
                echo 'Membangun aplikasi menggunakan Visual Studio Code'
            }
        }
        stage('Jenkins') {
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
