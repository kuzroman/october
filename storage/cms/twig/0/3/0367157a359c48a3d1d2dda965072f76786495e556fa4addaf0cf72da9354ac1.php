<?php

/* C:\wamp\www\october/themes/demo/pages/about.htm */
class __TwigTemplate_0367157a359c48a3d1d2dda965072f76786495e556fa4addaf0cf72da9354ac1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<title></title>
<meta charset=\"utf-8\">

<!--<link rel=\"icon\" href=\"\" type=\"image/x-icon\">-->
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 5
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/main.css");
        echo "\">

<script src=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/javascript/jquery/jquery-ui.min.js", 2 => "assets/javascript/jquery/jquery.touchSwipe.js", 3 => "assets/javascript/jquery/jquery.horizonScroll.js", 4 => "assets/javascript/main.js"));
        // line 13
        echo "\"></script>

<header>
    <nav class=\"mainMenu\">
        <a href=\"/\" class=\"mainMenuLogo\">
            <canvas width=\"252\" height=\"140\" id=\"canvasLogo\">sorry, you can't see my logo, please setup Chrome</canvas>
        </a>
        <ul>
            <li><a href=\"/about/\"><b>About</b></a></li>
            <li><a href=\"/collection/\"><b>Portfolio</b></a></li>
            <li><a href=\"/contact/\"><b>Contact</b></a></li>
            <!--<li id=\"mm-menu\"><a href=\"#\">Menu</a></li>-->
        </ul>
    </nav>
</header>

<section id=\"one\" class=\"slide\">
    <div class=\"table\">
        <div class=\"block\">
            <h2>Let's get started.</h2>
            <p>
                We are a hard working team that wants an opportunity to earn your business. Let us show you how the combination of hard work and technology can deliver outstanding performance.
            </p>
            <span class=\"line center\"></span>

            <a href=\"/contact\" class=\"button2\">Portfolio</a>
        </div>
    </div>
</section>

<section id=\"two\" class=\"slide\">
    <!--<div class=\"cubs\">-->
        <!--<div></div>-->
        <!--<div></div>-->
        <!--<div></div>-->
        <!--<div></div>-->

        <!--<div></div>-->
        <!--<div></div>-->
        <!--<div></div>-->
        <!--<div></div>-->

        <!--<div></div>-->
        <!--<div></div>-->
        <!--<div></div>-->
        <!--<div></div>-->

        <!--<div></div>-->
        <!--<div></div>-->
        <!--<div></div>-->
        <!--<div></div>-->
    <!--</div>-->
</section>

<section id=\"three\" class=\"slide\">
    <div id='light'></div>

    <!--<video class=\"programmerVideo\" autoplay=\"\" loop=\"\">-->
        <!--<source src=\"";
        // line 71
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/video/programmer.webm");
        echo "\">-->
    <!--</video>-->



</section>
<section id=\"four\" class=\"slide\"></section>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\october/themes/demo/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 71,  32 => 13,  30 => 7,  25 => 5,  19 => 1,);
    }
}
