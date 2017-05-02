/**
 * Created by strive on 2016/3/4.
 */
$(function(){
    //定义鼠标移入和移除略缩图效果
    $('.pic').live('hover',function(){
        $(this).children('span').toggleClass('block-hide');
    })

    //图片框上点击×图标出发事件
    $('.pic-close').live('click',function(){
        var obj = $(this);
        var url = obj.attr('data-url');
        $.ajax({
            url:url,
            data:'fileName='+$(this).siblings('input').val(),
            success:function(msg){
                if(msg.status == 200){
                    obj.parent().remove();
                }else{
                    var d = dialog({
                        title: '温馨提示',
                        content: '文件删除失败，请稍后再试！',
                        okValue:'确定'
                    });
                    d.showModal();
                }
            }
        })
    })

    //点击略缩图查看大图
    $('.pic img').live('click',function(){
        var d = dialog({
            title: '图片详情',
            content: "<img src='"+$(this).attr('src')+"' alt=''/>"
        });
        d.showModal();


//                var img=new Image();
//                img.src=$(this).attr("src");
//                var w=img.width;
//                var h=img.height;
//                $('#exampleModal img').attr('src',$(this).attr('src')).css('height',h);
//                //重新计算madal模态框的宽高自动适应图片大小的位置及居整个页面中心位置
//                // （已知有bug:如果图片的过大，宽高超出当前屏幕的宽高，则会出现滚动条）
//                h= h+13*2+22;
//                w = w+15*2;
//                $('#exampleModal .modal-content').css('height',h).css('width',w).css('position','absolute').
//                        css('top','50%').css('left','50%').css('margin-left','-'+(parseFloat(w)/2)+'px');
//                $('#exampleModal .modal-body').css('height',h).css('width',w);
//                $('#exampleModal').modal();
    })
})