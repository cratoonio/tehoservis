<?php

/* themes/gavias_castron/templates/views/testimonial/views-view-fields--testimonial-2.html.twig */
class __TwigTemplate_6334462d73117848a83fe5280e7549b26d49df16c8bcbdd40d3d1d6353ad5186 extends Twig_Template
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
        $tags = array("set" => 1, "if" => 8);
        $filters = array("trim" => 2, "striptags" => 2);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('trim', 'striptags'),
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
        ob_start();
        // line 2
        echo "   ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_testimonial_video", array()), "content", array()))), "html", null, true));
        echo "
";
        $context["video"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 3
        echo "   
<div class=\"item\">
   <article class=\"testimonial-item testimonial-node-v1 clearfix\">      
      <div class=\"testimonial-image text-center\">
         ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_testimonial_image", array()), "content", array()), "html", null, true));
        echo "
         ";
        // line 8
        if (($context["video"] ?? null)) {
            // line 9
            echo "            <div class=\"video-body\">
               <a class=\"popup-video gsc-video-link\" href=\"";
            // line 10
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["video"] ?? null), "html", null, true));
            echo "\">
                  <span class=\"icon-play\"><i class=\"fa fa-play space-40\"></i></span>
               </a>
            </div>
         ";
        }
        // line 15
        echo "      </div>
      <div class=\"testimonial-content\">
         <div class=\"title\"><span>\"</span>";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", array()), "content", array()), "html", null, true));
        echo "<span>\"</span></div>
         <div class=\"quote\">";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "body", array()), "content", array()))), "html", null, true));
        echo "</div>  
         <div class=\"info\">
            <div class=\"left\"><div class=\"avatar\"> ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_testimonial_avatar", array()), "content", array()), "html", null, true));
        echo "</div></div>
            <div class=\"right\">
               <div class=\"title\">";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_testimonial_name", array()), "content", array()), "html", null, true));
        echo "</div>  
               <div class=\"job\">";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_testimonial_job", array()), "content", array()), "html", null, true));
        echo "</div>
            </div>
         </div>  
      </div>

   </article>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/gavias_castron/templates/views/testimonial/views-view-fields--testimonial-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 23,  92 => 22,  87 => 20,  82 => 18,  78 => 17,  74 => 15,  66 => 10,  63 => 9,  61 => 8,  57 => 7,  51 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_castron/templates/views/testimonial/views-view-fields--testimonial-2.html.twig", "/home/u982426717/domains/tehoservis.ru/public_html/themes/gavias_castron/templates/views/testimonial/views-view-fields--testimonial-2.html.twig");
    }
}
