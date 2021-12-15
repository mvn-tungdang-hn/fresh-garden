import $ from "jquery/dist/jquery";
import "jquery-validation/dist/jquery.validate";

$().ready(function () {
  $("#form").validate({
    rules: {
      title: {
        required: true,
        maxlength: 255
      },
      price: {
        digits: true
      },
      quantity: {
        digits: true
      }
    }
  });
});
