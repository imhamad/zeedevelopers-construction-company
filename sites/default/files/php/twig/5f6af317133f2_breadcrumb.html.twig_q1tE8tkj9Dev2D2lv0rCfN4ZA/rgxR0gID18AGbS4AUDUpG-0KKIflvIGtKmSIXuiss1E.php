<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/gavias_buildpro/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_a5e3d0956eeaeab614adaea0ebc8e6bb1c44ad343a0c22422659ef8faba724cd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 13, "set" => 17, "for" => 18];
        $filters = ["escape" => 14, "t" => 15, "length" => 22];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 't', 'length'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 10
        echo "<div class=\"breadcrumb-links\">
  <div class=\"container\">
    <div class=\"content-inner\">
      ";
        // line 13
        if (($context["breadcrumb"] ?? null)) {
            // line 14
            echo "        <nav class=\"breadcrumb ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background"] ?? null)), "html", null, true);
            echo "\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
          <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Breadcrumb"));
            echo "</h2>
          <ol>
            ";
            // line 17
            $context["i"] = 0;
            echo "  
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                echo "              ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 20
                echo "              <li>
                ";
                // line 21
                if ($this->getAttribute($context["item"], "url", [])) {
                    echo "<a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true);
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true);
                }
                // line 22
                echo "                ";
                if ((($context["i"] ?? null) < (twig_length_filter($this->env, ($context["breadcrumb"] ?? null)) - 1))) {
                    echo "<span class=\"\">/</span>";
                }
                echo "  
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "          </ol>
        </nav>
      ";
        }
        // line 28
        echo "    </div>  
  </div>  
</div>  ";
    }

    public function getTemplateName()
    {
        return "themes/gavias_buildpro/templates/navigation/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 28,  108 => 25,  96 => 22,  86 => 21,  83 => 20,  80 => 19,  76 => 18,  72 => 17,  67 => 15,  62 => 14,  60 => 13,  55 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_buildpro/templates/navigation/breadcrumb.html.twig", "/Users/hamad/WebServer/zeedevelopers/themes/gavias_buildpro/templates/navigation/breadcrumb.html.twig");
    }
}
