<?php

/* themes/gavias_castron/templates/node/node--team.html.twig */
class __TwigTemplate_d442a2ea3bb68aae19d921bfd1586c785e329385b0af625e438eec5b40ca8ad1 extends Twig_Template
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
        $tags = array("set" => 2, "if" => 14, "for" => 40);
        $filters = array("clean_class" => 4, "e" => 36, "split" => 41, "t" => 120, "without" => 139);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class', 'e', 'split', 't', 'without'),
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

        // line 2
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 4
($context["node"] ?? null), "bundle", array()))), 2 => (($this->getAttribute(        // line 5
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 6
($context["node"] ?? null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 7
($context["node"] ?? null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 8
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), 6 => "clearfix");
        // line 12
        echo " 
<!-- Start Display article for teaser page -->
";
        // line 14
        if ((($context["view_mode"] ?? null) == "teaser")) {
            echo " 

<div";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
  <div class=\"team-block team-v1\">
    <div class=\"team-image\">
      ";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_image", array()), "html", null, true));
            echo "
      <div class=\"socials-team\">
        ";
            // line 21
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", array()), "value", array())) {
                // line 22
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", array()), "value", array()), "html", null, true));
                echo "\"><i class=\"fab fa-facebook\"></i></a>
        ";
            }
            // line 23
            echo " 
        ";
            // line 24
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_google", array()), "value", array())) {
                // line 25
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_google", array()), "value", array()), "html", null, true));
                echo "\"><i class=\"fab fa-google\"></i></a>
        ";
            }
            // line 26
            echo " 
        ";
            // line 27
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", array()), "value", array())) {
                // line 28
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", array()), "value", array()), "html", null, true));
                echo "\"><i class=\"fab fa-pinterest\"></i></a>
        ";
            }
            // line 29
            echo " 
        ";
            // line 30
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", array()), "value", array())) {
                // line 31
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", array()), "value", array()), "html", null, true));
                echo "\"><i class=\"fab fa-twitter\"></i></a>
        ";
            }
            // line 32
            echo " 
      </div>
    </div>
    <div class=\"team-content\">
      <div class=\"team-name\"><a href=\"";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", array()), "value", array())));
            echo "</a></div>
      <div class=\"team-job\">";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", array()), "value", array())));
            echo "</div>
    </div>
    <div class=\"team-skills\">
      ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_team_skills", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 41
                echo "          ";
                $context["skill"] = twig_split_filter($this->env, $this->getAttribute($context["item"], "value", array()), "--");
                // line 42
                echo "            ";
                if (($this->getAttribute(($context["skill"] ?? null), "0", array(), "array") && $this->getAttribute(($context["skill"] ?? null), "1", array(), "array"))) {
                    // line 43
                    echo "              <div class=\"team-skill\">
                <div class=\"progress-label\">";
                    // line 44
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["skill"] ?? null), "0", array(), "array"), "html", null, true));
                    echo "</div>
                 <div class=\"progress\">
                   <div class=\"progress-bar\" data-progress-animation=\"";
                    // line 46
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["skill"] ?? null), "1", array(), "array"), "html", null, true));
                    echo "%\"><span></span></div>
                   <span class=\"percentage\"><span></span>";
                    // line 47
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["skill"] ?? null), "1", array(), "array"), "html", null, true));
                    echo "%</span>
                </div>
              </div>
            ";
                }
                // line 50
                echo "  
         
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo " 
    </div>
  </div>
</div>  

";
        } elseif ((        // line 57
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 58
            echo "
<div";
            // line 59
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
  <div class=\"team-block team-v2\">
    <div class=\"team-image\">
      ";
            // line 62
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_image", array()), "html", null, true));
            echo "
    </div>
    <div class=\"team-content\">
      <div class=\"socials-team\">
        ";
            // line 66
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", array()), "value", array())) {
                // line 67
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", array()), "value", array()), "html", null, true));
                echo "\"><i class=\"fab fa-facebook\"></i></a>
        ";
            }
            // line 68
            echo " 
        ";
            // line 69
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_google", array()), "value", array())) {
                // line 70
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_google", array()), "value", array()), "html", null, true));
                echo "\"><i class=\"fab fa-google\"></i></a>
        ";
            }
            // line 71
            echo " 
        ";
            // line 72
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", array()), "value", array())) {
                // line 73
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", array()), "value", array()), "html", null, true));
                echo "\"><i class=\"fab fa-pinterest\"></i></a>
        ";
            }
            // line 74
            echo " 
        ";
            // line 75
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", array()), "value", array())) {
                // line 76
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", array()), "value", array()), "html", null, true));
                echo "\"><i class=\"fab fa-twitter\"></i></a>
        ";
            }
            // line 77
            echo " 
      </div>
      <div class=\"team-name\"><a href=\"";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", array()), "value", array())));
            echo "</a></div>
      <div class=\"team-job\">";
            // line 80
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", array()), "value", array())));
            echo "</div>
    </div>
    <div class=\"team-skills\">
      ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_team_skills", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 84
                echo "          ";
                $context["skill"] = twig_split_filter($this->env, $this->getAttribute($context["item"], "value", array()), "--");
                // line 85
                echo "            ";
                if (($this->getAttribute(($context["skill"] ?? null), "0", array(), "array") && $this->getAttribute(($context["skill"] ?? null), "1", array(), "array"))) {
                    // line 86
                    echo "              <div class=\"team-skill\">
                <div class=\"progress-label\">";
                    // line 87
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["skill"] ?? null), "0", array(), "array"), "html", null, true));
                    echo "</div>
                 <div class=\"progress\">
                   <div class=\"progress-bar\" data-progress-animation=\"";
                    // line 89
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["skill"] ?? null), "1", array(), "array"), "html", null, true));
                    echo "%\"><span></span></div>
                   <span class=\"percentage\"><span></span>";
                    // line 90
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["skill"] ?? null), "1", array(), "array"), "html", null, true));
                    echo "%</span>
                </div>
              </div>
            ";
                }
                // line 93
                echo "  
         
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo " 
    </div>
  </div>
</div>

<!-- End Display article for teaser page -->
";
        } else {
            // line 102
            echo "<!-- Start Display article for detail page -->

<article";
            // line 104
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "addClass", array(0 => "node-detail"), "method"), "html", null, true));
            echo ">
  <div class=\"team-single-page\">

    <div class=\"team-name clearfix\">
      <div class=\"name\">";
            // line 108
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", array()), "value", array())));
            echo "</div>
      <div class=\"job\">";
            // line 109
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", array()), "value", array())));
            echo "</div>
      <div class=\"line\"><span class=\"one\"></span><span class=\"second\"></span><span class=\"three\"></span></div>
    </div> 
    <div class=\"team-description\">";
            // line 112
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_description", array()), "html", null, true));
            echo "</div>
    <div class=\"team-info\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-12 col-xs-12\">
          <div class=\"team-image\">";
            // line 116
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_image", array()), "html", null, true));
            echo "</div>
        </div>
        <div class=\"col-lg-8 col-sm-12 col-xs-12\">
          <div class=\"team-contact\">
            <div class=\"heading\">";
            // line 120
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Contact Info")));
            echo "</div>
            <div class=\"content-inner\">";
            // line 121
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_contact", array()), "html", null, true));
            echo "</div>
            <div class=\"socials\">
              ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_team_social", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 124
                echo "                <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", array(), "method"), "field_team_social_link", array()), "value", array())));
                echo "\">
                  <i class=\"";
                // line 125
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", array(), "method"), "field_team_social_icon", array()), "value", array())));
                echo "\"></i>
                </a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo " 
            </div>
          </div>
          <div class=\"team-education\">
            <div class=\"heading\">";
            // line 131
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Education")));
            echo "</div>
            <div class=\"content-inner\">";
            // line 132
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_education", array()), "html", null, true));
            echo "</div>
          </div>
        </div>
      </div>
    </div> 

    <div";
            // line 138
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "node__content", 1 => "clearfix"), "method"), "html", null, true));
            echo ">
      ";
            // line 139
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_team_name", "field_team_contact", "field_team_image", "field_team_contact", "field_team_quote", "field_team_social", "field_team_education", "field_team_position", "field_team_email", "field_team_description", "comment"), "html", null, true));
            echo "
    </div>

    <div class=\"team-quote\"> ";
            // line 142
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_quote", array()), "html", null, true));
            echo " </div>

    ";
            // line 144
            if ($this->getAttribute(($context["content"] ?? null), "comment", array())) {
                // line 145
                echo "      <div id=\"node-single-comment\">
        ";
                // line 146
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "comment", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 148
            echo "  

  </div>
</article>

<!-- End Display article for detail page -->
";
        }
        // line 155
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_castron/templates/node/node--team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 155,  401 => 148,  395 => 146,  392 => 145,  390 => 144,  385 => 142,  379 => 139,  375 => 138,  366 => 132,  362 => 131,  356 => 127,  347 => 125,  342 => 124,  338 => 123,  333 => 121,  329 => 120,  322 => 116,  315 => 112,  309 => 109,  305 => 108,  298 => 104,  294 => 102,  285 => 95,  277 => 93,  270 => 90,  266 => 89,  261 => 87,  258 => 86,  255 => 85,  252 => 84,  248 => 83,  242 => 80,  236 => 79,  232 => 77,  226 => 76,  224 => 75,  221 => 74,  215 => 73,  213 => 72,  210 => 71,  204 => 70,  202 => 69,  199 => 68,  193 => 67,  191 => 66,  184 => 62,  178 => 59,  175 => 58,  173 => 57,  166 => 52,  158 => 50,  151 => 47,  147 => 46,  142 => 44,  139 => 43,  136 => 42,  133 => 41,  129 => 40,  123 => 37,  117 => 36,  111 => 32,  105 => 31,  103 => 30,  100 => 29,  94 => 28,  92 => 27,  89 => 26,  83 => 25,  81 => 24,  78 => 23,  72 => 22,  70 => 21,  65 => 19,  59 => 16,  54 => 14,  50 => 12,  48 => 8,  47 => 7,  46 => 6,  45 => 5,  44 => 4,  43 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_castron/templates/node/node--team.html.twig", "/home/u982426717/domains/tehoservis.ru/public_html/themes/gavias_castron/templates/node/node--team.html.twig");
    }
}
