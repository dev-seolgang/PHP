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
> 굳이 vi로 편집 안해도 되지만 에디터 키고 뭐하고 하기 귀찮으니 vi로 ㄱㄱ
```vi
<?php phpinfo(); ?>
```
> 이건 걍 phpinfo(); 라는 내장함수 실행시켜서 php 페이지 잘 뜨나 테스트 하는거임 (아마도 ㅋ)
### 결과 확인
> http://localhost/info.php

## MySQL Server
### MySQL Server 설치
```bash
sudo apt install mysql-server -y
```
### 설치 확인
> 루트 계정 접속
```bash
mysql -u root -p
```
> 만약 ERROR 1698 어쩌고 하면 걍 sudo su 쳐서 걍 (우분투)루트 계정으로 실행 ㄱㄱ
### 데이터베이스 조회
```bash
show databases;
```
