<?php
        $customerList = [
            "1" => [
                "ten" => "Mai Văn Toàn",
                "ngaysinh" => "1983-08-20",
                "diachi" => "Hà Nội",
                "hotline" => "8123751537",
                "anh" => "image/1.jpeg"
                
            ],
            "2" => [
                "ten" => "Nguyễn Chặt Chuối",
                "ngaysinh" => "1983-08-20",
                "diachi" => "An Giang",
                "hotline" => "83614734639",
                "anh" => "image/2.jpeg"
            ],
            "3" => [
                "ten" => "Nguyễn Thái Rau",
                "ngaysinh" => "1983-08-21",
                "diachi" => "Nam Định",
                "hotline" => "83614734639",
                "anh" => "image/3.jpeg"
            ],
            "4" => [
                "ten" => "Trần Dần",
                "ngaysinh" => "1983-08-22",
                "diachi" => "Hà Giang",
                "hotline" => "83614734639",
                "anh" => "image/4.jpeg"
            ],
            "5" => [
                "ten" => "Nguyễn Đình Chỉ",
                "ngaysinh" => "1983-08-17",
                "diachi" => "Hà Nội",
                "hotline" => "83614734639",
                "anh" => "image/5.jpeg"
            ],
            "6" => [
                "ten" => "Lê Đức Lươn",
                "ngaysinh" => "1983-08-17",
                "diachi" => "Hà Nội",
                "hotline" => "83614734639",
                "anh" => "image/6.jpeg"
            ]
        ];

        function searchByDate($customers, $from_date, $to_date) {
            if(empty($from_date) && empty($to_date)){
                return $customers;
            }
            $filtered_customers = [];
            foreach($customers as $customer){
                if(!empty($from_date) && (strtotime($customer['ngaysinh']) < strtotime($from_date)))
                    continue;
                if(!empty($to_date) && (strtotime($customer['ngaysinh']) > strtotime($to_date)))
                    continue;
                $filtered_customers[] = $customer;
            }
            return $filtered_customers;
        }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/style.css" rel="stylesheet" />
</head>
    </head>
    <body>
    <?php
        $from_date = NULL;
        $to_date = NULL;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $from_date = $_POST["from"];
            $to_date = $_POST["to"];
        }
        $filtered_customers = searchByDate($customer_list, $from_date, $to_date);
    ?>
        <form method="post">
          Từ: <input id = "from" type="text" name="from" placeholder="yyyy/mm/dd" value="<?php echo isset($from_date)?$from_date:''; ?>"/>
          Đến: <input id = "to" type="text" name="to" placeholder="yyyy/mm/dd" value="<?php echo isset($to_date)?$to_date:''; ?>"/>
          <input type = "submit" id = "submit" value = "Lọc"/>
        </form>

        <table>
          <caption><h2>Danh sách khách hàng</h2></caption>
          <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
          </tr>
          <?php foreach ($customerList as $key => $value) : ?>
                <tr>
                    <td><?php echo $key ?></td>
                    <td><?php echo $value["ten"] ?></td>
                    <td><?php echo $value["ngaysinh"] ?></td>
                    <td><?php echo $value["diachi"] ?></td>
                    <td><?php echo $value["hotline"] ?></td>
                    <td><img src="<?php echo $value["anh"] ?>" style="width:150px; height:150px"></td>
                </tr>

            <?php endforeach; ?>
