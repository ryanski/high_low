<?php
$target=rand(1,100);
$guess="";

do {
	fwrite(STDOUT, 'What is your number?'.PHP_EOL);

	$guess=trim(fgets(STDIN));

	if (!ctype_digit($guess)) {
		fwrite(STDOUT, "That's not a number.  Try again\n");
	} else if($guess==$target) {
		fwrite(STDOUT, "CORRECTOMUNDO\n");
	} else if ($guess>$target) {
		fwrite(STDOUT, "LOWER\n");
	} else if ($guess<$target) {
		fwrite(STDOUT, "HIGHER\n");
	}
} while ($guess!=$target);

exit(0);

// ctype_digit stricter no decimals 

// isnumeric more open
// mt_rand() or rand();

?>