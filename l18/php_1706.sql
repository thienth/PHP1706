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

-- Sửa dữ liệu của các bản ghi trong 1 bảng
update tablename
set cột_1 = 'giá trị',
	cột_2 = 'giá trị',
	....
	cột_n = 'giá trị'
where điều kiện

-- xoá dữ liệu 
delete from tablename where điều kiện;
-- xoá dữ liệu đồng thời đánh lại index trong bảng
truncate table tablename;

-- lấy dữ liệu ra từ 1 bảng
select * from tên bảng;
-- lấy dữ liệu (chỉ những cột đc yêu cầu)
select 
		cột1 as tên khác, -- as là alias định danh hiển thị cho cột
		cột2,
		cột3,
		...
		cộtn
from tên bảng;

-- lấy dữ liệu trong bảng thoả mãn điều kiện
select 
		cột1 as tên khác, -- as là alias định danh hiển thị cho cột
		cột2,
		cột3,
		...
		cộtn
from tên bảng
where đk;
-- có các đk =   !=   >  >=  <  <= like

-- các hàm trong sql
-- count() - hàm đếm số bản ghi có trong kết quả
-- max()  - lấy số lớn nhất
-- min() - lấy số nhỏ nhất
-- sum() - tính tổng của các bản ghi
-- avg() - tính trung bình các giá trị

-- Khi sử dụng các hàm trên để tính ra giá trị của từng 
-- bản ghi 
-- thì bắt buộc phải nhóm chúng lại theo 1 
-- tiêu chí (group by)
-- Lấy tổng giá trị của từng sản phẩm còn trong kho hàng
select 
		ProductID,
		ProductName,
		sum(UnitPrice*UnitsInStock) as InStockTotal
from Products
group by ProductID

-- lấy ra các sản phẩm còn có trong kho 
-- và hiển thị tổng giá trị các sản phẩm
select 
		ProductID,
		ProductName,
		sum(UnitPrice*UnitsInStock) as InStockTotal
from Products
group by ProductID
having InStockTotal > 0
order by InStockTotal desc, ProductName desc, ProductID asc

-- trong bảng order detail
-- thực hiện câu lệnh lấy ra 
-- orderid, productid, totalproductprice
-- chỉ hiển thị các totalproductprice > 140
-- và nhóm them orderid

set global sql_mode='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
set session sql_mode='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
select 
		OrderID,
		ProductID,
		sum(UnitPrice*Quantity) as `totalprice`
from `Order Details` 
group by OrderID

-- limit - sử dụng để phân trang 
select * from tên bảng
limit số bản ghi sẽ bỏ qua, số bản ghi sẽ lấy tiếp





