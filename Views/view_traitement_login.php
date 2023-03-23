<?php

if ($_SESSION ["role"] === 1){
		header('Location: admin/');
	}
	else {
			header('Location: user/');
    }