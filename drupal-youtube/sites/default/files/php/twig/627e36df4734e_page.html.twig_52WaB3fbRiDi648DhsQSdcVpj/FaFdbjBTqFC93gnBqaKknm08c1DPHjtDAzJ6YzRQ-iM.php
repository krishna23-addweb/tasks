<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/coffee/templates/page.html.twig */
class __TwigTemplate_aa77324bd970978ab42f589cc2914eccb600de1bfbcd7376eb6133853e5d73e1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header class=\"header\">

    <a href=\"#\" class=\"logo\">
        
        ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "
    </a>

    
    <nav class=\"navbar\">
        ";
        // line 17
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
    </nav>

    ";
        // line 30
        echo "    <div>
        ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "
    </div>

    <div class=\"cart-items-container\">
        <div class=\"cart-item\">
            <span class=\"fas fa-times\"></span>
            <img src=\"";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 37, $this->source), "html", null, true);
        echo "/images/cart-item-1.png\" alt=\"\">
            <div class=\"content\">
                <h3>cart item 01</h3>
                <div class=\"price\">\$15.99/-</div>
            </div>
        </div>
        <div class=\"cart-item\">
            <span class=\"fas fa-times\"></span>
            <img src=\"";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 45, $this->source), "html", null, true);
        echo "/images/cart-item-2.png\" alt=\"\">
            <div class=\"content\">
                <h3>cart item 02</h3>
                <div class=\"price\">\$15.99/-</div>
            </div>
        </div>
        <div class=\"cart-item\">
            <span class=\"fas fa-times\"></span>
            <img src=\"";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 53, $this->source), "html", null, true);
        echo "/images/cart-item-3.png\" alt=\"\">
            <div class=\"content\">
                <h3>cart item 03</h3>
                <div class=\"price\">\$15.99/-</div>
            </div>
        </div>
        <div class=\"cart-item\">
            <span class=\"fas fa-times\"></span>
            <img src=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 61, $this->source), "html", null, true);
        echo "/images/cart-item-4.png\" alt=\"\">
            <div class=\"content\">
                <h3>cart item 04</h3>
                <div class=\"price\">\$15.99/-</div>
            </div>
        </div>
        <a href=\"#\" class=\"btn\">checkout now</a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class=\"home\" id=\"home\">

    <div class=\"content\">
        ";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class=\"about\" id=\"about\">

    <h1 class=\"heading\"> <span>about</span> us </h1>

    <div class=\"row\">

        ";
        // line 104
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
        echo "
    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class=\"menu\" id=\"menu\">

    <h1 class=\"heading\"> our <span>menu</span> </h1>

    <div class=\"box-container\">

        ";
        // line 160
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
        echo "

    </div>

</section>

<!-- menu section ends -->

<section class=\"products\" id=\"products\">

    <h1 class=\"heading\"> our <span>products</span> </h1>

    <div class=\"box-container\">

        <div class=\"box\">
            ";
        // line 194
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product_left", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
        echo "
        </div>

        <div class=\"box\">
            ";
        // line 217
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product_center", [], "any", false, false, true, 217), 217, $this->source), "html", null, true);
        echo "
        </div>

        <div class=\"box\">
            ";
        // line 240
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product_right", [], "any", false, false, true, 240), 240, $this->source), "html", null, true);
        echo "
        </div>

    </div>

</section>

<!-- review section starts  -->

<section class=\"review\" id=\"review\">

    <h1 class=\"heading\"> customer's <span>review</span> </h1>

    <div class=\"box-container\">

        <div class=\"box\">
            ";
        // line 267
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "review_left", [], "any", false, false, true, 267), 267, $this->source), "html", null, true);
        echo "

        </div>
        
        <div class=\"box\">
            ";
        // line 283
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "review_center", [], "any", false, false, true, 283), 283, $this->source), "html", null, true);
        echo "

        </div>
        
        <div class=\"box\">
            ";
        // line 299
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "review_right", [], "any", false, false, true, 299), 299, $this->source), "html", null, true);
        echo "

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class=\"contact\" id=\"contact\">

    <h1 class=\"heading\"> <span>contact</span> us </h1>

    ";
        // line 337
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact", [], "any", false, false, true, 337), 337, $this->source), "html", null, true);
        echo "

</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<section class=\"blogs\" id=\"blogs\">

    <h1 class=\"heading\"> our <span>blogs</span> </h1>

    <div class=\"box-container\">

        ";
        // line 386
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "blogs", [], "any", false, false, true, 386), 386, $this->source), "html", null, true);
        echo "
    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class=\"footer\">

    <div class=\"share\">
        ";
        // line 405
        echo "     ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 405), 405, $this->source), "html", null, true);
        echo "
    </div>

    <div class=\"links\">
        ";
        // line 416
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 416), 416, $this->source), "html", null, true);
        echo "
    </div>

    <div class=\"credit\">
    ";
        // line 421
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 421), 421, $this->source), "html", null, true);
        echo "
    </div>

</section>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src=\"js/script.js\"></script>";
    }

    public function getTemplateName()
    {
        return "themes/custom/coffee/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 421,  298 => 416,  290 => 405,  274 => 386,  256 => 337,  236 => 299,  227 => 283,  218 => 267,  198 => 240,  190 => 217,  182 => 194,  163 => 160,  144 => 104,  126 => 79,  105 => 61,  94 => 53,  83 => 45,  72 => 37,  63 => 31,  60 => 30,  53 => 17,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/coffee/templates/page.html.twig", "/app/themes/custom/coffee/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
