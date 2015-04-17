<?php

function morgue_get_user_data() {
  return array("username" => $_SERVER["REMOTE_USER"]);
}
