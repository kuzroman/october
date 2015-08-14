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
        // line 4
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/main.css");
        echo "\">
<!--<script type=\"text/javascript\" src=\"bower_components/jquery/dist/jquery.js\"></script>-->
<script type=\"text/javascript\" src=\"";
        // line 6
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/jquery.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/jquery/jquery.touchSwipe.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 8
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/jquery/jquery.horizonScroll.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 9
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/main.js");
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
    <!--<video class=\"programmerVideo\" autoplay=\"\" loop=\"\">-->
        <!--<source src=\"";
        // line 65
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
        return array (  100 => 65,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  24 => 4,  19 => 1,);
    }
}
