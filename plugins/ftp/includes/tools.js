function fillboxes(boxid) {

  form = document.getElementsByTagName('INPUT');
  for (i=0; i < form.length; i++) {
    if (form[i].name.substr(0,4)==('cbx' + boxid)) {
      form[i].checked = !form[i].checked;
    }
  }
  
}
