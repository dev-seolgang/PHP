-- member_tbl_02
CREATE TABLE member_tbl_02 (
    custno INT(6) NOT NULL PRIMARY KEY,
    custname VARCHAR(20),
    phone VARCHAR(13),
    address VARCHAR(60),
    joindate DATE,
    grade CHAR(1),
    city CHAR(2)
);

-- member_tbl_02 데이터 삽입
INSERT INTO member_tbl_02 (custno, custname, phone, address, joindate, grade, city) VALUES
('10001', '김행복', '010-1111-2222', '서울 동대문구 휘경1동', '2015-12-02', 'A', '01'),
('10002', '이축복', '010-1111-3333', '서울 동대문구 휘경2동', '2015-12-06', 'B', '01'),
('10003', '장믿음', '010-1111-4444', '울릉군 울릉읍 독도1리', '2015-10-01', 'B', '30'),
('10004', '최사랑', '010-1111-5555', '울릉군 울릉읍 독도2리', '2015-11-13', 'A', '30'),
('10005', '진평화', '010-1111-6666', '제주도 제주시 외나무골', '2015-12-25', 'B', '60'),
('10006', '차공단', '010-1111-7777', '제주도 제주시 감나무골', '2015-12-11', 'C', '60');

-- member_tbl_02
CREATE TABLE money_tbl_02 (
    custno INT(6) NOT NULL,
    salenol INT(8) NOT NULL,
    pcost INT(8),
    amount INT(4),
    price INT(8),
    pcode VARCHAR(4),
    sdate DATE,
    PRIMARY KEY(custno, salenol)
);

-- member_tbl_02 데이터 삽입
INSERT INTO money_tbl_02 (custno, salenol, pcost, amount, price, pcode, sdate) VALUES
('10001', '20160001', 500, 5, 2500, 'A001', '2016-01-01'),
('10001', '20160002', 1000, 4, 4000, 'A002', '2016-01-01'),
('10001', '20160003', 500, 3, 1500, 'A008', '2016-01-01'),
('10002', '20160004', 2000, 1, 2000, 'A004', '2016-01-02'),
('10002', '20160005', 500, 1, 500, 'A001', '2016-01-03'),
('10003', '20160006', 1500, 2, 3000, 'A003', '2016-01-03'),
('10004', '20160007', 500, 2, 1000, 'A001', '2016-01-04'),
('10004', '20160008', 300, 1, 300, 'A005', '2016-01-04'),
('10004', '20160009', 600, 1, 600, 'A006', '2016-01-04'),
('10004', '20160010', 3000, 1, 3000, 'A007', '2016-01-06');