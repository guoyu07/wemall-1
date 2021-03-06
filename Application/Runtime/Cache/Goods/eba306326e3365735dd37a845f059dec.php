<?php if (!defined('THINK_PATH')) exit();?><script>
    count = parseInt($("#goodsNum").attr("value"));
    function back(){
        window.history.back(-1);
    }
    
    function increase($this){
        var max_value = parseInt($("#goodsNum").attr("data-max-value")); 
        var min_value = parseInt($("#goodsNum").attr("data-min-value"));
        var currentValue = parseInt($("#goodsNum").attr("value"));
        var value = currentValue + 1;
        $("#goodsNum").attr("value",value);
        if(value !== min_value){
            $("#reduce").removeClass("disabled");
        }
        if(value === max_value){
            $this.addClass("disabled");
        }
        count = value;
    }
    
    function decrease($this){
        var max_value = parseInt($("#goodsNum").attr("data-max-value")); 
        var min_value = parseInt($("#goodsNum").attr("data-min-value"));
        var currentValue = parseInt($("#goodsNum").attr("value"));
        var value = currentValue - 1;
        $("#goodsNum").attr("value",value);
        if(value === min_value){
            $this.addClass("disabled");
        }
        if(value !== max_value){
            $("#add").removeClass("disabled");
        }
    }
    $(document).ready(function(){
        var minValue = $("#goodsNum").attr("data-min-value");
        var maxValue = $("#goodsNum").attr("data-max-value");
        if(minValue === "" || minValue === "0"){
            $("#goodsNum").attr("data-min-value","<?php echo ($config_buy_min); ?>");
            $("#goodsNum").attr("value","<?php echo ($config_buy_min); ?>");
        }else{
            $("#goodsNum").attr("value",minValue);
        }
        if(maxValue === "" || maxValue === "0"){
            $("#goodsNum").attr("data-max-value","<?php echo ($config_buy_max); ?>");
        }
        count = $("#goodsNum").attr("value");
        $(".goods-introduce img").addClass("img-responsive");
    });
    /*
     * 添加到购物车按钮
     * 1.取出商品ID
     * 2.将商品ID与COUNT进行拼接
     * 3.GET方法，送出数据
     * 4.重新定义A标签
     */
    function addGoodsToCart($this){  
        $("body").showLoading();
        $(".footer").showLoading();
        var goodId = $(".goods-content").attr("data-id");
        var url = "<?php echo ($addGoodsToCartUrl); ?>?goodId="+goodId+"&count="+count;
        $.get(url,function(){
            $this.attr("disabled",false);
            var aUrl = "<a href=<?php echo ($shoppingCartUrl); ?> class='gotoCart'>去购物车结算</a>";
            $(".footer-item-left").html(aUrl);
            $("body").hideLoading();
            $(".footer").hideLoading();
        });
        
    }
    
    /*
     * 立即购买
     * 1.先把数量存购物车
     * 2.GOTO 立即支付
     */
    function buyNow($this)
    {
        var goodId = $(".goods-content").attr("data-id");
        var url = "<?php echo ($addGoodsToCartUrl); ?>?goodId="+goodId+"&count="+count;
        $("body").showLoading();
        $(".footer").showLoading();
        $.get(url,function(result){
            var payNowUrl = "<?php echo ($payNowUrl); ?>?ids="+goodId+"&counts="+count; 
            location.href= payNowUrl;
        });
    }
</script>