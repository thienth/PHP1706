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
