<?php

/* themes/gavias_castron/templates/views/portfolio/views-view-gvaportfolio--portfolio-sildeset.html.twig */
class __TwigTemplate_4c14f5ae1381695c0cd3d10976c6e3f8061bb550d1fe220db0b2357a92d02cda extends Twig_Template
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
        $tags = array("if" => 1, "for" => 21);
        $filters = array("t" => 19, "raw" => 29);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array('t', 'raw'),
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

        // line 1
        if (($context["attributes"] ?? null)) {
            // line 2
            echo "<div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">
";
        }
        // line 4
        echo "   
";
        // line 5
        if (($context["header"] ?? null)) {
            // line 6
            echo "  <header>
   <div class=\"view-all\"><a class=\"btn-theme\" href=\"#\">View chamged</a></div>
  </header>
";
        }
        // line 10
        echo "
";
        // line 11
        if (($context["title"] ?? null)) {
            // line 12
            echo "  <h3>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h3>
";
        }
        // line 14
        echo "  
  <div class=\"uk-slideset-init\" data-uk-slideset=\"{animation: 'scale',xlarge:";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["column"] ?? null), "html", null, true));
        echo ", large:";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["column"] ?? null), "html", null, true));
        echo ", medium:2, small:1}\">
    <div class=\"portfolio-filter clearfix\">
      <ul class=\"uk-subnav uk-subnav-pill nav nav-tabs\">
        ";
        // line 18
        if (($context["show_all"] ?? null)) {
            // line 19
            echo "          <li data-uk-filter=\"\" class=\"uk-active\"><a data-uk-filter='' href=\"#\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Все")));
            echo "</a></li>
        ";
        }
        // line 20
        echo "  
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["terms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 22
            echo "          <li data-uk-filter=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["term"], "tid", array()), "html", null, true));
            echo "\"><a href=\"#\" class=\"btn-filter ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pid"] ?? null), "html", null, true));
            echo "\" data-filter=\".";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["term"], "tid", array()), "html", null, true));
            echo "\"><span>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["term"], "name", array()), "html", null, true));
            echo "</span></a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "      </ul> 
    </div>  
    <div class=\"uk-slidenav-position uk-margin\">
      <ul class=\"uk-grid uk-slideset\">
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 29
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["row"], "content", array())));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "      </ul>
      <a href=\"#\" class=\"uk-slidenav uk-slidenav-previous\" data-uk-slideset-item=\"previous\"></a>
      <a href=\"#\" class=\"uk-slidenav uk-slidenav-next\" data-uk-slideset-item=\"next\"></a>
      <ul class=\"uk-slideset-nav uk-dotnav uk-flex-center\"></ul>
    </div>  
  </div> 
   
";
        // line 38
        if (($context["attributes"] ?? null)) {
            // line 39
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_castron/templates/views/portfolio/views-view-gvaportfolio--portfolio-sildeset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 39,  142 => 38,  133 => 31,  124 => 29,  120 => 28,  114 => 24,  99 => 22,  95 => 21,  92 => 20,  86 => 19,  84 => 18,  76 => 15,  73 => 14,  67 => 12,  65 => 11,  62 => 10,  56 => 6,  54 => 5,  51 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_castron/templates/views/portfolio/views-view-gvaportfolio--portfolio-sildeset.html.twig", "/home/u982426717/domains/tehoservis.ru/public_html/themes/gavias_castron/templates/views/portfolio/views-view-gvaportfolio--portfolio-sildeset.html.twig");
    }
}
