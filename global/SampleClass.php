<?php namespace Mymp;
class SampleClass {
	private $plugin_name;
	private $version;

	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	public function global_sample_class()
	{
		ob_start();
?>
		<div class="updated">
			<p>Mymp plugin installed.</p>
		</div>
<?php
		$output = ob_get_clean();
		echo $output;
	}

}
