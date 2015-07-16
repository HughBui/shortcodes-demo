<?php

/* large contact with bio for contact page */

function contact_highlight_shortcode($attr){
  $a = shortcode_atts(array(
    'image' => null,
    'name' => 'Set Name in Shortcode',
    'title' => 'Set Title in shortcode',
    'bio' => null,
    'email' => null,
    'phone' => null,
  ),$attr);
  // set caps where needed
  $a['title'] = strtoupper($a['title']);
  return <<<HTML
    <div class="contact-highlight">
      <div class="contact-image-container">
        <div class="contact-image" style="background-image: url('{$a['image']}')"></div>
      </div>
      <div class="contact-bio-container">
        <div class="contact-meta contact-name">{$a['name']}</div>
        <div class="contact-title">{$a['title']}</div>
        <div class="contact-meta contact-desc">{$a['bio']}</div>
      </div>
      <div class="contact-highlight-info">
        <div class="contact-meta contact-email"><a href="mailto: {$a['email']}">Email: {$a['email']}</a></div>
        <div class="contact-meta contact-phone">Ph: {$a['phone']}</div>
      </div>
    </div>
HTML;
}

add_shortcode('contact-highlight','contact_highlight_shortcode');

/* contact information */

function contact_list_shortcode($attr, $content = null){
  $inner = parse_shortcode_content($content);
  return <<<HTML
    <div class="contact-list">
        <div class="contact-container">{$inner}</div>
        <div onclick="toggleVisibleClass('contact-form')" class="enquire-button">ENQUIRY</div>
    </div>
HTML;
}

function contact_item_shortcode($attr){
  $a = shortcode_atts(array(
    'image' => null,
    'name' => 'Set Name in the shortcode',
    'facility' => 'SET FACILITY IN SHORTCODE',
	'link' => '',
    'email' => null,
    'phone' => null,
  ), $attr);
  // set caps where required
  $a['facility'] = strtoupper($a['facility']);
  
  $departments = explode("|", $a['facility']);
  $links = explode("|", $a['link']);
  $deps = "";
  for($i = 0; $i < count($departments); $i++){
	$deps .= '<span '.(trim($links[$i]) == '' || isset($links[$i]) == false ? "" : "style=\"cursor: pointer;\" onclick=\"window.location='".trim($links[$i])."'\"").'>'.trim($departments[$i]).'</span> & ';
  }
  
  return '
    <div class="contact-item">
      <div class="contact-image" style="background-image: url('.$a['image'].')"></div>
      <div class="contact-meta contact-name">'.$a['name'].'</div>
      <div class="contact-meta contact-facility">'.substr($deps, 0, -3).'</div>
      <div class="contact-meta contact-email"><a href="mailto: '.$a['email'].'">Email: '.$a['email'].'</a></div>
      <div class="contact-meta contact-phone">Ph: '.$a['phone'].'</div>
    </div>';
}

add_shortcode('contact-list', 'contact_list_shortcode');
add_shortcode('contact', 'contact_item_shortcode');

/* enquiry form shortcode */
function enquiry_form_shortcode($atts){
  $a = shortcode_atts(array(
    'email' => ''
  ),$atts);

  $action = get_permalink(get_page_by_path('contact'));
  $nouce = generate_nounce();

  return <<<HTML
<div id="contact-form" class="form-container">
  <form action="{$action}" method="post" onsubmit="return validateContactForm(this);">
    {$nouce}
    <input type="hidden" name="mailto" value="{$a['email']}">
    <div>
      <input type="text" name="firstname" onfocus="clearValidity(this)" placeholder="FIRST NAME">
      <input type="text" name="lastname"  onfocus="clearValidity(this)" placeholder="LAST NAME">
    </div>
    <div>
      <input type="text" name="company" onfocus="clearValidity(this)"  placeholder="COMPANY">
      <input type="text" name="location" onfocus="clearValidity(this)"  placeholder="LOCATION">
    </div>
    <div>
      <textarea rows="4" name="message"  onfocus="clearValidity(this)" placeholder="MESSAGE"></textarea>
    </div>
    <div>
      <input type="submit" value="EMAIL">
    </div>
  </form>
</div>
HTML;
}

add_shortcode('enquiry-form','enquiry_form_shortcode');

/* perth skyline graphic */

function perth_skyline_shortcode(){
  $skyline_image = get_static_uri('contact-image-bot.jpg');
  return <<<HTML
<div><img class="perth-skyline" src="{$skyline_image}"></img></div>
HTML;
}

add_shortcode('perth-skyline-graphic', 'perth_skyline_shortcode');

?>
