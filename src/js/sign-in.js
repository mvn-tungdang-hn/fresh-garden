import $ from "jquery/dist/jquery";
import "jquery-validation/dist/jquery.validate";

$().ready(function () {
  $("#form-sign-in").validate({
    rules: {
      email: {
        required: true
      },
      password: {
        required: true
      }
    }
  });
});
