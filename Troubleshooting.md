# WSL에서 PHP 세팅할 때 마주했던 트러블슈팅

## Failed to load resource: the server responded with a status of 500 (Internal Server Error)
> 이거 걍 php mysqli extension 세팅 안해줘서 그랬던거였음 ㅋ (Tlqkf)
```bash
sudo apt-get install php-mysql
```
## 파일 생성 오류
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
> [7.5.5]는 각각 [<소유자>.<그룹 사용자>.<기타 사용자>] 로 분류됨. 소유자만이 전체 권한을 갖고, 나머지 사용자는 읽기, 실행만 가능하고 쓰기는 불가능함.
> 구글링하면서 개발을 하든, 세팅을 하든 할 때, 각 명령어들이 무슨 역할을 하는지도 함께 공부하면서 하면 더 잘 기억함.
> 물론 하루 지나면 다 까먹음 ㅋ. 계속 써봐야함.
