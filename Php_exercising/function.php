<?php

function ShowInInput(string $Name){

    if(isset($_POST[$Name])){
        echo $_POST[$Name];
    }

};

function ShowInInputChecked(string $Name){

    if(isset($_POST[$Name])){
        echo "Checked";
    }

};