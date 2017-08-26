-- tạo mới csdl
-- create database php_1706 charset 'utf8' collate 'utf8_unicode_ci';
-- xoá csdl
-- drop database php_1706;

-- Khai báo sẽ sử dụng cơ sở dữ liệu này cho các câu lệnh tiếp thep
use php_1706;

-- Xoá bảng nêu tồn tại
drop table if exists student;

-- xoá bảng
-- drop table student;

-- tạo bảng
create table student (
	mssv int primary key auto_increment,
	ten varchar(255) not null,
	tuoi int default 20,
	que varchar(255) null,
	ngay_sinh date null
);

-- Thêm 1 cột vào bảng khi bảng đã tồn tại
alter table student 
add gioi_tinh int default 1; 

-- sửa 1 cột trong bảng đã tồn tại
alter table student 
modify column tuoi varchar(20) null; 

-- Đổi tên 1 cột thành 1 cột khác và set lại thuộc tính
alter table student 
change tuoi student_age int default 20;

-- Xoá 1 cột khỏi bảng
alter table student 
drop column gioi_tinh;

-- thêm dữ liệu vào trong 1 bảng
insert into student (ten, student_age, que, ngay_sinh)
values ('thienth', 50, 'ha nam ninh', '1991-02-03');


-- bài tập về nhà: Tạo bảng subjects
-- id int pk ai
-- subject_name varchar(255)
-- subject_code varchar(255) unique
-- semester int 

-- thêm ít nhất 10 bảng ghi cho bảng này (subjects) và bảng student 
-- (không có bản ghi nào được phép giống nhau).




