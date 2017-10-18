    <footer id="zan-footer">
      <div class="container">© 2014-2017 忧郁的弟弟 .Powered by WordPress. Theme By 忧郁的弟弟 |
        <a href="https://www.mygalgame.com/sitemap.html" target="_blank">站点地图</a>
      </div>
    </footer>
    <div id="zan-gotop">
      <i class="fa fa-angle-up"></i>
    </div>
    <div class="advanced-browser-check" style="display:none;" data-url="{&quot;abc_url&quot;:&quot;https:\/\/www.mygalgame.com\/wp-admin\/admin-ajax.php&quot;}"></div>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/myblog_bd.js.下载"></script>
    <canvas width="1920" height="969" style="position: fixed; top: 0px; left: 0px; pointer-events: none; z-index: 888;"></canvas>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/myblog_min.js.下载"></script>
    <script type="text/javascript">var smiley = jQuery("#smilelink");
      clone = smiley.clone();
      comment = jQuery("#comment");
      smiley.remove();
      comment.before(smiley);
      function grin(a) {
        var b;
        a = ' ' + a + ' ';
        if (document.getElementById('comment') && document.getElementById('comment').type == 'textarea') {
          b = document.getElementById('comment')
        } else {
          return false
        }
        if (document.selection) {
          b.focus();
          sel = document.selection.createRange();
          sel.text = a;
          b.focus()
        } else if (b.selectionStart || b.selectionStart == '0') {
          var c = b.selectionStart;
          var d = b.selectionEnd;
          var e = d;
          b.value = b.value.substring(0, c) + a + b.value.substring(d, b.value.length);
          e += a.length;
          b.focus();
          b.selectionStart = e;
          b.selectionEnd = e
        } else {
          b.value += a;
          b.focus()
        }
      }</script>
    <script type="text/javascript">if (window["\x64\x6f\x63\x75\x6d\x65\x6e\x74"]["\x64\x6f\x6d\x61\x69\x6e"] != "\x6d\x79\x67\x61\x6c\x67\x61\x6d\x65\x2e\x63\x6f\x6d" && window["\x64\x6f\x63\x75\x6d\x65\x6e\x74"]["\x64\x6f\x6d\x61\x69\x6e"] != "\x77\x77\x77\x2e\x6d\x79\x67\x61\x6c\x67\x61\x6d\x65\x2e\x63\x6f\x6d") {
        window["\x6c\x6f\x63\x61\x74\x69\x6f\x6e"]["\x68\x72\x65\x66"] = "\x68\x74\x74\x70\x73\x3a\x2f\x2f\x77\x77\x77\x2e\x6d\x79\x67\x61\x6c\x67\x61\x6d\x65\x2e\x63\x6f\x6d\x2f\x3f\x67\x6f\x66\x64\x3d" + window["\x64\x6f\x63\x75\x6d\x65\x6e\x74"]["\x64\x6f\x6d\x61\x69\x6e"];
      }</script>
    <!--压缩前: 74856 bytes; 压缩后: 67799 bytes; 已压缩：9.43% by 忧郁的弟弟--></body>

</html>