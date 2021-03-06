<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>WeShare4U</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->load->view('includecss'); ?>

</head>
<body class="bg">
<!-- nav -->
<?php $this->load->view('navbarlogin'); ?>

<!--input-->
                <div class="row">

                    <!--Sidebar-->

                    <!--/.Sidebar-->

                    <!--Main column-->
                    <div  class="col-lg-2"></div>
                    <div class="col-lg-8">

                        <!--First row-->
                        <div class="row">
                            <div class="col-lg-12">

                                <h2 align="center" class="h2-responsive" style="color: white">
                                    กรอกข้อมูลสิ่งของที่บริจาค</h2>

                                <br>

                                <?php echo form_open_multipart("DonateController/add"); ?>
                                <table align="center" class="table">
                                    <tbody>
                                    <tr class="active">
                                        <td><h4>ชื่อของที่บริจาค :</h4></td>
                                        <td><input type="text" class="form-control" id="product_name" name="product_name"
                                                   placeholder="ชื่อของที่ท่านต้องการบริจาค: ตุ๊กตา"></td>
                                        <td></td>
                                    </tr>
                                    <tr class="active">
                                        <td><h4>สี :</h4></td>
                                        <td><input type="text" class="form-control" id="product_color" name="product_color" placeholder="สีของที่ท่านต้องการบริจาค: แดง"></td>
                                        <td></td>
                                    </tr>

                                    <tr class="active">
                                        <td><h4>จำนวน :</h4></td>
                                        <td><input type="number" class="form-control" id="product_number" name="product_number" placeholder="จำนวนของที่ท่านต้องการบริจาค: 3">
                                        </td>
                                        <td>ชิ้น</td>
                                    </tr>

                                    <tr class="active">
                                        <td><h4>น้ำหนัก :</h4></td>
                                        <td><input type="number" class="form-control" id="weight_number" name="weight_number" placeholder="น้ำหนักของสิ่งที่ท่านต้องการบริจาค: 35"></td>
                                        <td><select class="form-control" id="weight_type" name="weight_type">
                                                <option value="กรัม" selected>กรัม</option>
                                                <option value="กิโลกรัม">กิโลกรัม</option>
                                            </select></td>
                                    </tr>

                                    <tr class="active">
                                        <td><h4>ขนาด :</h4></td>
                                        <td><input type="number" id="size_width" name="size_width" class="form-control" placeholder="ความกว้าง: 25" ></td>
                                        <td></td>
                                    </tr>
                                    <tr class="active">
                                        <td colspan="" rowspan="" headers=""></td>
                                        <td><input type="number" id="size_long" name="size_long" class="form-control" placeholder="ความยาว: 30" ></td>
                                        <td>
                                            <select class="form-control" id="size_type" name="size_type">
                                                <option value="เซนติเมตร" selected>เซนติเมตร</option>
                                                <option value="เมตร">เมตร</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr class="active">
                                        <td><h4>รายละเอียด :</h4></td>
                                        <td><textarea type="text" class="form-control" placeholder="รายละเอียดของบริจาคเพิ่มเติม" id="product_detail" name="product_detail" ></textarea></td>
                                        <td></td>
                                    </tr>
                                    <tr class="active">
                                        <td><h4>ประเภทของเล่น :</h4></td>
                                        <td>
                                            <select class="form-control" name="product_type">
                                                <option value="รถของเล่น" selected>รถของเล่น</option>
                                                <option value="ตุ๊กตา">ตุ๊กตา</option>
                                                <option value="เครื่องดนตรีของเล่น">เครื่องดนตรีของเล่น</option>
                                                <option value="ตัวต่อเลโก้">ตัวต่อเลโก้</option>
                                                <option value="หุ่นยนต์">หุ่นยนต์</option>
                                                <option value="เกมปริศนา">เกมปริศนา</option>
                                                <option value="ลูกบอล">ลูกบอล</option>
                                                <option value="ของเล่นที่มีเสียงดนตรี">ของเล่นที่มีเสียงดนตรี</option>
                                                <option value="ของเล่นลากจูง">ของเล่นลากจูง</option>
                                                <option value="ของเล่นเขย่า">ของเล่นเขย่า</option>
                                                <option value="ของเล่นไม้">ของเล่นไม้</option>
                                                <option value="ของเล่นเครื่องครัว">ของเล่นเครื่องครัว</option>
                                            </select>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr class="active">
                                        <td><h4>เลือกรูป :</h4></td>
                                        <td><input type="file" class="form-control"  id="product_image" name="product_image" size="30" onchange='openFile()' multiple></td>
                                        <td></td>
                                    </tr>
                                    <tr class="active">
                                        <td></td>
                                        <td> <img id='output' height=300 width=300 /></td>
                                        <td></td>
                                    </tr>
                                    <tr class="active">
                                        <td></td>
                                        <td>
                                            ::<span id="result" style="color:red"></span>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr class="active">
                                        <td></td>
                                        <td>
                                            <input type="reset" name="reset" class="btn btn-danger"
                                                   value="เคลียร์">
                                            <input type="submit" name="but_donate" id="bt"  class="btn btn-primary" value="บริจาค" />
                                        </td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>

                                <!--/.First row-->
                                <?php echo form_close(); ?>
                            </div>
                            <!--/.Main column-->
                        </div>
                    </div>
                    <!--/.Main layout-->
                </div>
<script type="text/javascript">

        $(document).ready(function() {
            $('#bt').bind("click",function()
            {
                var product_name = $('#product_name').val();
                var product_color = $('#product_color').val();
                var product_number = $('#product_number').val();
                var weight_number = $('#weight_number').val();
                var size_width = $('#size_width').val();
                var size_long = $('#size_long').val();
                var product_detail = $('#product_detail').val();
                var product_type = $('#product_type').val();
                var product_image = $('#product_image').val();
                if(product_image =='' || product_name =='' || product_color == '' || product_number =='' || weight_number =='' || size_width =='' || size_long == '' || product_detail == '' || product_type ==''){
                    $("#result").text("Please enter a value with a valid extension");
                    return false;
                }
            });
        });

//$(document).ready(function(){
//        $("#bt").click(function(){

//            var product_image = $('#product_image').val();
//            var product_name = $("input[name=product_name]").val();
//            var product_color = $("input[name=product_color]").val();
//            var product_number = $("input[name=product_number]").val();
//            var weight_number = $("input[name=weight_number]").val();
//            var size_width = $("select[name=size_width]").val();
//            var size_long = $("input[name=size_long]").val();
//            var product_detail = $("input[name=product_detail]").val();
//            var product_type = $("input[name=product_type]").val();
//            if(product_image =='' ){
//                $("#result").text("Please enter a value with a valid extension");
//                return false;
//            }
//
//        });
//    });
</script>
<!-- footer -->
<?php $this->load->view('footer'); ?>
</body>
</html>