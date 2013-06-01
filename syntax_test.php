<?php
/**
 * @author Dustin Moorman <dustin.moorman@gmail.com>
 * Adding this file to provide some sample syntax to highlight for the
 * screen shot examples for each color scheme. PHP and JS are below.
 */

abstract class Test {
	public function Hello($who)
	{
		return "Hello $who.";
	}
}

class Example extends Test {
	private $times_said_hello = 0;
	private $entities_greeted = array();

	public function Hello($who)
	{
		$this->times_said_hello++;
		$this->entities_greeted[] = $who;
		return parent::Hello($who);
	}

	public function HelloWorld()
	{
		return $this->Hello('world');
	}
}

?>

<script lang="JavaScript" type="text/javascript">

	//Give Number a zero fill method.
	Number.prototype.zf = function(len){
		if(isNaN(len)) len = 2;
		return (this + '').pad(len, '0');
	};

	//Give String a padding method.
	String.prototype.pad = function(len, str){
		var output = this.valueOf();
		while(output.length < len){
			output = str + output;
		}
		return output;
	};

</script>

