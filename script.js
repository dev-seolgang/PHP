// 근데 js 부분 (유효성 체크) 부분은 승규쌤이 가르쳐주신 방법이 훨씬 외우기 쉽고 구현하기 쉬울 듯 ㅋ

document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("form").addEventListener("submit", function(event) {
        const fields = [
            { name: "custname", label: "회원성명" },
            { name: "phone", label: "회원전화" },
            { name: "address", label: "회원주소" },
            { name: "joindate", label: "가입일자" },
            { name: "grade", label: "고객등급" },
            { name: "city", label: "도시코드" }
        ];
        for (let field of fields) {
            let input = document.querySelector(`input[name="${field.name}"]`);
            if (!input.value.trim()) {
                alert(`${field.label}이(가) 입력되지 않았습니다.`);
                input.focus();
                event.preventDefault();
                return;
            }
        }
    });
});