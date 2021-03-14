<?php

function convertDate($timestamp, $format){
    //==Convert String date to some format
    switch ($format) {
        case 'mysql':
            // * MySQL DATETIME format,  2018-02-11 11:05:20.
        $the_date = date('Y-m-d H:i:s', strtotime($timestamp));
        break;  
        case 'mydate':
            // * mydate, dd-mmm-yy, 11-Feb-18..
        $the_date = date('d-M-y', strtotime($timestamp));
        break;
        case 'overtime':
            // * mydate, dd-mmm-yy, 11-Feb-18..
        $the_date = date('d-M-y H:i', strtotime($timestamp));
        break;                                      
        break;  
    }
    return $the_date;
}

// $timestamp berupa UNIX Timestamp format (bukan string), seperti 36786566
function get_nice_date($timestamp, $format){
	// *Assuming today is Friday, February 11th, 2018, 11:05:20 am, and that we are in the
	// *Mountain Standard Time (MST) Time Zone
	// Check detail date time format at :
	// http://php.net/manual/en/datetime.formats.date.php
	// http://php.net/manual/en/function.date.php
	// 
	// Big Note ::
	// Additionally added "strtotime(strtotime($timestamp))" instead of only "$timestamp" --> to_ 
	// _prevent error [A non well formed numeric value encountered]
	switch ($format) {
		case 'full':
			// * Full, Friday 11th of February 2018 at 11:05:20 AM. (a= am, A= AM)
		$the_date = date('l jS \of F Y \a\t h:i:s A', $timestamp);
		break;
		case 'cool':
			// * cool, Friday 11th of February 2018.
		$the_date = date('l jS \of F Y', $timestamp);
		break;
		case 'shorter1':
			// * Shorter1, 11th of February 2018.
		$the_date = date('jS \of F Y', $timestamp);
		break;
		case 'shorter2':
			// * Shorter2, February 11, 2018, 11:05 am. (a= am, A= AM)
		$the_date = date('F j, Y, g:i a', $timestamp);
		break;	
		case 'mini':
			// * Mini, 11th Feb 2018.
		$the_date = date('jS M Y', $timestamp);
		break;
		case 'mysql':
			// * MySQL DATETIME format,  2018-02-11 11:05:20.
		$the_date = date('Y-m-d H:i:s', $timestamp);
		break;	
		case 'mysql_date':
			// * MySQL DATETIME format,  2018-02-11.
		$the_date = date('Y-m-d', $timestamp);
		break;	
		case 'oldschool':
			// * Oldschool, 11/2/18.
		$the_date = date('j\/n\/y', $timestamp);
		break;
		case 'datepicker_us':
			// * Datepicker, 02/11/2018.
		$the_date = date('m\/d\/Y', $timestamp);
		break;					
		case 'datepicker_dmy':
			// * Datepicker, 11-2-2018.
		$the_date = date('d\-m\-Y', $timestamp);
		break;
		case 'datepicker_mdy':
			// * Datepicker, 2-11-2018.
		$the_date = date('m\-d\-Y', $timestamp);
		break;	
		case 'datepicker_mdy_dot':
			// * Datepicker mdy with dot, 2-11-18.
		$the_date = date('m.d.y', $timestamp);
		break;
		case 'ymd':
			// * ymd format, 20180211.
		$the_date = date('Ymd', $timestamp);
		break;		
		case 'monyear':
			// * MonYear, February 2018.
		$the_date = date('F Y', $timestamp);
		break;
		case 'mydate':
			// * mydate, dd-mmm-yy, 11-Feb-18..
			// * y --> mydate, dd-mmm-yy, 11-Feb-18..
			// * Y --> mydate, dd-mmm-yyyy, 11-Feb-2018..
		$the_date = date('d-M-Y', $timestamp);
		break;
		case 'overtime':
			// * mydate, dd-mmm-yy, 11-Feb-18..
		$the_date = date('d-M-y H:i', $timestamp);
		break;										
		default:
			// *mine,  Mmm-dd-yy, Feb-11-18.
		$the_date = date('M-d-y	', $timestamp);
		break;	
	}
	return $the_date;
}

function convert_datepicker_to_timestamp($datepicker){
	$timestamp = strtotime($datepicker);

	$year = date('Y', $timestamp);
	$month = date('m', $timestamp);
	$day = date('d', $timestamp);
	$hour = 7;
	$minute = 0;
	$second = 0;

	$timestamp = mktime($hour, $minute, $second, $month, $day, $year);
	return $timestamp;

}

function convert_datetimepicker_to_timestamp($datetimepicker){
	$timestamp = strtotime($datetimepicker);

	$year = date('Y', $timestamp);
	$month = date('m', $timestamp);
	$day = date('d', $timestamp);
	$hour = date('H', $timestamp);
	$minute = date('i', $timestamp);
	$second = date('s', $timestamp);

	$timestamp = mktime($hour, $minute, $second, $month, $day, $year);
	return $timestamp;

}

function make_unixtimestamp($datetimepicker){
	$timestamp = strtotime($datetimepicker);

	$year = date('Y', $timestamp);
	$month = date('m', $timestamp);
	$day = date('d', $timestamp);
	$hour = date('H', $timestamp);
	$minute = date('i', $timestamp);
	$second = date('s', $timestamp);

	$timestamp = mktime($hour, $minute, $second, $month, $day, $year);
	return $timestamp;
}

function rupiah($angka){	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;	 
}	

function makeRupiah($angka){
	return "Rp ".number_format(@$angka,0,".", ".");
}

function makeDirham($angka){
	return "Dhs. ".number_format(@$angka,2,",", ".");
}

function _get_currency_symbol(){
	$symbol = "&pound;";
	return $symbol;
}

function strip_tags_content($text) {
    return preg_replace('@<(\w+)\b.*?>.*?</\1>@si', '', $text);
}

function remove_tags_content($string) { 
    // ----- remove HTML TAGs ----- 
    $string = preg_replace ('/<[^>]*>/', ' ', $string); 
    // ----- remove control characters ----- 
    $string = str_replace("\r", '', $string);
    $string = str_replace("\n", ' ', $string);
    $string = str_replace("\t", ' ', $string);
    // ----- remove multiple spaces ----- 
    $string = trim(preg_replace('/ {2,}/', ' ', $string));
    return $string; 

}

function _get_item_segment(){
	// *Return the segment for the category Page
	$segment = "segment_ke_x/segment_ke_y";
	return $segment;
}

function _get_page_not_found(){
	$msg = "<h1>Page that you're looking for is not available</h1>";
	$msg .= "<p>Please check your url and try again</p>";
	return $msg;
}  

function autogen($tbl_name){
	$ci =& get_instance();
	$sql_qry = "SHOW COLUMNS FROM ".$tbl_name;
	$qry = $ci->db->query($sql_qry);
	foreach ($qry->result() as $key) {
		$nama_kolom = $key->Field;
		if($nama_kolom != 'uid'){
			// *Test
			echo $nama_kolom." - ";
		}	
				
	}
	echo "<hr>";
	foreach ($qry->result() as $key) {
		$nama_kolom = $key->Field;
		if($nama_kolom != 'uid'){
			// *Test
			echo $nama_kolom."<br>";
		}	
				
	}
	echo "<hr>";
	foreach ($qry->result() as $key) {
		$nama_kolom = $key->Field;
		if($nama_kolom != 'uid'){
			// *AutoGen untuk:: $data['usr_ID'] = $this->input->post('i_usr_ID', TRUE);
			echo '$data[\''.$nama_kolom.'\'] = $this->input->post(\''.$nama_kolom.'\', TRUE);<br>';
		}
	}
	echo "<hr>";
	foreach ($qry->result() as $key) {
		$nama_kolom = $key->Field;
		if($nama_kolom != 'uid'){
			// *AutoGen untuk:: $data['dt_usr_ID'] = $row->usr_ID;
			echo '$data[\''.$nama_kolom.'\'] = $row->'.$nama_kolom.';<br>';
		}
	}
	echo "<hr>";
	foreach ($qry->result() as $key) {
		$nama_kolom = $key->Field;
		if($nama_kolom != 'uid'){
			// *AutoGen untuk:: $data['dt_usr_ID'] = $row->usr_ID;
			echo '$_'.$nama_kolom.' = $row->'.$nama_kolom.';<br>';
		}
	}
	echo "<hr>";
	//Autogen : Form_validation
	foreach ($qry->result() as $key) {
		$nama_kolom = $key->Field;
		if($nama_kolom != 'uid'){
			// *AutoGen untuk:: $data['dt_usr_ID'] = $row->usr_ID;
			echo '$this->form_validation->set_rules(\''.$nama_kolom.'\', \'Rules_Title\', \'required\');<br>';
		}
	}
}

if( ! function_exists('get_language')){
	function get_language($frase = Null){
		$ci =& get_instance();
		if($current_language = $ci->session->userdata('language')){
			//Blank
		}else{
			$current_language = $ci->db->get_where('tbl_setting', array('type' => 'language'))->row()->description;
		}

		if($current_language == ""){
			$current_language = 'english';
			$ci->session->set_userdata('current_language', $current_language);
		}
	}
}

function _get_user_id(){
	$ci =& get_instance();
	//--Attempt to get user id
	//--Start by checking a session variable
	$user_id = $ci->session->userdata('ses_UserID');

	// if(empty($user_id)){
	// 	//--Check from a valid cookie:
	// 	$ci->load->module('site_cookies');
	// 	$user_id = $ci->site_cookies->_attempt_get_user_id();
	// } 
	return $user_id;
}

function get_user_info($param = null){
	$ci =& get_instance();
	if($param == null){
		return $ci->session->userdata();
	}else{
		return $ci->session->userdata($param);
	}
}

function generate_random_string($length){
	$characters = '23456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
	$randomString = '';
	for($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, strlen($characters) - 1)]; 
	}
	return $randomString;
}

function random_string($len = 10) {
    $word = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9));
    shuffle($word);
    return substr(implode($word), 0, $len);
}

function random_num($digits){
  return rand(pow(10, $digits - 1) - 1, pow(10, $digits) - 1);
}

function n_digit_random($digits) {
  $temp = "";

  for ($i = 0; $i < $digits; $i++) {
    $temp .= rand(0, 9);
  }

  return (int)$temp;
}

function _hash_string($str){
	$hashed_string = password_hash($str, PASSWORD_BCRYPT, array('cost' => 11));
	return $hashed_string;
}

function _verify_hashed_string($plain_text_str, $hashed_string){
	$result = password_verify($plain_text_str, $hashed_string);
	return $result;
}

function form_dropdown_provinsi(){
	$options = array(
		0	=> 'Pilih Provinsi',
        11	=> 'Aceh',
        12	=> 'Sumatera Utara',
        13	=> 'Sumatera Barat',
        14	=> 'Riau',
        15	=> 'Jambi',
        16 	=> 'Sumatera Selatan',
        17 	=> 'Bengkulu',
        18 	=> 'Lampung',
        19 	=> 'Kepulauan Bangka Belitung',
        21 	=> 'Kepulauan Riau',
        31 	=> 'DKI Jakarta',
        32 	=> 'Jawa Barat',
        33 	=> 'Jawa Tengah',
        34 	=> 'DI Yogyakarta',
        35 	=> 'Jawa Timur',
        36	=> 'Banten',
        51	=> 'Bali',
        52	=> 'Nusa Tenggara Barat',
        53	=> 'Nusa Tenggara Timur',
        61	=> 'Kalimantan Barat',
        62	=> 'Kalimantan Timur',
        63	=> 'Kalimantan Selatan',
        64	=> 'Kalimantan Timur',
        65	=> 'Kalimantan Utara',
        71	=> 'Sulawesi Utara',
        72	=> 'Sulawesi Tengah',
        73	=> 'Sulawesi Selatan',
        74	=> 'Sulawesi Tenggara',
        75	=> 'Gorontalo',
        76	=> 'Sulawesi Barat',
        81	=> 'Maluku',
        82	=> 'Maluku Utara',
        91	=> 'Papua Barat',
        94	=> 'Papua',
	);
	
	return form_dropdown('provinsi', $options, 0, 'id="provinsi" class="form-control" required');
}

//--NgeSET Link yang di klik jadi ACTIVE
function isPageActive($page,$class){
	$ci =& get_instance();
	if($page == $ci->uri->segment(2)){
		return $class;
	}

	//contoh:
	/* 
	<li class="nav-item">
      <a id="uangkasku" class="nav-link <?= isPageActive('uangkas','active') ?>" href="<?= base_url();?>uangkas/laporankas">Uang Kas</a>
    </li>
    */
}

function isPageActive12($page,$class){
	$ci =& get_instance();
	$bit1 = $ci->uri->segment(1);
	$bit2 = $ci->uri->segment(2);
	if($page == $bit1 || $page ==$bit2){
		return $class;
	}
}

function pagination_bs4($pagination_data){
	$ci =& get_instance();	
	// Note : to make this function work, it should have pagination_data like:
	// $target_url, $total_rows, $offset_segment, $limit (tot data per page)

	$target_url = $pagination_data['target_url'];
	$total_rows = $pagination_data['total_rows'];
	$offset_segment = $pagination_data['offset_segment'];
	$limit = $pagination_data['limit']; //<-- tot data per page

	$get_num_links = $total_rows / $limit;
    $num_links = floor($get_num_links);

	$ci->load->library('pagination');

	$config['base_url'] = $target_url;
	$config['total_rows'] = $total_rows;
	
	$config['uri_segment'] = $offset_segment;

	$config['per_page'] = $limit; //-per_page = Items per page
	$config['num_links'] = $num_links; //-num_links = Links qty

	$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
    $config['full_tag_close']   = '</ul></nav></div>';

	$config['attributes'] = ['class' => 'page-link'];
		
	$config['first_link'] = false;
	$config['first_tag_open'] = '<li class="page-item">';
	$config['first_tag_close'] = '</li>';

	$config['prev_link'] = '&laquo';
	$config['prev_tag_open'] = '<li class="page-item">';
	$config['prev_tag_close'] = '</li>';

	$config['next_link'] = '&raquo';
	$config['next_tag_open'] = '<li class="page-item">';
	$config['next_tag_close'] = '</li>';

	$config['last_link'] = false;
	$config['last_tag_open'] = '<li class="page-item">';
	$config['last_tag_close'] = '</li>';

	$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
	$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';

	$config['num_tag_open'] = '<li class="page-item">';
	$config['num_tag_close'] = '</li>';

	$ci->pagination->initialize($config);

	$halamanku =  $ci->pagination->create_links();
	return $halamanku;
}

function post_pagination($modelName=NULL, $perPage=NULL)
{
	$_this =& get_instance();
	$_this->load->library('pagination');
	//LOAD MODEL: Ex: Artikel_mdl, User_mdl,..
	$load_model = ucfirst($modelName).'_mdl';
	$perpage = $perPage;	
	// $website_setting = $_this->site->website_setting;

	/* pagination config for post category */
	if($_this->uri->segment(2) == 'page'){
		// $base_url = base_url($modelName).'/hal';
		$base_url = base_url().'/page';

		// if(post_search_keyword()){
		// 	$post_search_keyword = post_search_keyword();					
		// 	$total_rows = $_this->$load_model->totalRows(array('post_type' => $modelName, 'post_status' => 'publish', "post_title LIKE" => "%$post_search_keyword%"));
		// 	$perpage = $limit = $website_setting['pencarian'];
		// }
		// else{
		// 	$total_rows = $_this->$load_model->totalRows(array('post_type' => $modelName, 'post_status' => 'publish'));	
		// }

		$total_rows = $_this->$load_model->totalRows(array('Status' => 'Published'));	

		
	}
	else{
		$kategori = $_this->uri->segment(1);
		// $kategori = $_this->uri->segment(2);
		// $total_rows = $_this->$load_model->count(array('post_type' => $modelName, 'post_status' => 'publish', "post_category LIKE" => "%$kategori%"));
		$total_rows = $_this->$load_model->totalRows(array('Status' => 'Published', "Category LIKE" => "%$kategori%"));
		// $base_url = set_url($moduleName).'/'.$kategori.'/hal';
		// $base_url = base_url($modelName).'/'.$kategori.'/hal';
		// $base_url = base_url().'artikel/categ/'.$kategori.'/page';
		$base_url = base_url().'artikels/';
	}

	$config['base_url'] = $base_url;
    $config['total_rows'] = $total_rows;
    $config['per_page'] = $perpage;
    $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
    $config['full_tag_close']   = '</ul></nav></div>';

	$config['attributes'] = ['class' => 'page-link'];
		
	$config['first_link'] = false;
	$config['first_tag_open'] = '<li class="page-item">';
	$config['first_tag_close'] = '</li>';

	$config['prev_link'] = '<span class="ti-angle-left"></span>';
	// $config['prev_link'] = '&laquo';
	$config['prev_tag_open'] = '<li class="page-item">';
	$config['prev_tag_close'] = '</li>';

	$config['next_link'] = '<span class="ti-angle-right"></span>';
	// $config['next_link'] = '&raquo';
	$config['next_tag_open'] = '<li class="page-item">';
	$config['next_tag_close'] = '</li>';

	$config['last_link'] = false;
	$config['last_tag_open'] = '<li class="page-item">';
	$config['last_tag_close'] = '</li>';

	$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
	$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';

	$config['num_tag_open'] = '<li class="page-item">';
	$config['num_tag_close'] = '</li>';
	// $config['use_page_numbers'] = TRUE ;
	// $config['reuse_query_string'] = TRUE;


	$_this->pagination->initialize($config);

	return $_this->pagination->create_links();		
}

function post_search_keyword(){
	$_this =& get_instance();
	return strip_tags($_this->post->post_search_keyword);
}

function get_categ_title($parentID)
{
	$_this =& get_instance();
	$_this->load->model('Categories_mdl', 'myModel');
	$data = $_this->myModel->getData(array('uid' => $parentID), null)->row();
	$catTitle = $data->Categ_name;
	return $catTitle;
}

function checkPost()
{
	$ci =& get_instance();
    //--- TESTING:
    $p = $ci->input->post();
    echo "<pre>";
    print_r ($p);
    echo "</pre>";
    die();        
}

function checkSQL($variable)
{
	$ci =& get_instance();
	if($variable == "") { echo "Data Empty"; }
	echo "<pre>";
	print_r ($variable);
	echo "</pre>";
	echo "<hr>";
	echo $ci->db->last_query();
	die();
}

function checkSha1($pass)
{
	echo sha1($pass);
}