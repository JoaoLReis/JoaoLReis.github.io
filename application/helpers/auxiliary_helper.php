<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('album_image_location'))
{
    function image_location($_album='', $_image_name='', $_extension='jpg')
    {
        if(empty($_album) || empty($_image_name))
            return base_url('media/');
        else
        {
            return base_url('media/'.$_album.'/'.$_image_name.'.'.$_extension);
        }
    }
}

if(!function_exists('is_admin'))
{
    function is_admin()
    {
        return isset($_SESSION['username']) && isset($_SESSION['admin']) && $_SESSION['admin'] == 654321;
    }
}

if(!function_exists('var_dump_safe'))
{
    function var_dump_safe($_variable)
    {
        if(ENVIRONMENT != 'production')
            return var_dump($_variable);
    }
}

if(!function_exists('clean_text'))
{
    function clean_text($_variable)
    {
        $string = str_replace('_', ' ', $_variable);
        return ucwords(strtolower($string));
    }
}

if(!function_exists('form_item'))
{
    function form_item($_label, $_id, $_type, $_array = array())
    {
        echo '<div class="form-group">';
            echo '<div class="row">';
                echo '<div class="col-lg-4 col-sm-4">';
                    printf('<label for="%s" class="control-label">%s</label>', $_id, $_label);
                echo '</div>';
                echo '<div class="col-lg-8 col-sm-8">';
                    form_input_body($_label, $_id, $_type, $_array);
                    echo '<span class="text-danger">'. form_error($_id) . '</span>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
}


if(!function_exists('form_input_general'))
{
    function form_input_general($_label, $_id, $_type, $_array)
    {
        $value = set_value($_id);

        if($_type == 'checkbox')
        {
            $value = !empty($_array['checked']);
        }

        printf('<input class="form-control" id="%s" name="%s" placeholder="%s" type="%s" value="%s"', $_id, $_id, $_label, $_type, $value);
        if(!empty($_array))
        {
            foreach ($_array AS $property=>$value)
            {
                if(!empty($value))
                {
                    echo " ".$property.'="'.$value.'"';
                }
            }
        }
        echo '/>';
    }
}

if(!function_exists('form_input_select'))
{
    function form_input_select($_label, $_id, $_type, $_array)
    {
        printf('<select class="form-control" id="%s" name="%s">', $_id, $_id);

        foreach($_array AS $album_id=>$album_name)
        {
            printf('<option value="%s">%s</option>', $album_id, $album_name);
        }
        echo '</select>';
    }
}

if(!function_exists('form_input_body'))
{
    function form_input_body($_label, $_id, $_type, $_array)
    {
        if($_type == 'select') return form_input_select($_label, $_id, $_type, $_array);
        elseif($_type == 'file'){ echo form_upload($_array); return; }
        else return form_input_general($_label, $_id, $_type, $_array);
    }
}

if(!function_exists('carousel_image'))
{
    function carousel_image($_identifier, $_name, $_title='', $_description='', $_is_active = false)
    {
        printf('<div class="album_image_container item %s">', (!empty($_is_active) ? 'active' : ''));
            echo '<div class="hovereffect">';
                echo '<div class="album_image hovereffect_img" style="background-image: url('.album_image_location($_identifier, $_name).');"></div>';
                echo '<div class="overlay">';
                    printf('<p>%s</p>', $_description);
                echo '</div>';
                echo '<div class="overlay_top">';
                    printf('<h2>%s</h2>', $_title);
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
}