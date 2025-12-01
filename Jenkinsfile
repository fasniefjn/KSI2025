pipeline {
    agent any
    stages {

        stage('Checkout') {
            steps { checkout scm }
        }

        stage('Install Dependencies') {
            steps {
                powershell 'composer install --no-interaction'
            }
        }

        stage('Unit Test') {
            steps {
                // Jika pakai Windows powershell
                powershell 'php vendor\\bin\\phpunit tests'
                // Jika pakai Linux agent, gunakan: sh 'vendor/bin/phpunit tests'
            }
        }

    }
    post {
        success { echo 'Pipeline sukses dijalankan!' }
        failure { echo 'Pipeline gagal!' }
    }
}
