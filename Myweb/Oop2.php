<?php
// 1. Xây dựng lớp Nguoi
class Nguoi {
    public $hoTen;
    public $ngaySinh;
    public $gioiTinh;

    public function __construct($hoTen, $ngaySinh, $gioiTinh) {
        $this->hoTen = $hoTen;
        $this->ngaySinh = $ngaySinh;
        $this->gioiTinh = $gioiTinh;
    }

    public function hienThiThongTin() {
        return "<td>{$this->hoTen}</td>
                <td>{$this->ngaySinh}</td>
                <td>{$this->gioiTinh}</td>";
    }
}
// 2. Xây dựng lớp SinhVien kế thừa lớp Nguoi

class SinhVien extends Nguoi {
    public $maSV;
    public $nganh;

    public function __construct($maSV, $hoTen, $ngaySinh, $gioiTinh, $nganh) {
        parent::__construct($hoTen, $ngaySinh, $gioiTinh);
        $this->maSV = $maSV;
        $this->nganh = $nganh;
    }

    public function hienThiThongTin() {
        return "<tr>
                    <td>{$this->maSV}</td>" 
                    parent::hienThiThongTin() 
                    "<td>{$this->nganh}</td>
                </tr>";
    }
}

// 3. Tạo danh sách 10 sinh viên
$danhSachSV = [
    new SinhVien("SV001", "Nguyễn Văn A", "2003-01-12", "Nam", "Công nghệ thông tin"),
    new SinhVien("SV002", "Trần Thị B", "2003-03-20", "Nữ", "Kế toán"),
    new SinhVien("SV003", "Lê Văn C", "2002-12-10", "Nam", "Quản trị kinh doanh"),
    new SinhVien("SV004", "Phạm Thị D", "2004-04-01", "Nữ", "Tài chính ngân hàng"),
    new SinhVien("SV005", "Ngô Văn E", "2003-06-06", "Nam", "Kỹ thuật phần mềm"),
    new SinhVien("SV006", "Vũ Thị F", "2003-07-22", "Nữ", "Thương mại điện tử"),
    new SinhVien("SV007", "Hoàng Văn G", "2002-09-09", "Nam", "Công nghệ thông tin"),
    new SinhVien("SV008", "Bùi Thị H", "2004-02-18", "Nữ", "Kinh tế quốc tế"),
    new SinhVien("SV009", "Đinh Văn I", "2003-11-11", "Nam", "Marketing"),
    new SinhVien("SV010", "Phan Thị K", "2003-05-15", "Nữ", "Công nghệ phần mềm")
];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(120deg, #89f7fe, #66a6ff);
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            margin-top: 30px;
            color: #fff;
            text-shadow: 1px 1px 3px #333;
        }
        table {
            border-collapse: collapse;
            width: 85%;
            margin: 30px auto;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        th, td {
            padding: 12px 15px;
			text-align: center;
        }
        th {
            background-color: #007BFF;
            color: white;
            font-size: 18px;
        }
        tr:nth-child(even) {
            background-color: #f2f9ff;
        }
        tr:nth-child(odd) {
            background-color: #e9f3ff;
        }
        tr:hover {
            background-color: #d1e7fd;
            transition: 0.3s;
        }
        td {
            color: #333;
            font-size: 16px;
        }
        footer {
            text-align: center;
            padding: 10px;
            color: #fff;
            font-style: italic;
        }
    </style>
</head>
<body>
    <h2> DANH SÁCH SINH VIÊN </h2>
    <table>
        <tr>
            <th>Mã SV</th>
            <th>Họ Tên</th>
            <th>Ngày Sinh</th>
            <th>Giới Tính</th>
            <th>Ngành</th>
        </tr>
        <?php
            foreach ($danhSachSV as $sv) {
                echo $sv->hienThiThongTin();
            }
        ?>
    </table>
    <footer>  Lập trình PHP OOP </footer>
</body>
</html>
