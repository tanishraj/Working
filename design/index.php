<?php 
    include "Header.php"
?>

	<div class="demos_wrap">
		<div class="demos_container">
			<h1>Hello, Nick</h1>
			<ol>
				<li>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.</li>
				<li>Installation: Xamp or Wamp</li>
				<li>Variables:
					<ul>
						<li>global</li>
						<li>static</li>
					</ul>
				</li>
				<li>print statement
					<ul>
						<li>Echo : has no return value. multiple parameter</li>
						<li>Print (print or print()): has return value 1. one parameter</li>
					</ul>
				</li>
				<li>Includes
					<ul>
						<li><b>include()</b> : it includes a specified file. it will produce a warning if it fails to find the file and execute the remaining scripts. It should be used when the file is not required and application flow should continue when the file is not found.</li>
						<li><b>includeOnce()</b> : it also includes a specified file but if a file has already been included. it will not be included again. it’ll also produce a warning if it fails to find the file and execute the remaining scripts.</li>
						<li><b>require()</b> : it also includes a specified file but it will throw a fatal error (E_COMPILE_ERROR) if it fails to find the file and stops the execution.</li>
						<li><b>requireOnce()</b> : it also includes a specified file but if a file has already been included. it will not be included again. it will throw a fatal error (E_COMPILE_ERROR) if it fails to find the file and stops the execution.</li>
					</ul>
				</li>
				<li>DB Connection:
					<ul>
						<li>mysqli_connect() : opens a new connection to the MySQL server. <br> <a href="https://www.w3schools.com/php/func_mysqli_connect.asp">https://www.w3schools.com/php/func_mysqli_connect.asp</a></li>
						<li>mysqli_connect_errno() : returns the error code </li>
						<li>mysqli_set_charset() : specifies the default character set to be used when sending data from and to the database server</li>
					</ul>
				</li>
			</ol>
		</div>
	</div>

	<?php 
		$arr = array(1, 2, 3, 4);
		foreach ($arr as $key => $value) {
		    // $arr[3] will be updated with each value from $arr...
		    echo "<li>{$key} => {$value}</li><br/> ";
		    print_r($arr);
		}
	?>

<?php 
    include "Footer.php"
?>