<?phpregister_activation_hook(__FILE__, 'cp_gdeslon_activation');function cp_gdeslon_activation() {	$setting_name = 'cp_gdeslon_period_cron';	$setting_value = esc_attr( get_option( $setting_name ) );	wp_schedule_event( time(), $setting_value, 'cp_gdeslon_event');}register_deactivation_hook(__FILE__, 'cp_gdeslon_deactivation');function cp_gdeslon_deactivation() {	wp_clear_scheduled_hook('cp_gdeslon_event');}add_action('cp_gdeslon_event', 'cp_gdeslon_event_do');function cp_gdeslon_event_do() {	load_cp_csv_coupons();}