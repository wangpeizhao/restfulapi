<!doctype html>
<script src="jquery.min.js"></script>
<script type="text/javascript">
<!--
	$(function(){
		$('a').click(function(){
			var _type = $(this).text();
			$.ajax({
				type:_type,
				url:'api.php',
				//data:{name:'parker',age:'28',sex:'M'},
				data: JSON.stringify(GetJsonData()),
				//dataType: "json",
				beforeSend:function(XMLHttpRequest){
					//$("#loading").show();
					XMLHttpRequest.setRequestHeader("Version", "0.12");
					XMLHttpRequest.setRequestHeader("Test", "hello world");
					XMLHttpRequest.setRequestHeader("Accept","application/json");
					XMLHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
				},
				//contentType:'application/x-www-data-urlencoded',
				success:function(data){
					$('p font').html(data);
				},
				error: function (data) {
					console.info("error: " + data.responseText);
				},
				complete: function () {
					//$("#loading").hide();
				}
			});
		});
		function GetJsonData() {
			var json = {
				"classid": 2,
				"zlclass": "测试类型1,测试类型2,测试类型3",
			};
			return json;
		}
	});
//-->
</script>
<body>
<p><a href="javascript:;">GET</a></p>
<p><a href="javascript:;">POST</a></p>
<p><a href="javascript:;">PUT</a></p>
<p><a href="javascript:;">DELETE</a></p>
<p><a href="javascript:;">PATCH</a></p>
<p><a href="javascript:;">OTHER</a></p>
<!-- <p id="loading">Loading...</p> -->
<p><font color="green"></font></p>
<p><a href="http://www.infoq.com/cn/articles/designing-restful-http-apps-roth">http://www.infoq.com/cn/articles/designing-restful-http-apps-roth</a><;/p>
<p><a href="http://www.csdn.net/article/2013-06-13/2815744-RESTful-API/">http://www.csdn.net/article/2013-06-13/2815744-RESTful-API/</a>p>
<p><a href="http://www.bootcss.com/p/git-guide">http://www.bootcss.com/p/git-guide</a></p>
</body>
</html>