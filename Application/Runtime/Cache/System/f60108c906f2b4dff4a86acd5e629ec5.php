<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
梦云智工作室
-->
<!--<style>
   .wrap{
      width:60%;
	  margin-left:auto;
	  margin-right:auto;
	  border:#D9D9D9 solid 1px;
   } 
   .settlements_date{
    font-size:26px;
   font-weight:bold;
   margin:20px;
   color:#CC0000;
   float:left;  
   } 
   .return{
   font-size:26px;
   margin:20px;
   margin-left:50px;
   font-weight:bolder;
   float:left;
   text-decoration:none;
 }
 .settle{
   margin:40px;
   font-size:18px;
   font-weight:bold;
 }
</style>
  <div class="wrap">
      <form method="post" action="<?php echo ($actionUrl); ?>">
      <div style="border-bottom:#D9D9D9 solid 2px ; height:70px" ><a class="return">< </a><div class="settlements_date">设置结算日期</div></div>标题
	  <div class="settle">起始日：<input type="text" value="<?php echo ($data[0][0]['value']); ?>" name="SYSTEM_BEGIN_DAY" ></div>
      <div class="settle">结束日：<input type="text" value="<?php echo ($data[1][0]['value']); ?>" name="SYSTEM_END_DAY"></div>
      <div>
           <input type="submit" value="确定"/>
      </div>
      </form>
  </div>外层div-->
<form class="form-horizontal" method="post" action="<?php echo ($actionUrl); ?>" enctype="multipart/form-data" />
<fieldset>
   <legend> 设置结算日期</legend>
   <div class="control-group">
                                <label class="control-label" for="SYSTEM_BEGIN_DAY">起始日</label>
                                <div class="controls">
                                <input type="text" name='SYSTEM_BEGIN_DAY' id="SYSTEM_BEGIN_DAY" value="<?php echo ($data[0][0]['value']); ?>" >
                                </div>
                            </div>
   <div class="control-group">
                                <label class="control-label" for="SYSTEM_END_DAY">结束日</label>
                                <div class="controls">
                                <input type="text" name='SYSTEM_END_DAY' id="SYSTEM_END_DAY" value="<?php echo ($data[1][0]['value']); ?>" >
                                </div>
                            </div>
   <div class="form-actions">
				<button type="submit" class="btn btn-primary">保存</button> <button class="btn">取消</button>
			    </div>
</fieldset>
</form>