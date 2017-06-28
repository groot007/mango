<?php

/**
 * Implements Class for work integration Vtiger.
 */

include('geoip/geo.php');

class ModelIntegration {

  // Hiddem fields.
  var $city;
  var $name;
  var $source  = 'unknown';
  var $keyword = 'unknown';
  var $adcamp  = 'unknown';
  var $publicid;
  var $hidden_input_form;
  var $leadsource;
  var $config_array;

  function __construct($leadsource_val = '', $calltracking = FALSE) {
    // Get settings.
    $ini_array = parse_ini_file('config.ini');
    $this->publicid           = $ini_array['publicid'];
    $this->name               = $ini_array['name'];
    $this->leadsource         = $leadsource_val;  
    $this->hidden_input_form  = explode(', ', $ini_array['hidden_input_form']);
    if (isset($_GET['utm_source']) && $_GET['utm_source']) {
      $this->source  = isset($_GET['utm_source']) ? $_GET['utm_source'] : 'unknown';
      $this->adcamp  = isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : 'unknown';
      $this->keyword = isset($_GET['utm_term']) ? $_GET['utm_term'] : 'unknown';
    }    
    $this->city         = $this->get_city();
    $this->config_array = $ini_array;
    if ($calltracking) {
      $calltracking_progress = $this->calltrackingProgress();
    }
  }

  /**
   * Method for generate hidden inputs to the form.
   */
  public function generate_hidden_inputs() {
    $input_names   = $this->hidden_input_form;
    $hidden_inputs = '';
    foreach ($input_names as $input_name) {
      $value_input    = (isset($this->{$input_name}) && $this->{$input_name}) ? $this->{$input_name} : '';
      $hidden_inputs .= "<input type='hidden' name={$input_name} value={$value_input}>";
    }
    return $hidden_inputs;
  }

  /**
   * Method for generate post query to crm Vtiger.
   */
  public function generate_post_query($post_data) {
    $fields_for_crm  = explode(', ', $this->config_array['fields_for_crm']);
    $fields_for_site = explode(', ', $this->config_array['fields_for_site']);

    $query = array();
    foreach ($fields_for_crm as $index => $value) {
      $index_field = $fields_for_site[$index];
      switch ($index_field) {
        case 'city':
        case 'source':
        case 'adcamp':
        case 'keyword':
          $value_field = ($post_data[$index_field]) ? $post_data[$index_field] : 'Неизвестно';
          $query[] = $value . '=' . $value_field;
          break;

        default:
          if (is_array($post_data[$index_field])) {
            $query[] = $value . '=' . json_encode($post_data[$index_field]);
          } else {
            $query[] = $value . '=' . $post_data[$index_field];
          }
          break;
      }
    }

    $query_post = implode('&', $query);
    return $query_post;
  }

  /**
   * Method for get city.
   */
  private function get_city() {
    $geo  = new Geo(); 
    $city = $geo->get_value('city', true);
    return $city;
  }

  /**
   * Method for get city.
   */
  private function get_region() {
    $geo  = new Geo(); 
    $city = $geo->get_value('region', true);
    return $city;
  }

  /**
   * Method for get adsress.
   */
  public function get_address() {
    $address = $this->config_array['address'];
    return $address;
  }

  /**
   * Method for get form url.
   */
  public function get_form_url() {
    $form_url = $this->config_array['form_url'];
    return $form_url;
  }
  
  /**
   * Method for get form url.
   */
  public function get_calltracking_url() {
    return $this->config_array['calltracking_url_to_crm'];
  }
  
  /**
   * Method for get form url.
   */
  public function calltrackingProgress() {
    $region           = $this->get_region();
    $configs          = $this->config_array;
    $clas_name_insert = $configs['calltracking_phone_class'];
    $url_to_crm       = $configs['calltracking_url_to_crm'];

    $query = array(
      'city'         => $region,
      'ip'           => $_SERVER["REMOTE_ADDR"],
      'utm_source'   => $this->source,
      'utm_campaign' => $this->adcamp,
      'utm_term'     => $this->keyword,
    );

    $json_query = json_encode($query);

    echo '
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="https://mc.yandex.ru/metrika/watch.js"></script>
      <script>
        $(document).ready(function(){
          var data           = ' . $json_query .';
          var yaCounter      = new Ya.Metrika();
          var yaCounterVal   = yaCounter.getClientID();
          data["ClientidYM"] = yaCounterVal;
          var formURL        = "integration_vtiger/post_calltracking.php";
          $.ajax({
            type: "POST",
            url: formURL,
            data: data,
            success: function(result){
              if (result != "Error" && result !== null) {
                $(".' . $clas_name_insert . '").html(result);
                var attr = $(".' . $clas_name_insert . '").attr("href");
                if (typeof attr !== typeof undefined && attr !== false) {
                  $(".' . $clas_name_insert . '").attr("href", result);
                }
              }
            }
          });
        });
      ';
      echo '</script>';
  }

}
