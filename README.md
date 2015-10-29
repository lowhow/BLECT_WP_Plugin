# BLECT_WP_Plugin
Plugin boiletplate based on WPPB

1. Get a copy of your custom WPPB from [http://wppb.me/](http://wppb.me/) , place it in plugins folder

2. Clone to your own folder name
	```
	git clone https://github.com/lowhow/BLECT_WP_Plugin .
	```

3. Change namespace to your own name in `composer.json`
	```
	"autoload":
	{
		"psr-4":
		{
			"{your_pugin_namespace}\\": "global"
		}
	}
	```

4. Add this line to your main plugin file `{your_plugin_slug}.php`:
	```
	if ( ! defined( 'WPINC' ) ) {
		die;
	}
	require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';
	```
	
5. To test the plugin upon activation, add these line to `includes/class-{your_plugin_slug}.php`
	```
	private function define_admin_hooks() {
	
		$plugin_admin = new Mymp_To_Wc_Admin( $this->get_plugin_name(), $this->get_version() );
	
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
	
		/**
		 * Sample Class notice
		 */
		$sampleClass = new Mymp\SampleClass( $this->get_plugin_name(), $this->get_version() );
		$this->loader->add_action( 'admin_notices', $sampleClass, 'global_sample_class' );
	
	}
	```
