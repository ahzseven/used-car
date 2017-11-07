<?php
/**
 * 公用的方法
 */

function checkrule($id, $arr){
    if (in_array($id, $arr)) {
        echo 'checked';
    }
}