<?php
	if(isset($_POST['user_input'])&&!empty($_POST['user_input'])){
		$user_input = trim($_POST['user_input']);
		require_once 'index.php';

		$text_length = strlen($user_input);
		$binary_val = '';

		for($x=0; $x<$text_length; $x++) {
			switch ($user_input[$x]) {
				case 'a':
					$binary_val  = $binary_val . '01100001';
					break;
				case 'b':
					$binary_val = $binary_val . '01100010';
					break;
				case 'c':
					$binary_val = $binary_val . '01100011';
					break;
				case 'd':
					$binary_val = $binary_val . '01100100';
					break;
				case 'e':
					$binary_val = $binary_val . '01100101';
					break;
				case 'f':
					$binary_val = $binary_val . '01100110';
					break;
				case 'g':
					$binary_val = $binary_val . '01100111';
					break;
				case 'h':
					$binary_val = $binary_val . '01101000';
					break;
				case 'i':
					$binary_val = $binary_val . '01101001';
					break;
				case 'j':
					$binary_val = $binary_val . '01101010';
					break;
				case 'k':
					$binary_val = $binary_val . '01101011';
					break;
				case 'l':
					$binary_val = $binary_val . '01101100';
					break;
				case 'm':
					$binary_val = $binary_val . '01101101';
					break;
				case 'n':
					$binary_val = $binary_val . '01101110';
					break;
				case 'o':
					$binary_val = $binary_val . '01101111';
					break;
				case 'p':
					$binary_val = $binary_val . '01110000';
					break;
				case 'q':
					$binary_val = $binary_val . '01110001';
					break;
				case 'r':
					$binary_val = $binary_val . '01110010';
					break;
				case 's':
					$binary_val = $binary_val . '01110011';
					break;
				case 't':
					$binary_val = $binary_val . '01110100';
					break;
				case 'u':
					$binary_val = $binary_val . '01110101';
					break;
				case 'v':
					$binary_val = $binary_val . '01110110';
					break;
				case 'w':
					$binary_val = $binary_val . '01110111';
					break;
				case 'x':
					$binary_val = $binary_val . '01111000';
					break;
				case 'y':
					$binary_val = $binary_val . '01111001';
					break;
				case 'z':
					$binary_val = $binary_val . '01111010';
					break;
				case ' ':
					$binary_val = $binary_val . '00100000';
					break;
				case 'A':
					$binary_val  = $binary_val . '01000001';
					break;
				case 'B':
					$binary_val = $binary_val . '01000010';
					break;
				case 'C':
					$binary_val = $binary_val . '01000011';
					break;
				case 'D':
					$binary_val = $binary_val . '01000100';
					break;
				case 'E':
					$binary_val = $binary_val . '01000101';
					break;
				case 'F':
					$binary_val = $binary_val . '01000110';
					break;
				case 'G':
					$binary_val = $binary_val . '01000111';
					break;
				case 'H':
					$binary_val = $binary_val . '01001000';
					break;
				case 'I':
					$binary_val = $binary_val . '01001001';
					break;
				case 'J':
					$binary_val = $binary_val . '01001010';
					break;
				case 'K':
					$binary_val = $binary_val . '01001011';
					break;
				case 'L':
					$binary_val = $binary_val . '01001100';
					break;
				case 'M':
					$binary_val = $binary_val . '01001101';
					break;
				case 'N':
					$binary_val = $binary_val . '01001110';
					break;
				case 'O':
					$binary_val = $binary_val . '01001111';
					break;
				case 'P':
					$binary_val = $binary_val . '01010000';
					break;
				case 'Q':
					$binary_val = $binary_val . '01010001';
					break;
				case 'R':
					$binary_val = $binary_val . '01010010';
					break;
				case 'S':
					$binary_val = $binary_val . '01010011';
					break;
				case 'T':
					$binary_val = $binary_val . '01010100';
					break;
				case 'U':
					$binary_val = $binary_val . '01010101';
					break;
				case 'V':
					$binary_val = $binary_val . '01010110';
					break;
				case 'W':
					$binary_val = $binary_val . '01010111';
					break;
				case 'X':
					$binary_val = $binary_val . '01011000';
					break;
				case 'Y':
					$binary_val = $binary_val . '01011001';
					break;
				case 'Z':
					$binary_val = $binary_val . '01011010';
					break;
				case '!':
					$binary_val = $binary_val . '00100001';
					break;
				case '?':
					$binary_val = $binary_val . '00111111';
					break;
				case '.':
					$binary_val = $binary_val . '00101110';
					break;
				default:
					$binary_val = $binary_val . 'NONE';
					break;
			}
		}
		echo '<hr><h3>Binary equivalent:</h3>';
		echo  '<textarea cols="30" rows="10">' . $binary_val . '</textarea>';

	}else{
		require_once 'index.php';
		echo '<h4 style="color: red;">Please input some text in the box.</h4>';
	}
?>