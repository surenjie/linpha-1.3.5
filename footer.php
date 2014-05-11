	<tr>
		<td class='blackline' colspan='3'></td>
	</tr>
	<tr>
		<td colspan='4' height='10'>
			<table width='100%' cellspacing='0' cellpadding='0'>
				<tr>
					<td class='footerleft' width='200' style="white-space:nowrap">
					LinPHA <?php echo $str_Version; ?> 1.3.4</td>
					<td class='footercenter' width='50%' style="white-space:nowrap"><b>-----&gt;&gt;&gt;&gt;Have fun -----&gt;&gt;&gt;&gt;</b></td>
					<td class='footerright' style="white-space:nowrap">2002-<?php echo date("Y"); ?> The LinPHA developers 
					<?php
						if(read_config('timer')) {
							print(" (time: ".stop_timer("linpha")."sec.".")");
						}
					?>
					</td>
					<?php
						if(read_plugins_config('RSS')) {
							echo "<td class='footerright' style='white-space:nowrap'>";
							echo "";
							echo "<a class='mainmenu' href='".TOP_DIR."/plugins/RSS/showRSS.php'>" .
									"<img src='".TOP_DIR."/graphics/rss2-0.jpg' border='0'></a>\n";
						}
					?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td class='blackline' colspan='3'></td>
	</tr>
</table>
</body>
<?php
/**
 * stuff for debug
 */
//xdebug_dump_function_profile(XDEBUG_PROFILER_CPU);
//xdebug_dump_function_trace();
//xdebug_stop_profiling();
?>
</html>