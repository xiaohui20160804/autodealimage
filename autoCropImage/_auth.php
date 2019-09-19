<?php
//防止生成大的图片
if ($width > 3000 OR $height > 3000) $autoCropImage->show_not_found();
