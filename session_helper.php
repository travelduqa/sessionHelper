session_start();
//flash message helper
function flash($title='', $message='', $class = 'success'){

        if(!empty($message) && empty($_SESSION['flash_title'])){
            if(!empty($_SESSION['flash_title'])){
                unset($_SESSION['flash_title']);
				unset($_SESSION['flash_message']);
				unset($_SESSION['flash_type']);
            }
            
            $_SESSION['flash_title']   = $title;
			$_SESSION['flash_message'] = $message;
			$_SESSION['flash_type']    = $class;
			
        }elseif(empty($message) && !empty($_SESSION['flash_title'])){
            echo '<script>$(document).ready(function(){ toster_message("'.$_SESSION['flash_title'].'", "'.$_SESSION['flash_message'].'", "'.$_SESSION['flash_type'].'" ); });</script>';
			
        }
		
		
}
