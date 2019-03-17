<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// additional pagination configuration

	$config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';

        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';

        $config['cur_tag_open']     = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close']    = '</a></li>';

 
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close']  	= '<span aria-hidden="true"></span></span></li>';

        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close']  	= '</span></li>';

        $config["first_link"] 		= "&laquo;";
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tag_close']	= '</span></li>';
        $config["last_link"] 		= "&raquo;";
        
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close']  	= '</span></li>';