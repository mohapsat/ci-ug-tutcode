<?php

/**
 * @filename: currentgitbranch.php
  * @usage: Include this file after the '<body>' tag in your project
   * @author Kevin Ridgway 
*/
        $stringfromfile = file('.git/HEAD', FILE_USE_INCLUDE_PATH);

	    $firstLine = $stringfromfile[0]; //get the string from the array

	        $explodedstring = explode("/", $firstLine, 3); //seperate out by the "/" in the string

		    $branchname = $explodedstring[2]; //get the one that is always the branch name

		        echo "<div style='clear: both; width: 100%; font-size: 14px; font-family: Helvetica; color: #30121d; background: #bcbf77; padding: 20px; text-align: center;'>Current branch: <span style='color:#fff; font-weight: bold; text-transform: uppercase;'>" . $branchname . "</span></div>"; //show it on the page

?>


		<em>&copy; 2016</em>

	</body>
	
</html>
