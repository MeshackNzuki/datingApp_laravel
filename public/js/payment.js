
function validate(){

  var phone = $("#InputNumber1").val();

  var phonenoreg = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;

  if ((phone.match(phonenoreg))) {
     $("form").submit();
  }
  else {
    alert("Phone Number is invalid");
    return 0;
  }
}