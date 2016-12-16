<?php

/* index.html */
class __TwigTemplate_c8683c5cb7b724dd462e877cec0f53312f55b16e9760a6f8acbb7dac5132624d extends Twig_Template
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
        echo "<html>
<h1>视图文件</h1>
<h3>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "</h3>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "F:\\AppServ\\www\\MyFrameWork\\app\\view\\index.html");
    }
}
