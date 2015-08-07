<?php

/* C:\wamp\www\october/themes/demo/partials/explain/plugins.htm */
class __TwigTemplate_15cacb69f368e30533417977bc39beea59bff7e0688f0e7a1785700bdd3aeaef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_0afea8178cfecdcdca5315df87773ab72d53ba41b06c64fe91c431b15cd707a7' => array($this, 'block___internal_0afea8178cfecdcdca5315df87773ab72d53ba41b06c64fe91c431b15cd707a7'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<hr />

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>
<pre>
";
        // line 7
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_0afea8178cfecdcdca5315df87773ab72d53ba41b06c64fe91c431b15cd707a7", $context, $blocks));
        // line 9
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-question\"></i> &nbsp; Wait, only one line is needed?
</p>
<p><em>Yes!</em> unlike the <a href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->pageFilter("ajax");
        echo "\">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>
<p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>";
    }

    // line 7
    public function block___internal_0afea8178cfecdcdca5315df87773ab72d53ba41b06c64fe91c431b15cd707a7($context, array $blocks = array())
    {
        // line 8
        echo "{% component 'demoTodo' %}";
        echo "
";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\october/themes/demo/partials/explain/plugins.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  45 => 7,  39 => 16,  30 => 9,  28 => 7,  20 => 1,);
    }
}
