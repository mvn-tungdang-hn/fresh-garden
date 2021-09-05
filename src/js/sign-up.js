import $ from "jquery/dist/jquery";
import "jquery-validation/dist/jquery.validate";

import { Toast } from "bootstrap";

$().ready(function () {
  const form = $("#form-sign-up"),
    toast = Toast.getOrCreateInstance($("#toast")),
    action = new URLSearchParams(window.location.search).get("action");

  form.validate({
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

  if (action === "fail") {
    toast.show();
  }
});
