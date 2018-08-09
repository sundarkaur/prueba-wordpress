<?php
/**
* About Theme
*/
class wimpie_Lite_About_Theme {
	public function __construct() {
		/* create dashbord page */
		add_action( 'admin_menu', array( $this, 'wimpie_lite_welcome_register_menu' ) );
		/* activation notice */
		add_action( 'load-themes.php', array( $this, 'wimpie_lite_activation_admin_notice' ) );

		/** List of required Plugins **/
		$this->req_plugins = array(

			'instant-demo-importer' => array(
				'slug' => 'instant-demo-importer',
				'name' => __('Instant Demo Importer', 'wimpie-lite'),
				'filename' =>'instant-demo-importer.php',
				'class' => 'Instant_Demo_Importer',
				'github_repo' => true,
				'bundled' => true,
				'location' => 'https://github.com/WPaccesskeys/instant-demo-importer/archive/master.zip',
				'info' => __('Instant Demo Importer Plugin adds the feature to Import the Demo Conent with a single click.', 'wimpie-lite'),
				),
			);

		/** Plugin Installation Ajax **/
		add_action( 'wp_ajax_wimpie_lite_plugin_installer', array( $this, 'wimpie_lite_plugin_installer_callback' ) );

		/** Plugin Installation Ajax **/
		add_action( 'wp_ajax_wimpie_lite_plugin_offline_installer', array( $this, 'wimpie_lite_plugin_offline_installer_callback' ) );

		/** Plugin Activation Ajax **/
		add_action( 'wp_ajax_wimpie_lite_plugin_activation', array( $this, 'wimpie_lite_plugin_activation_callback' ) );

		/** Plugin Activation Ajax (Offline) **/
		add_action( 'wp_ajax_wimpie_lite_plugin_offline_activation', array( $this, 'wimpie_lite_plugin_offline_activation_callback' ) );
	}
	public function wimpie_lite_welcome_register_menu() {
		$title = __( 'About Wimpie Lite', 'wimpie-lite' );

		add_theme_page( __( 'About Wimpie Lite', 'wimpie-lite' ), $title, 'edit_theme_options', 'wimpie-lite-about', array(
			$this,
			'wimpie_lite_about_theme_page'
			) );
	}
	public function wimpie_lite_about_theme_page() {
		require_once( ABSPATH . 'wp-load.php' );
		require_once( ABSPATH . 'wp-admin/admin.php' );
		require_once( ABSPATH . 'wp-admin/admin-header.php' );

		$wimpie_lite      = wp_get_theme();
		$active_tab   = isset( $_GET['tab'] ) ? $_GET['tab'] : 'getting_started';
		?>

		<div class="wrap wimpie-lite-wrap">

			<div class="top-wrap">
				<div class="text-wrap">
					<h1><?php echo __( 'Welcome to Wimpie Lite! - Version ', 'wimpie-lite' ) . esc_html( $wimpie_lite['Version'] ); ?></h1>

					<div
					class="about-text"><?php echo esc_html__( 'Wimpie Lite is now installed and ready to use! Get ready to build something beautiful. We hope you enjoy it! We want to make sure you have the best experience using wimpie Lite and that is why we gathered here all the necessary information for you. We hope you will enjoy using wimpie Lite, as much as we enjoy creating great products.', 'wimpie-lite' ); ?></div>
				</div>

				<div class="logo-wrap">
					<a target="_blank" href="<?php echo esc_url('https://8degreethemes.com/wordpress-themes/wimpie-pro/');?>"><img src="<?php echo esc_url('http://8degreethemes.com/demo/upgrade-wimpie-lite.jpg');?>" alt="<?php echo __('UPGRADE TO wimpie PRO','wimpie-lite');?>"></a>
				</div>
			</div>

			<div class="bottom-block">
				<ul class="wimpie-lite-tab-wrapper wp-clearfix">
					<li><a href="<?php echo esc_url( admin_url( 'themes.php?page=wimpie-lite-about&tab=getting_started' ) ); ?>"
						class="wimpie-lite-tab <?php echo $active_tab == 'getting_started' ? 'wimpie-lite-tab-active' : ''; ?>"><?php echo esc_html__( 'Getting Started', 'wimpie-lite' ); ?>

					</a></li>
					<li><a href="<?php echo esc_url( admin_url( 'themes.php?page=wimpie-lite-about&tab=recommended_plugins' ) ); ?>"
						class="wimpie-lite-tab <?php echo $active_tab == 'recommended_plugins' ? 'wimpie-lite-tab-active' : ''; ?> "><?php echo esc_html__( 'Recommended Plugins', 'wimpie-lite' ); ?>

					</a></li>
					<li><a href="<?php echo esc_url( admin_url( 'themes.php?page=wimpie-lite-about&tab=demo_import' ) ); ?>"
						class="wimpie-lite-tab <?php echo $active_tab == 'demo_import' ? 'wimpie-lite-tab-active' : ''; ?> "><?php echo esc_html__( 'Import Demo', 'wimpie-lite' ); ?>

					</a></li>
					<li><a href="<?php echo esc_url( admin_url( 'themes.php?page=wimpie-lite-about&tab=support' ) ); ?>"
						class="wimpie-lite-tab <?php echo $active_tab == 'support' ? 'wimpie-lite-tab-active' : ''; ?> "><?php echo esc_html__( 'Support', 'wimpie-lite' ); ?>

					</a></li>
					<li><a href="<?php echo esc_url( admin_url( 'themes.php?page=wimpie-lite-about&tab=changelog' ) ); ?>"
						class="wimpie-lite-tab <?php echo $active_tab == 'changelog' ? 'wimpie-lite-tab-active' : ''; ?> "><?php echo esc_html__( 'Changelog', 'wimpie-lite' ); ?>

					</a></li>
					<li><a href="<?php echo esc_url( admin_url( 'themes.php?page=wimpie-lite-about&tab=wimpie-pro-features' ) ); ?>"
						class="wimpie-lite-tab <?php echo $active_tab == 'wimpie-pro-features' ? 'wimpie-lite-tab-active' : ''; ?> "><?php echo esc_html__( 'Wimpie Pro Features', 'wimpie-lite' ); ?>

					</a></li>
					<li><a target="_blank" href="<?php echo esc_url('https://wpall.club/'); ?>"
						class="wimpie-lite-tab more-wp"><?php echo esc_html__( 'WordPress Resources', 'wimpie-lite' ); ?>

					</a></li>
				</ul>
				<div class="wimpie-lite-content-wrapper">
					<?php
					switch ( $active_tab ) {
						case 'getting_started':
						require_once get_template_directory() . '/inc/about/step-first.php';
						break;
						case 'recommended_plugins':
						require_once get_template_directory() . '/inc/about/step-second.php';
						break;
						case 'support':
						require_once get_template_directory() . '/inc/about/step-third.php';
						break;
						case 'changelog':
						require_once get_template_directory() . '/inc/about/step-fourth.php';
						break;
						case 'wimpie-pro-features':
						require_once get_template_directory() . '/inc/about/step-fifth.php';
						break;
						case 'demo_import':
						require_once get_template_directory() . '/inc/about/step-demo.php';
						break;
						default:
						echo "Start";
						require_once get_template_directory() . '/inc/about/step-first.php';
						break;
					}
					?>
				</div>
			</div>
		</div><!--/.wrap.about-wrap-->

		<?php
	}

	public function call_plugin_api( $slug ) {
		include_once( ABSPATH . 'wp-admin/includes/plugin-install.php' );

		if ( false === ( $call_api = get_transient( 'wimpie_lite_plugin_information_transient_' . $slug ) ) ) {
			$call_api = plugins_api( 'plugin_information', array(
				'slug'   => $slug,
				'fields' => array(
					'downloaded'        => false,
					'rating'            => false,
					'description'       => false,
					'short_description' => true,
					'donate_link'       => false,
					'tags'              => false,
					'sections'          => true,
					'homepage'          => true,
					'added'             => false,
					'last_updated'      => false,
					'compatibility'     => false,
					'tested'            => false,
					'requires'          => false,
					'downloadlink'      => false,
					'icons'             => true
					)
				) );
			set_transient( 'wimpie_lite_plugin_information_transient_' . $slug, $call_api, 30 * MINUTE_IN_SECONDS );
		}

		return $call_api;
	}

	public function check_active( $slug ) {
		if(is_array($slug)){
			$slug = (isset($slug['slug']))?$slug['slug']:$slug['location'];
		}
		if ( file_exists( ABSPATH . 'wp-content/plugins/' . $slug . '/' . $slug . '.php' ) ) {
			include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

			$needs = is_plugin_active( $slug . '/' . $slug . '.php' ) ? 'deactivate' : 'activate';
			$key = $slug . '/' . $slug . '.php';
			return array( 'status' => is_plugin_active( $slug . '/' . $slug . '.php' ), 'needs' => $needs, 'key'=>$key );
		}
		$all_plugins = get_plugins();
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		// echoes the main file plugin if it's active
		foreach($all_plugins as $key => $plugin) {
			$kerarr = explode('/',$key);
			if($kerarr[0]==$slug){
				if( is_plugin_active($key) ) {
					$needs = is_plugin_active( $key ) ? 'deactivate' : 'activate';
					return array( 'status' => is_plugin_active($key), 'needs' => $needs,'key'=>$key);
				}
			}
		}
		$key = $slug . '/' . $slug . '.php';
		return array( 'status' => false, 'needs' => 'install','key'=>$key );
	}

	public function check_for_icon( $arr ) {
		if ( ! empty( $arr['svg'] ) ) {
			$plugin_icon_url = $arr['svg'];
		} elseif ( ! empty( $arr['2x'] ) ) {
			$plugin_icon_url = $arr['2x'];
		} elseif ( ! empty( $arr['1x'] ) ) {
			$plugin_icon_url = $arr['1x'];
		} else {
			$plugin_icon_url = $arr['default'];
		}

		return $plugin_icon_url;
	}

	public function create_action_link( $state, $slug, $key ) {
		switch ( $state ) {
			case 'install':
			return wp_nonce_url(
				add_query_arg(
					array(
						'action' => 'install-plugin',
						'plugin' => $slug
						),
					network_admin_url( 'update.php' )
					),
				'install-plugin_' . $slug
				);
			break;
			case 'deactivate':
			return add_query_arg( array(
				'action'        => 'deactivate',
				'plugin'        => rawurlencode( $key ),
				'plugin_status' => 'all',
				'paged'         => '1',
				'_wpnonce'      => wp_create_nonce( 'deactivate-plugin_' . $key ),
				), network_admin_url( 'plugins.php' ) );
			break;
			case 'activate':
			return add_query_arg( array(
				'action'        => 'activate',
				'plugin'        => rawurlencode( $key ),
				'plugin_status' => 'all',
				'paged'         => '1',
				'_wpnonce'      => wp_create_nonce( 'activate-plugin_' . $key ),
				), network_admin_url( 'plugins.php' ) );
			break;
		}
	}

	/**
	 * Adds an admin notice upon successful activation.
	 *
	 * @since 1.8.2.4
	 */
	public function wimpie_lite_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && ( 'themes.php' == $pagenow ) && isset( $_GET['activated'] ) ) {
			add_action( 'admin_notices', array( $this, 'wimpie_lite_welcome_admin_notice' ), 99 );
		}
	}

	/**
	 * Display an admin notice linking to the welcome screen
	 *
	 * @since 1.8.2.4
	 */
	public function wimpie_lite_welcome_admin_notice() {
		?>
		<div class="updated notice is-dismissible">
			<p><?php echo sprintf( esc_html__( 'Welcome! Thank you for choosing wimpie lite! To fully take advantage of the best our theme can offer please make sure you visit our %swelcome page%s.', 'wimpie-lite' ), '<a href="' . esc_url( admin_url( 'themes.php?page=wimpie-lite-about' ) ) . '">', '</a>' ); ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=wimpie-lite-about' ) ); ?>" class="button"
				style="text-decoration: none;"><?php _e( 'Get started with wimpie Lite', 'wimpie-lite' ); ?></a></p>
			</div>
			<?php
		}

		public function get_local_dir_path($plugin) {

			$url = wp_nonce_url(admin_url('themes.php??page=wimpie-lite-about&tab=demo_import'),'wimpie-file-installation');
			if (false === ($creds = request_filesystem_credentials($url, '', false, false, null) ) ) {
					return; // stop processing here
				}

				if ( ! WP_Filesystem($creds) ) {
					request_filesystem_credentials($url, '', true, false, null);
					return;
				}

				global $wp_filesystem;
				$file = $wp_filesystem->get_contents( $plugin['location'] );

				$file_location = get_template_directory().'/inc/demo/'.$plugin['slug'].'.zip';

				$wp_filesystem->put_contents( $file_location, $file, FS_CHMOD_FILE );

				return $file_location;
			}



			/* ========== Plugin Installation Ajax =========== */
			public function wimpie_lite_plugin_installer_callback(){

				if ( ! current_user_can('install_plugins') )
					wp_die( __( 'Sorry, you are not allowed to install plugins on this site.', 'wimpie-lite' ) );

				$nonce = $_POST["nonce"];
				$plugin = $_POST["plugin"];
				$plugin_file = $_POST["plugin_file"];

				// Check our nonce, if they don't match then bounce!
				if (! wp_verify_nonce( $nonce, 'wimpie_lite_plugin_installer_nonce' ))
					wp_die( __( 'Error - unable to verify nonce, please try again.', 'wimpie-lite') );


         		// Include required libs for installation
				require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
				require_once ABSPATH . 'wp-admin/includes/class-wp-ajax-upgrader-skin.php';
				require_once ABSPATH . 'wp-admin/includes/class-plugin-upgrader.php';

				// Get Plugin Info
				$api = $this->wimpie_lite_call_plugin_api($plugin);

				$skin     = new WP_Ajax_Upgrader_Skin();
				$upgrader = new Plugin_Upgrader( $skin );
				$upgrader->install($api->download_link);

				$plugin_file = ABSPATH . 'wp-content/plugins/'.esc_html($plugin).'/'.esc_html($plugin_file);

				if($api->name) {
					$main_plugin_file = $this->get_plugin_file($plugin);
					if($main_plugin_file){
						activate_plugin($main_plugin_file);
						echo "success";
						die();
					}
				}
				echo "fail";

				die();
			}

			/** Plugin Offline Installation Ajax **/
			public function wimpie_lite_plugin_offline_installer_callback() {


				$file_location = $_POST['file_location'];
				$file = $_POST['file'];
				$github = $_POST['github'];
				$slug = $_POST['slug'];
				$plugin_directory = ABSPATH . 'wp-content/plugins/';

				$zip = new ZipArchive;
				if ($zip->open(esc_html($file_location), ZIPARCHIVE::CREATE) === TRUE) {

					$zip->extractTo($plugin_directory);
					$zip->close();

					if($github) {
						rename(realpath($plugin_directory).'/'.$slug.'-master', realpath($plugin_directory).'/'.$slug);
					}

					activate_plugin($file);
					echo "success";
					die();
				} else {
					echo 'failed';
				}

				die();
			}

			/** Plugin Offline Activation Ajax **/
			public function wimpie_lite_plugin_offline_activation_callback() {

				$plugin = $_POST['plugin'];
				$plugin_file = ABSPATH . 'wp-content/plugins/'.esc_html($plugin).'/'.esc_html($plugin).'.php';

				if(file_exists($plugin_file)) {
					activate_plugin($plugin_file);
				} else {
					echo "Plugin Doesn't Exists";
				}

				die();

			}

			/** Plugin Activation Ajax **/
			public function wimpie_lite_plugin_activation_callback(){

				if ( ! current_user_can('install_plugins') )
					wp_die( __( 'Sorry, you are not allowed to activate plugins on this site.', 'wimpie-lite' ) );

				$nonce = $_POST["nonce"];
				$plugin = $_POST["plugin"];

				// Check our nonce, if they don't match then bounce!
				if (! wp_verify_nonce( $nonce, 'wimpie_lite_plugin_activate_nonce' ))
					die( __( 'Error - unable to verify nonce, please try again.', 'wimpie-lite' ) );


	         	// Include required libs for activation
				require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
				require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
				require_once ABSPATH . 'wp-admin/includes/class-plugin-upgrader.php';


				// Get Plugin Info
				$api = $this->wimpie_lite_call_plugin_api(esc_attr($plugin));


				if($api->name){
					$main_plugin_file = $this->get_plugin_file(esc_attr($plugin));
					$status = 'success';
					if($main_plugin_file){
						activate_plugin($main_plugin_file);
						$msg = $api->name .' successfully activated.';
					}
				} else {
					$status = 'failed';
					$msg = esc_html__('There was an error activating $api->name', 'wimpie-lite');
				}

				$json = array(
					'status' => $status,
					'msg' => $msg,
					);

				wp_send_json($json);

			}

		}
		new wimpie_Lite_About_Theme();

		/** Initializing Demo Importer if exists **/
		if(class_exists('Instant_Demo_Importer')) :
			$demoimporter = new Instant_Demo_Importer();

		$demoimporter->demos = array(
			'wimpie-lite' => array(
				'title' => __('Wimpie Lite Demo', 'wimpie-lite'),
				'name' => 'wimpie-lite',
				'screenshot' => get_template_directory_uri().'/screenshot.png',
				'home_page' => 'front-page',
				'menus' => array(
					'main menu' => 'primary',
					'Footer Menu' => 'wimpie_lite_footer_menu'
					)
				),
			);

		$demoimporter->demo_dir = get_template_directory().'/inc/demo/'; // Path to the directory containing demo files
		$demoimporter->options_replace_url = ''; // Set the url to be replaced with current siteurl
		$demoimporter->option_name = ''; // Set the the name of the option if the theme is based on theme option
		endif;