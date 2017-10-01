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

-- Phép join - thực hiện lấy phần chung 
-- của 2 tập dữ liệu trong 1 câu lệnh select
select 
		p.ProductID,
		p.ProductName,
		c.CategoryName,
		s.CompanyName as SupplierCompany
from Products p
join Categories c 
	on p.CategoryID = c.CategoryID
join Suppliers s
	on p.SupplierID = s.SupplierID
where p.ProductID = 2

-- Bai 1
select 
		concat(lower(FirstName), ' ', lower(LastName)) as 'Full name',
		TitleOfCourtesy
from Employees

-- Bai 2
select 
		concat(upper(FirstName), ' ', upper(LastName)) as 'Full name'
from Employees

-- Bai 3
select 
		EmployeeID,
		LastName,
		FirstName,

		Title,
		City,
		Country
from Employees
where Country = 'USA'

-- Bai 4
select 
	CustomerID,
	CompanyName,
	ContactName,

	ContactTitle,
	Country
from Customers
where Country = 'UK'

-- Bai 5
select 
	CustomerID,
	CompanyName,
	Address,

	City,
	Country
from Customers
where Country = 'Mexico'

-- Bai 6
SELECT
	CustomerID,
	CompanyName,
	Phone as phone,
	
	Address as address,
	City as city,
	Country
from Customers
where Country = 'Sweden'

-- Bai 7
select 
	ProductID,
	ProductName,
	UnitPrice,

	UnitsInStock

from Products
where UnitsInStock between 5 and 10

-- Bai 8
select 
	ProductID,
	ProductName,
	UnitPrice,

	ReorderLevel,
	UnitsOnOrder

from Products
where UnitsOnOrder between 60 and 100

-- Bai 9 - Lấy ra danh sách nhân viên 
-- và liệt kê đươcj số hoá đơn họ bán được trong năm 1996
select 
	e.EmployeeID,
	e.LastName,
	e.FirstName,

	e.Title,
	year(o.OrderDate) as OrderYear,
	count(o.OrderID) as 'total order' 
from Employees e
join Orders o
on e.EmployeeID = o.EmployeeID
group by e.EmployeeID
having OrderYear = 1996

-- Bai 10
select 
	e.EmployeeID,
	e.LastName,
	e.FirstName,

	e.City,
	e.Country,
	count(o.OrderID) as 'total order' 
from Employees e
join Orders o
	on o.EmployeeID = e.EmployeeID
where year(o.OrderDate) = 1998
group by e.EmployeeID

-- Bai 11
select 
	e.EmployeeID,
	e.LastName,
	e.FirstName,

	e.HireDate,
	count(o.OrderID) as 'total order' 
from Employees e
join Orders o
	on o.EmployeeID = e.EmployeeID
where year(o.OrderDate) between '1998-01-01' and '1998-07-31'
group by e.EmployeeID

-- Bai 14
select 
	concat(FirstName, ' ', LastName) as 'Full name',
	TitleOfCourtesy,
	if(TitleOfCourtesy = 'Mr.', 'Male', 'Female') as Sex
from Employees


-- Bai 15
select 
	concat(FirstName, ' ', LastName) as 'Full name',
	TitleOfCourtesy,
	if(TitleOfCourtesy = 'Mr.' or TitleOfCourtesy = 'Dr.', 'Male', 'Female') as Sex
from Employees

-- Bai 16
select 
	concat(FirstName, ' ', LastName) as 'Full name',
	TitleOfCourtesy,
	case 
		when TitleOfCourtesy = 'Mr.' then 'Male'
		when TitleOfCourtesy = 'Mrs.' or TitleOfCourtesy = 'Ms.' then 'Female'
		else 'Unknown'
	end as 'Sex'
from Employees











