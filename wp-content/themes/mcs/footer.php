      </div>
    </div>
  </div>
  <div id="footer">
    <div class="doc">
      <p>Copyright &copy; 2005&#150;2008 Mozilla Atlantis. No rights reserved.</p>
      <ul class="list nav">
        <li><a href="">Privacy Policy</a></li>
        <li><a href="">Legal Notices</a></li>
      </ul>
<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
	<p>
		<?php printf(__('%1$s is proudly powered by %2$s', 'kubrick'), get_bloginfo('name'),
		'<a href="http://wordpress.org/">WordPress</a>'); ?>
		<!-- <?php printf(__('%d queries. %s seconds.', 'kubrick'), get_num_queries(), timer_stop(0, 3)); ?> -->
	</p>
    </div>
  </div>
		<?php wp_footer(); ?>
</body>
</html>
