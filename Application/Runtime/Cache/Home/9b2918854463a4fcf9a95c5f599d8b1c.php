<?php if (!defined('THINK_PATH')) exit();?><div class="outer">
    <div class="header">
        <h1>头部</h1>
        <a href="javascript:;" class="btn lock">锁定</a>
    </div>
    <div class="inner1">
        <div class="lists">
            <a class="item">
                <img src="http://d6.yihaodianimg.com/N02/M0B/81/5A/CgQCsVMhX_mAAvXsAAJDE3K2zh485900_80x80.jpg" alt="">
                <h3>1文字描述文字描述</h3>
                <span class="date">2014-14-14</span>
            </a>
            <a class="item">
                <img src="http://d6.yihaodianimg.com/N02/M0B/81/5A/CgQCsVMhX_mAAvXsAAJDE3K2zh485900_80x80.jpg" alt="">
                <h3>2文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述</h3>
                <span class="date">2014-14-14</span>
            </a>
            <a class="item">
                <img src="http://d6.yihaodianimg.com/N02/M0B/81/5A/CgQCsVMhX_mAAvXsAAJDE3K2zh485900_80x80.jpg" alt="">
                <h3>3文字描述文字描述文字描述文字描述文字描述</h3>
                <span class="date">2014-14-14</span>
            </a>
            <a class="item">
                <img src="http://d6.yihaodianimg.com/N02/M0B/81/5A/CgQCsVMhX_mAAvXsAAJDE3K2zh485900_80x80.jpg" alt="">
                <h3>4文字描述文字描述文字描述文字描述文字描述</h3>
                <span class="date">2014-14-14</span>
            </a>
            <a class="item">
                <img src="http://d6.yihaodianimg.com/N02/M0B/81/5A/CgQCsVMhX_mAAvXsAAJDE3K2zh485900_80x80.jpg" alt="">
                <h3>5文字描述文字描述文字描述文字描述文字描述</h3>
                <span class="date">2014-14-14</span>
            </a>
            <a class="item">
                <img src="http://d6.yihaodianimg.com/N02/M0B/81/5A/CgQCsVMhX_mAAvXsAAJDE3K2zh485900_80x80.jpg" alt="">
                <h3>6文字描述文字描述文字描述文字描述文字描述</h3>
                <span class="date">2014-14-14</span>
            </a>
            <a class="item">
                <img src="http://d6.yihaodianimg.com/N02/M0B/81/5A/CgQCsVMhX_mAAvXsAAJDE3K2zh485900_80x80.jpg" alt="">
                <h3>7文字描述文字描述文字描述文字描述文字描述</h3>
                <span class="date">2014-14-14</span>
            </a>
            <a class="item">
                <img src="http://d6.yihaodianimg.com/N02/M0B/81/5A/CgQCsVMhX_mAAvXsAAJDE3K2zh485900_80x80.jpg" alt="">
                <h3>8文字描述文字描述文字描述文字描述文字描述</h3>
                <span class="date">2014-14-14</span>
            </a>
            <a class="item">
                <img src="http://d6.yihaodianimg.com/N02/M0B/81/5A/CgQCsVMhX_mAAvXsAAJDE3K2zh485900_80x80.jpg" alt="">
                <h3>9文字描述文字描述文字描述文字描述文字描述</h3>
                <span class="date">2014-14-14</span>
            </a>
            <a class="item">
                <img src="http://d6.yihaodianimg.com/N02/M0B/81/5A/CgQCsVMhX_mAAvXsAAJDE3K2zh485900_80x80.jpg" alt="">
                <h3>10文字描述文字描述文字描述文字描述文字描述</h3>
                <span class="date">2014-14-14</span>
            </a>
            <a class="item">
                <img src="http://d6.yihaodianimg.com/N02/M0B/81/5A/CgQCsVMhX_mAAvXsAAJDE3K2zh485900_80x80.jpg" alt="">
                <h3>11文字描述文字描述文字描述文字描述文字描述</h3>
                <span class="date">2014-14-14</span>
            </a>
            <a class="item">
                <img src="http://d6.yihaodianimg.com/N02/M0B/81/5A/CgQCsVMhX_mAAvXsAAJDE3K2zh485900_80x80.jpg" alt="">
                <h3>12文字描述文字描述文字描述文字描述文字描述</h3>
                <span class="date">2014-14-14</span>
            </a>
        </div>
    </div>
</div>
<script>

// dropload
var dropload = $('.inner1').dropload({
//    domUp : {
//        domClass   : 'dropload-up',
//        domRefresh : '<div class="dropload-refresh">↓下拉刷新</div>',
//        domUpdate  : '<div class="dropload-update">↑释放更新</div>',
//        domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中...</div>'
//    },
    domDown : {
        domClass   : 'dropload-down',
        domRefresh : '<div class="dropload-refresh">↑上拉加载更多</div>',
        domUpdate  : '<div class="dropload-update">↓释放加载</div>',
        domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中.看看起不起作用</div>'
    },
//    loadUpFn : function(me){
//        $.ajax({
//            type: 'GET',
//            url: 'json/update.json',
//            dataType: 'json',
//            success: function(data){
//                var result = '';
//                for(var i = 0; i < data.lists.length; i++){
//                    result +=   '<a class="item opacity">'
//                                    +'<img src="'+data.lists[i].pic+'" alt="">'
//                                    +'<h3 href="'+data.lists[i].link+'" >'+data.lists[i].title+'</h3>'
//                                    +'<span class="date">'+data.lists[i].date+'</span>'
//                                +'</a>';
//                }
//                // 为了测试，延迟1秒加载
//                setTimeout(function(){
//                    $('.lists').html('');
//                    $('.lists').prepend(result);
//                    me.resetload();
//                },1000);
//            },
//            error: function(xhr, type){
//                alert('Ajax error!');
//                me.resetload();
//            }
//        });
//    },
    loadDownFn : function(me){
        alert("hello");
        $.ajax({
            type: 'GET',
            url: 'json/more.json',
            dataType: 'json',
            success: function(data){
                var result = '';
                for(var i = 0; i < data.lists.length; i++){
                    result +=   '<a class="item opacity">'
                                    +'<img src="'+data.lists[i].pic+'" alt="">'
                                    +'<h3 href="'+data.lists[i].link+'" >'+data.lists[i].title+'</h3>'
                                    +'<span class="date">'+data.lists[i].date+'</span>'
                                +'</a>';
                }
                // 为了测试，延迟1秒加载
                setTimeout(function(){
                    $('.lists').append(result);
                    me.resetload();
                },1000);
            },
            error: function(xhr, type){
                alert('Ajax error!');
                me.resetload();
            }
        });
    }
});
alert("hello");
</script>