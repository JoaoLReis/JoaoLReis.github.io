<?php

if(!empty($content))
{
    $this->view($content);
    return;
}
?>

<div class="container">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Work Projects
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item">
            <div class="container_box">
                <div class="main_page_container">
                    <a href="https://www.worldwaronline.com/" target="_blank">
                        <div class="main_page_image" style="background-image: url(<?php echo image_location('WWO', 'main', 'png'); ?>);"></div>
                    </a>
                </div>
            </div>
            <h2><a href="https://www.worldwaronline.com/" target="_blank"> World War Online </a></h2>
            <h4> Mar 2016 - Jun 2017 <a href="http://www.chilltime.com/" target="_blank">[Chilltime]</a></h4>
            <p> Developed and maintained core features for the company's main product, both front-end, using HTML5, CSS3 and Javascript, and back-end, using PHP. My main contributions were the development of a new, more dynamic battle system and a community based translation system. Version control was done using SVN tailored to the company's needs and product development management was done through SCRUM. Worked directly with the development, design and community management teams.

            </p>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Projects
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item">
            <div class="container_box">
                <div class="main_page_container">
                    <a href="https://ldjam.com/events/ludum-dare/40/loot-grabber" target="_blank">
                        <div class="main_page_image" style="background-image: url(<?php echo image_location('loot_grabber', 'scrnsht_gameplay', 'png'); ?>);"></div>
                    </a>
                </div>
            </div>
            <h2><a href="https://ldjam.com/events/ludum-dare/40/loot-grabber" target="_blank"> Loot Grabber </a></h2>
            <h4> 2017</h4>
            <p> Development of a 3D top-down perspective twin-stick bullet-hell game as a group of 2 programmers for the Ludum Dare 40 Jam and we created all code and assets during the event.
                We used Unity3D, Blender, Microsoft Visual Studio and Git.

            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item">
            <div class="container_box">
                <div class="main_page_container">
                    <a href="https://globalgamejam.org/2017/games/rubber-ducky-league" target="_blank">
                        <div class="main_page_image" style="background-image: url(<?php echo image_location('rubber_ducky_league', 'scrnsht_gameplay', 'png'); ?>);"></div>
                    </a>
                </div>
            </div>
            <h2><a href="https://globalgamejam.org/2017/games/rubber-ducky-league" target="_blank"> Rubber Ducky League </a></h2>
            <h4> 2017</h4>
            <p> University project. As a group, we created a simulation with reactive and deliberative AI agents of firefighters putting out fires throughout a variable sized city.
                Developed using Unity3D and Microsoft Visual Studio, programmed in C#. For version control, we used Git.

            </p>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">University Projects
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item">
            <div class="container_box">
                <div class="main_page_container">
                    <a href="<?php echo site_url();?>">
                        <div class="main_page_image" style="background-image: url(<?php echo image_location('elementium', 'scrnsht_gameplay', 'png'); ?>);"></div>
                    </a>
                </div>
            </div>
            <h2> ELEMENTIUM </h2>
            <h4> 2014 - 2016</h4>
            <p> Development of a 2D top-down perspective action roguelike game as a group of 3 programmers. We started by testing out mechanics that were going to be used, with users, and developed a prototype in GameMaker Studio. Then we developed the game in Unity3D and got user feedback at the university by letting the public play in a game projects show.
                <br>
                We wanted to achieve a fast paced game with elements of metroidvania and roguelike and randomly generated maps so that every experience would be different. My main contributions were towards UI interaction and character abilities' interaction with other game elements.
                The development was done using Unity3D and Microsoft Visual Studio, programming in C#. For version control, we used Git.

            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item">
            <div class="container_box">
                <div class="main_page_container">
                    <a href="<?php echo site_url();?>">
                        <div class="main_page_image" style="background-image: url(<?php echo image_location('aasma', 'scrnsht_gameplay', 'png'); ?>);"></div>
                    </a>
                </div>
            </div>
            <h2> Firefighters </h2>
            <h4> 2014 - 2015</h4>
            <p> University project. As a group, we created a simulation with reactive and deliberative AI agents of firefighters putting out fires throughout a variable sized city.
                Developed using Unity3D and Microsoft Visual Studio, programmed in C#. For version control, we used Git.

            </p>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item">
            <div class="container_box">
                <div class="main_page_container">
                    <a href="<?php echo site_url();?>">
                        <div class="main_page_image" style="background-image: url(<?php echo image_location('ray_tracer', 'scrnsht_final'); ?>);"></div>
                    </a>
                </div>
            </div>
            <h2> Ray Tracer </h2>
            <h4> 2014</h4>
            <p> University project. Development of a ray tracer using anti-aliasing (Monte Carlo sampling), soft shadows, depth
                of field and acceleration structures. C++ application.

            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item">
            <div class="container_box">
                <div class="main_page_container">
                    <a href="<?php echo site_url();?>">
                        <div class="main_page_image" style="background-image: url(<?php echo image_location('opengl_engine', 'scrnsht_final', 'bmp'); ?>);"></div>
                    </a>
                </div>
            </div>
            <h2> OpenGL Modelling Engine </h2>
            <h4> 2014</h4>
            <p> University project. Using modern OpenGL and GLSL shaders, we developed a C++ application which allowed the user to import .obj with or without textures and to translate, rotate and scale those objects.
                The user could also apply simple glass or perlin noise shaders to those objects.

            </p>
        </div>
    </div>
    <!-- /.row -->

</div>


<!-- Main component for a primary marketing message or call to action
<div class="jumbotron">
    <h1>Navbar example</h1>
    <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
    <p>To see the difference between static and fixed top navbars, just scroll.</p>
    <p>
        <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs »</a>
    </p>
</div>-->