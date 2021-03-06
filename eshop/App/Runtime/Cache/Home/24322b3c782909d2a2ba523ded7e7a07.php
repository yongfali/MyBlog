<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>编辑收货地址</title>
<!-- 用户和商家页面公共脚本引用链接 -->
<link rel="stylesheet" type="text/css" href="/eshop/Public/Common/Css/common.css">
<script src="/eshop/Public/Common/Js/jquery-2.1.1.min.js"></script>
<script src="/eshop/Public/Common/Js/jquery.validate.js"></script>
<script src="/eshop/Public/Common/layer/layer.js"></script>
<script src="/eshop/Public/Common/Js/common.js"></script>
<script src="/eshop/Public/Common/My97DatePicker/WdatePicker.js"></script>
<!-- 购物车脚本 -->
<script src="/eshop/Public/Home/Js/Cart/goodCart.js"></script>
<script type="text/javascript">
	var collections = "<?php echo U('Home/Collection/collection');?>";
	var cancles = "<?php echo U('Home/Collection/cancle');?>";
	var indexs = "<?php echo U('Home/User/login');?>"; 
	var addCart = "<?php echo U('Home/ShoppingCart/add');?>";
	var delCart = "<?php echo U('Home/ShoppingCart/del');?>";
</script>
<!-- 用户中心公共页面样式和脚本链接 -->
<link rel="stylesheet" type="text/css" href="/eshop/Public/Home/Css/User/ucenter.css">
<script src="/eshop/Public/Home/Js/common.js"></script>
<script src="/eshop/Public/Home/Js/User/addrManage.js"></script>
<script src="/eshop/Public/Common/Distpicker/js/distpicker.data.js"></script>
<script src="/eshop/Public/Common/Distpicker/js/distpicker.js"></script>
<script src="/eshop/Public/Common/Distpicker/js/main.js"></script>
</head>
<body>
<div class="add_address">
  <form action="" method="post" id="modifyAddress" value="<?php echo U('doEditAddrShow');?>">
    <div class="items">
      <label><span>*</span>收货人姓名：</label>
      <input type="text" name="username" value="<?php echo ($data["username"]); ?>">
    </div>
    <div class="items">
      <div data-toggle="distpicker" class="items">
        <label><span>*</span>所在地区：</label>
        <select id="province1" name="province1" data-province="<?php echo ($array[0]); ?>">
        </select>
        <select id="city1" name="city1" data-city="<?php echo ($array[1]); ?>">
        </select>
        <select id="district1" name="district1" data-district="<?php echo ($array[2]); ?>">
        </select>
      </div>
    </div>
    <div class="items" style="height:52px;">
      <label><span>*</span>所在街道：</label>
      <input type="textarea" name="street" style="width:300px;height:25px;" value="<?php echo ($data["streetinfo"]); ?>">
      <div class="info">（请填写您的详细地址，不需要重复填写省、市、地区）</div>
    </div>
    <div class="items">
      <label><span>*</span>邮政编码：</label>
      <input type="text" name="postcode" value="<?php echo ($data["postcode"]); ?>">
    </div>
    <div class="items">
      <label><span>*</span>联系方式：</label>
      <input type="tel" name="usertel" value="<?php echo ($data["tel"]); ?>">
    </div>
    <div class="default_addr">
      <label>默认地址：</label>
      <input type="radio" name="address" value="1" 
      <?php if($data["is_first"] == 1 ): ?>checked="checked"<?php endif; ?>
      />是 <input type="radio" name="address" value="0"  
      <?php if($data["is_first"] == 0 ): ?>checked="checked"<?php endif; ?>
      />否 </div>
    <input type="hidden" value="<?php echo ($data["id"]); ?>" name="id" />
    <input type="submit" value="修改" value="0" class="add" />
  </form>
</div>
<!-- 新增收货地址表单结束 -->
</body>
</html>