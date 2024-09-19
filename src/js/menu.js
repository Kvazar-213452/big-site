function color_div_chort(name) {
  let div_url1 = $('#color_b1');
  let div_url2 = $('#color_b2');
  let div_url3 = $('#color_b3');
  let div_url4 = $('#color_b4');
  let div_url5 = $('#color_b5');
  let div_url6 = $('#color_b6');

  if (div_url1.hasClass('color_setings_button_a')) {
    div_url1.toggleClass('color_setings_button_a color_setings_button_n');
  }
  if (div_url2.hasClass('color_setings_button_a')) {
    div_url2.toggleClass('color_setings_button_a color_setings_button_n');
  }
  if (div_url3.hasClass('color_setings_button_a')) {
    div_url3.toggleClass('color_setings_button_a color_setings_button_n');
  }
  if (div_url4.hasClass('color_setings_button_a')) {
    div_url4.toggleClass('color_setings_button_a color_setings_button_n');
  }
  if (div_url5.hasClass('color_setings_button_a')) {
    div_url5.toggleClass('color_setings_button_a color_setings_button_n');
  }
  if (div_url6.hasClass('color_setings_button_a')) {
    div_url6.toggleClass('color_setings_button_a color_setings_button_n');
  }
  
  let div_url_a = $(name);
  div_url_a.toggleClass('color_setings_button_n color_setings_button_a');
}