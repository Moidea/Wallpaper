<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="appBox">
<div class="appTui">
				<a href="https://www.nihaowua.com"><h3 class="title">?? 你好污啊-撩妹撩汉金句大全 </h3><span class="brand">点击体验套路 </span><span class="label">广告</span></a>
				
			</div>
</div>

<div style="margin: 0 auto;text-align: center;margin-bottom: 20px;">本站所有资源收集于网络，版权归原作者所有。若本站发布的内容侵犯到您的权益，请致信 1989473781@qq.com ，我们会尽快删除！</div>
</div>
</div>
<script type="text/javascript">
    //禁止下拉
    var overscroll = function(el) {
  el.addEventListener('touchstart', function() {
    var top = el.scrollTop
      , totalScroll = el.scrollHeight
      , currentScroll = top + el.offsetHeight
    //If we're at the top or the bottom of the containers
    //scroll, push up or down one pixel.
    //
    //this prevents the scroll from "passing through" to
    //the body.
    if(top === 0) {
      el.scrollTop = 1
    } else if(currentScroll === totalScroll) {
      el.scrollTop = top - 1
    }
  })
  el.addEventListener('touchmove', function(evt) {
    //if the content is actually scrollable, i.e. the content is long enough
    //that scrolling can occur
    if(el.offsetHeight < el.scrollHeight)
      evt._isScroller = true
  })
}
overscroll(document.querySelector('.scroll'));
document.body.addEventListener('touchmove', function(evt) {
  //In this case, the default behavior is scrolling the body, which
  //would result in an overflow.  Since we don't want that, we preventDefault.
  if(!evt._isScroller) {
    evt.preventDefault()
  }
})
</script>

<!--百度自动推送-->
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

<div style="display:none"><script src="https://s13.cnzz.com/z_stat.php?id=1271204308&web_id=1271204308" language="JavaScript"></script></div>
<?php $this->footer(); ?>
</body>
</html>
