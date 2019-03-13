<?php

/* themes/gavias_castron/templates/page/html.html.twig */
class __TwigTemplate_283c8006d34eb69f0bb9bc9aa3af2a1e87aff3bb3972779f7d3a8b749843c90c extends Twig_Template
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
        $tags = array("if" => 41, "set" => 53, "include" => 83);
        $filters = array("raw" => 29, "safe_join" => 30, "clean_class" => 55, "t" => 64);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'include'),
                array('raw', 'safe_join', 'clean_class', 't'),
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

        // line 26
        echo "<!DOCTYPE html>
<html";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true));
        echo ">
  <head> 
    <head-placeholder token=\"";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    <title>";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, ($context["head_title"] ?? null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">

    <js-placeholder token=\"";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
<meta name=\"yandex-verification\" content=\"344d4a13cc89cc79\" />
<meta name=\"google-site-verification\" content=\"DmiLjn4L3fVPaQ1YE1SLcSQzhUWlSofgZeMOuZ6v2hA\" />
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_path"] ?? null), "html", null, true));
        echo "/css/custom.css\" media=\"screen\" />
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["theme_path"] ?? null), "html", null, true));
        echo "/css/update.css\" media=\"screen\" />

    ";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["links_google_fonts"] ?? null)));
        echo "

    ";
        // line 41
        if (($context["customize_css"] ?? null)) {
            // line 42
            echo "      <style type=\"text/css\">
        ";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["customize_css"] ?? null)));
            echo "
      </style>
    ";
        }
        // line 46
        echo "
    ";
        // line 47
        if (($context["customize_styles"] ?? null)) {
            // line 48
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["customize_styles"] ?? null)));
            echo "
    ";
        }
        // line 50
        echo "
  </head>

  ";
        // line 53
        $context["body_classes"] = array(0 => ((        // line 54
($context["logged_in"] ?? null)) ? ("logged-in") : ("")), 1 => (( !        // line 55
($context["root_path"] ?? null)) ? ("frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), 2 => ((        // line 56
($context["node_type"] ?? null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), 3 => ((        // line 57
($context["node_id"] ?? null)) ? (("node-" . \Drupal\Component\Utility\Html::getClass(($context["node_id"] ?? null)))) : ("")));
        // line 60
        echo "
  <body";
        // line 61
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["body_classes"] ?? null)), "method"), "html", null, true));
        echo ">

    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content")));
        echo "
    </a>

    ";
        // line 67
        if (($context["preloader"] ?? null)) {
            echo " 
      <div id=\"gva-preloader\" >
        <div id=\"preloader-inner\" class=\"cssload-container\">
          <div class=\"wait-text\">";
            // line 70
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Please wait...")));
            echo " </div> 
          <div class=\"cssload-item cssload-moon\"></div>
        </div>
      </div>
    ";
        }
        // line 74
        echo "  

    ";
        // line 76
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true));
        echo "
    ";
        // line 77
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true));
        echo "
    ";
        // line 78
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    
    ";
        // line 81
        if (($context["addon_template"] ?? null)) {
            // line 82
            echo "      <div class=\"permission-save-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["save_customize_permission"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 83
            $this->loadTemplate(($context["addon_template"] ?? null), "themes/gavias_castron/templates/page/html.html.twig", 83)->display($context);
            // line 84
            echo "      </div>  
    ";
        }
        // line 86
        echo "    <div id=\"gva-overlay\"></div>
  </body>
  
  
  
  <script type=\"text/javascript\">
      jQuery( document ).ready(function() {
          
             console.log(jQuery('.view-all'));
             jQuery('.view-all').html('<a class=\"btn-theme\" href=\"/products\">В каталог</a>');
             
             if(jQuery('#edit-subscribe').attr('value')==\"Subscribe\"){
                 jQuery('#edit-subscribe').attr('value',\"Подписаться\")
                 
             }
             
             if(jQuery('#edit-unsubscribe').attr('value')==\"Unsubscribe\"){
                  jQuery('#edit-unsubscribe').attr('value',\"Отписаться\")
                 
             }
            
    
        });
      
  </script>

<!--Start of Tawk.to Script-->
<script type=\"text/javascript\">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c372417361b3372892f6491/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
\t\t\t
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_castron/templates/page/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 86,  176 => 84,  174 => 83,  169 => 82,  167 => 81,  162 => 79,  158 => 78,  154 => 77,  150 => 76,  146 => 74,  138 => 70,  132 => 67,  126 => 64,  120 => 61,  117 => 60,  115 => 57,  114 => 56,  113 => 55,  112 => 54,  111 => 53,  106 => 50,  100 => 48,  98 => 47,  95 => 46,  89 => 43,  86 => 42,  84 => 41,  79 => 39,  74 => 37,  70 => 36,  64 => 33,  59 => 31,  55 => 30,  51 => 29,  46 => 27,  43 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_castron/templates/page/html.html.twig", "/home/u982426717/domains/tehoservis.ru/public_html/themes/gavias_castron/templates/page/html.html.twig");
    }
}
