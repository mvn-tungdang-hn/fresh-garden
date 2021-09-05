import $ from "jquery/dist/jquery";
import "jquery-validation/dist/jquery.validate";

$().ready(function () {
  $("#form-sign-up").validate({
    rules: {
      firstName: {
        required: true
      },
      lastName: {
        required: true
      },
      email: {
        required: true
      },
      password: {
        required: true
      },
      passwordConfirm: {
        equalTo: "#password"
      }
    }
  });
});
