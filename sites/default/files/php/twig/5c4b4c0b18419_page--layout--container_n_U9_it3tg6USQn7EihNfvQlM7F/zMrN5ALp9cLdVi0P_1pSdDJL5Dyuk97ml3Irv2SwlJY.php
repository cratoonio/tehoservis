<?php

/* themes/gavias_castron/templates/page/page-layout/page--layout--container_no_sidebar.html.twig */
class __TwigTemplate_4fba163ca0007ac8a7f315db240551d21cf47e6bbe9dd39bbf50d1bfe25549a8 extends Twig_Template
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
        $tags = array("set" => 7, "include" => 11, "if" => 13);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'include', 'if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 7
        $context["has_breadcrumb"] = "";
        // line 8
        echo "<div class=\"gva-body-wrapper\">
\t<div class=\"body-page gva-body-page\">
\t\t
\t   ";
        // line 11
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/gavias_castron/templates/page/page-layout/page--layout--container_no_sidebar.html.twig", 11)->display($context);
        // line 12
        echo "\t\t
\t\t";
        // line 13
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumbs", array())) {
            // line 14
            echo "\t\t\t";
            $context["has_breadcrumb"] = " has-breadcrumb";
            // line 15
            echo "\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumbs", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t";
        }
        // line 19
        echo "
\t\t<div role=\"main\" class=\"main main-page";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["has_breadcrumb"] ?? null), "html", null, true));
        echo "\">
\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        // line 23
        if ($this->getAttribute(($context["page"] ?? null), "slideshow_content", array())) {
            // line 24
            echo "\t\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t\t";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slideshow_content", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 27
        echo "\t

\t\t\t";
        // line 29
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 30
            echo "\t\t\t\t<div class=\"help  gav-help-region\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 38
        echo "
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        // line 40
        if ($this->getAttribute(($context["page"] ?? null), "before_content", array())) {
            // line 41
            echo "\t\t\t\t<div class=\"before_content area\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t";
            // line 45
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "before_content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 51
        echo "\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t
\t\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t\t<div class=\"container container-bg\">
\t\t\t\t\t";
        // line 56
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/main-no-sidebar.html.twig"), "themes/gavias_castron/templates/page/page-layout/page--layout--container_no_sidebar.html.twig", 56)->display($context);
        // line 57
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 60
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 61
            echo "\t\t\t\t<div class=\"highlighted area\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t";
            // line 63
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 67
        echo "
\t\t\t";
        // line 68
        if ($this->getAttribute(($context["page"] ?? null), "after_content", array())) {
            // line 69
            echo "\t\t\t\t<div class=\"area after-content\">
\t\t\t\t\t<div class=\"container\">
\t\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t\t ";
            // line 72
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "after_content", array()), "html", null, true));
            echo "
\t\t          \t</div>
\t        \t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 77
        echo "\t\t\t
\t\t</div>
\t\t
\t</div>

\t";
        // line 82
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/footer.html.twig"), "themes/gavias_castron/templates/page/page-layout/page--layout--container_no_sidebar.html.twig", 82)->display($context);
        // line 83
        echo "</div>

";
        // line 85
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/quick-side.html.twig"), "themes/gavias_castron/templates/page/page-layout/page--layout--container_no_sidebar.html.twig", 85)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/gavias_castron/templates/page/page-layout/page--layout--container_no_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 85,  183 => 83,  181 => 82,  174 => 77,  166 => 72,  161 => 69,  159 => 68,  156 => 67,  149 => 63,  145 => 61,  143 => 60,  138 => 57,  136 => 56,  129 => 51,  120 => 45,  114 => 41,  112 => 40,  108 => 38,  100 => 33,  95 => 30,  93 => 29,  89 => 27,  83 => 25,  80 => 24,  78 => 23,  72 => 20,  69 => 19,  63 => 16,  60 => 15,  57 => 14,  55 => 13,  52 => 12,  50 => 11,  45 => 8,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_castron/templates/page/page-layout/page--layout--container_no_sidebar.html.twig", "/home/u982426717/domains/tehoservis.ru/public_html/themes/gavias_castron/templates/page/page-layout/page--layout--container_no_sidebar.html.twig");
    }
}
