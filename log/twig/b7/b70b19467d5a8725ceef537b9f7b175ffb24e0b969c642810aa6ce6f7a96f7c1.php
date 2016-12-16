<?php

/* layout.html */
class __TwigTemplate_03395630caf1f5e1bde6e3ab36df8772aa1df866a8203d958479514d4727e2b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<body>
<header>header</header>

<content>
\t";
        // line 6
        $this->displayBlock('content', $context, $blocks);
        // line 9
        echo "</content>

<footer>footer</footer>
</body>
</html>";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "\t
\t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  37 => 6,  29 => 9,  27 => 6,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html", "F:\\AppServ\\www\\MyFrameWork\\app\\view\\layout.html");
    }
}
