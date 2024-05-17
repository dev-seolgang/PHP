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
## 그 외 오류
> php 개발 디렉토리에서 파일을 생성하려는데 권한 부족의 이유로 오류가 발생할 수 있음 그럴때는 그냥 루트 사용자로 전환해서 해당 사용자한테 디렉토리 권한 부여해주면 끝임
### 디렉토리 및 하위 파일에 대한 소유권 부여
```bash
sudo chown -R k2404:k2404 /home/<username>/<directory_path>
```
### 디렉토리 및 하위 파일에 대한 권한 부여
```bash
sudo chmod -R 755 /home/<username>/<directory_path>
```
> 여기서 755는 뭐냐
> 쉽게 말하면 그냥 권한 부여 해주는 명령어 같은건데,
> 리눅스에서는 파일에 대한 권한을 3개로 분류함. (읽기:4, 쓰기:2, 실행:1)
> 그래서 7을 준다고 하면 모든 권한을 준다는거임.
> 근데 왜 755 같이 3번을 반복하냐,
> 7.5.5는 각각 소유자.그룹 사용자.기타 사용자 로 분류됨. 소유자만이 전체 권한을 갖고, 나머지 사용자는 읽기, 실행만 가능하고 쓰기는 불가능함.
> 구글링하면서 개발을 하든, 세팅을 하든 할 때, 각 명령어들이 무슨 역할을 하는지도 함께 공부하면서 하면 더 잘 기억함.
> 물론 하루 지나면 다 까먹음 ㅋ. 계속 써봐야함.
