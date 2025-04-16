<?php
session_start();
session_unset();
session_destroy();
echo "You have unset and destroy your session for this app";