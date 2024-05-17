# wsl2 Ubuntu 에서 PHP 개발환경 세팅하기
## 기본
### 패키지 업데이트
```bash
sudo apt update
```
## 아파치
### 아파치 설치
```bash
sudo apt install apache2
```
### 아파치 버전 확인
```bash
sudo apache2ctl -v
```
### 방화벽 설정 (ufw가 설치되어있지 않으면 설치하기)
```bash
sudo ufw allow 'Apache'
```
### 방화벽 설정 확인
```bash
sudo ufw status
```
### 방화벽 허용 활성화
```bash
sudo ufw enable
```
### 아파치 활성 상태 확인
```bash
sudo systemctl status apache2
```
### 최종 확인
> http://localhost/
## PHP
### PHP 설치
```bash
sudo apt-get install php
```
### PHP 디렉토리 경로 설정
```bash
mkdir -p /home/<username>/<directory_path>
```
### PHP 디렉토리 경로로 이동
```bash
cd /home/<username>/<directory_path>
```
### info.php 파일 생성
```bash
sudo touch info.php
```
### info.php 파일 작성(수정)
```bash
sudo vi info.php
```
### vi로 연 편집기에서 아래 코드 작성 및 저장
```vi
<?php phpinfo(); ?>
```
### 결과 확인
> http://localhost/info.php
