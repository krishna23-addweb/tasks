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
        <img src=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 4, $this->source), "html", null, true);
        echo "/images/logo.png\" alt=\"\">
    </a>

    

    <div class=\"icons\">
        <div class=\"fas fa-search\" id=\"search-btn\"></div>
        <div class=\"fas fa-shopping-cart\" id=\"cart-btn\"></div>
        <div class=\"fas fa-bars\" id=\"menu-btn\"></div>
    </div>

    <div class=\"search-form\">
        <input type=\"search\" id=\"search-box\" placeholder=\"search here...\">
        <label for=\"search-box\" class=\"fas fa-search\"></label>
    </div>

    <div class=\"cart-items-container\">
        <div class=\"cart-item\">
            <span class=\"fas fa-times\"></span>
            <img src=\"";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 23, $this->source), "html", null, true);
        echo "/images/cart-item-1.png\" alt=\"\">
            <div class=\"content\">
                <h3>cart item 01</h3>
                <div class=\"price\">\$15.99/-</div>
            </div>
        </div>
        <div class=\"cart-item\">
            <span class=\"fas fa-times\"></span>
            <img src=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 31, $this->source), "html", null, true);
        echo "/images/cart-item-2.png\" alt=\"\">
            <div class=\"content\">
                <h3>cart item 02</h3>
                <div class=\"price\">\$15.99/-</div>
            </div>
        </div>
        <div class=\"cart-item\">
            <span class=\"fas fa-times\"></span>
            <img src=\"";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 39, $this->source), "html", null, true);
        echo "/images/cart-item-3.png\" alt=\"\">
            <div class=\"content\">
                <h3>cart item 03</h3>
                <div class=\"price\">\$15.99/-</div>
            </div>
        </div>
        <div class=\"cart-item\">
            <span class=\"fas fa-times\"></span>
            <img src=\"";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 47, $this->source), "html", null, true);
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
        <h3>fresh coffee in the morning</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat labore, sint cupiditate distinctio tempora reiciendis.</p>
        <a href=\"#\" class=\"btn\">get yours now</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class=\"about\" id=\"about\">

    <h1 class=\"heading\"> <span>about</span> us </h1>

    <div class=\"row\">

        <div class=\"image\">
            <img src=\"";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 83, $this->source), "html", null, true);
        echo "/images/about-img.jpeg\" alt=\"\">
        </div>

        <div class=\"content\">
            <h3>what makes our coffee special?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! Neque consectetur obcaecati sapiente?</p>
            <a href=\"#\" class=\"btn\">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class=\"menu\" id=\"menu\">

    <h1 class=\"heading\"> our <span>menu</span> </h1>

    <div class=\"box-container\">

        <div class=\"box\">
            <img src=\"";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 108, $this->source), "html", null, true);
        echo "/images/menu-1.png\" alt=\"\">
            <h3>tasty and healty</h3>
            <div class=\"price\">\$15.99 <span>20.99</span></div>
            <a href=\"#\" class=\"btn\">add to cart</a>
        </div>

        <div class=\"box\">
            <img src=\"";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 115, $this->source), "html", null, true);
        echo "/images/menu-2.png\" alt=\"\">
            <h3>tasty and healty</h3>
            <div class=\"price\">\$15.99 <span>20.99</span></div>
            <a href=\"#\" class=\"btn\">add to cart</a>
        </div>

        <div class=\"box\">
            <img src=\"";
        // line 122
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 122, $this->source), "html", null, true);
        echo "/images/menu-3.png\" alt=\"\">
            <h3>tasty and healty</h3>
            <div class=\"price\">\$15.99 <span>20.99</span></div>
            <a href=\"#\" class=\"btn\">add to cart</a>
        </div>

        <div class=\"box\">
            <img src=\"";
        // line 129
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 129, $this->source), "html", null, true);
        echo "/images/menu-4.png\" alt=\"\">
            <h3>tasty and healty</h3>
            <div class=\"price\">\$15.99 <span>20.99</span></div>
            <a href=\"#\" class=\"btn\">add to cart</a>
        </div>

        <div class=\"box\">
            <img src=\"";
        // line 136
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 136, $this->source), "html", null, true);
        echo "/images/menu-5.png\" alt=\"\">
            <h3>tasty and healty</h3>
            <div class=\"price\">\$15.99 <span>20.99</span></div>
            <a href=\"#\" class=\"btn\">add to cart</a>
        </div>

        <div class=\"box\">
            <img src=\"";
        // line 143
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 143, $this->source), "html", null, true);
        echo "/images/menu-6.png\" alt=\"\">
            <h3>tasty and healty</h3>
            <div class=\"price\">\$15.99 <span>20.99</span></div>
            <a href=\"#\" class=\"btn\">add to cart</a>
        </div>

    </div>

</section>

<!-- menu section ends -->

<section class=\"products\" id=\"products\">

    <h1 class=\"heading\"> our <span>products</span> </h1>

    <div class=\"box-container\">

        <div class=\"box\">
            <div class=\"icons\">
                <a href=\"#\" class=\"fas fa-shopping-cart\"></a>
                <a href=\"#\" class=\"fas fa-heart\"></a>
                <a href=\"#\" class=\"fas fa-eye\"></a>
            </div>
            <div class=\"image\">
                <img src=\"";
        // line 168
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 168, $this->source), "html", null, true);
        echo "/images/product-1.png\" alt=\"\">
            </div>
            <div class=\"content\">
                <h3>fresh coffee</h3>
                <div class=\"stars\">
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star-half-alt\"></i>
                </div>
                <div class=\"price\">\$15.99 <span>\$20.99</span></div>
            </div>
        </div>

        <div class=\"box\">
            <div class=\"icons\">
                <a href=\"#\" class=\"fas fa-shopping-cart\"></a>
                <a href=\"#\" class=\"fas fa-heart\"></a>
                <a href=\"#\" class=\"fas fa-eye\"></a>
            </div>
            <div class=\"image\">
                <img src=\"";
        // line 190
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 190, $this->source), "html", null, true);
        echo "/images/product-2.png\" alt=\"\">
            </div>
            <div class=\"content\">
                <h3>fresh coffee</h3>
                <div class=\"stars\">
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star-half-alt\"></i>
                </div>
                <div class=\"price\">\$15.99 <span>\$20.99</span></div>
            </div>
        </div>

        <div class=\"box\">
            <div class=\"icons\">
                <a href=\"#\" class=\"fas fa-shopping-cart\"></a>
                <a href=\"#\" class=\"fas fa-heart\"></a>
                <a href=\"#\" class=\"fas fa-eye\"></a>
            </div>
            <div class=\"image\">
                <img src=\"";
        // line 212
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 212, $this->source), "html", null, true);
        echo "/images/product-3.png\" alt=\"\">
            </div>
            <div class=\"content\">
                <h3>fresh coffee</h3>
                <div class=\"stars\">
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star-half-alt\"></i>
                </div>
                <div class=\"price\">\$15.99 <span>\$20.99</span></div>
            </div>
        </div>

    </div>

</section>

<!-- review section starts  -->

<section class=\"review\" id=\"review\">

    <h1 class=\"heading\"> customer's <span>review</span> </h1>

    <div class=\"box-container\">

        <div class=\"box\">
            <img src=\"";
        // line 240
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 240, $this->source), "html", null, true);
        echo "/images/quote-img.png\" alt=\"\" class=\"quote\">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src=\"";
        // line 242
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 242, $this->source), "html", null, true);
        echo "/images/pic-1.png\" class=\"user\" alt=\"\">
            <h3>john deo</h3>
            <div class=\"stars\">
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star-half-alt\"></i>
            </div>
        </div>

        <div class=\"box\">
            <img src=\"";
        // line 254
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 254, $this->source), "html", null, true);
        echo "/images/quote-img.png\" alt=\"\" class=\"quote\">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src=\"";
        // line 256
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 256, $this->source), "html", null, true);
        echo "/images/pic-2.png\" class=\"user\" alt=\"\">
            <h3>john deo</h3>
            <div class=\"stars\">
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star-half-alt\"></i>
            </div>
        </div>
        
        <div class=\"box\">
            <img src=\"";
        // line 268
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 268, $this->source), "html", null, true);
        echo "/images/quote-img.png\" alt=\"\" class=\"quote\">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src=\"";
        // line 270
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 270, $this->source), "html", null, true);
        echo "/images/pic-3.png\" class=\"user\" alt=\"\">
            <h3>john deo</h3>
            <div class=\"stars\">
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star-half-alt\"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class=\"contact\" id=\"contact\">

    <h1 class=\"heading\"> <span>contact</span> us </h1>

    <div class=\"row\">

        <iframe class=\"map\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin\" allowfullscreen=\"\" loading=\"lazy\"></iframe>

        <form action=\"\">
            <h3>get in touch</h3>
            <div class=\"inputBox\">
                <span class=\"fas fa-user\"></span>
                <input type=\"text\" placeholder=\"name\">
            </div>
            <div class=\"inputBox\">
                <span class=\"fas fa-envelope\"></span>
                <input type=\"email\" placeholder=\"email\">
            </div>
            <div class=\"inputBox\">
                <span class=\"fas fa-phone\"></span>
                <input type=\"number\" placeholder=\"number\">
            </div>
            <input type=\"submit\" value=\"contact now\" class=\"btn\">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<section class=\"blogs\" id=\"blogs\">

    <h1 class=\"heading\"> our <span>blogs</span> </h1>

    <div class=\"box-container\">

        <div class=\"box\">
            <div class=\"image\">
                <img src=\"";
        // line 330
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 330, $this->source), "html", null, true);
        echo "/images/blog-1.jpeg\" alt=\"\">
            </div>
            <div class=\"content\">
                <a href=\"#\" class=\"title\">tasty and refreshing coffee</a>
                <span>by admin / 21st may, 2021</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                <a href=\"#\" class=\"btn\">read more</a>
            </div>
        </div>

        <div class=\"box\">
            <div class=\"image\">
                <img src=\"";
        // line 342
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 342, $this->source), "html", null, true);
        echo "/images/blog-2.jpeg\" alt=\"\">
            </div>
            <div class=\"content\">
                <a href=\"#\" class=\"title\">tasty and refreshing coffee</a>
                <span>by admin / 21st may, 2021</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                <a href=\"#\" class=\"btn\">read more</a>
            </div>
        </div>

        <div class=\"box\">
            <div class=\"image\">
                <img src=\"";
        // line 354
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 354, $this->source), "html", null, true);
        echo "/images/blog-3.jpeg\" alt=\"\">
            </div>
            <div class=\"content\">
                <a href=\"#\" class=\"title\">tasty and refreshing coffee</a>
                <span>by admin / 21st may, 2021</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                <a href=\"#\" class=\"btn\">read more</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class=\"footer\">

    <div class=\"share\">
        <a href=\"https://facebook.com/freewebsitecode/\" class=\"fab fa-facebook-f\"></a>
        <a href=\"https://freewebsitecode.com/\" class=\"fab fa-twitter\"></a>
        <a href=\"https://freewebsitecode.com/\" class=\"fab fa-instagram\"></a>
        <a href=\"https://freewebsitecode.com/\" class=\"fab fa-linkedin\"></a>
        <a href=\"https://freewebsitecode.com/\" class=\"fab fa-pinterest\"></a>
        <a href=\"https://www.youtube.com/channel/UC9HlQRmKgG3jeVD_fBxj1Pw/videos\" class=\"fab fa-youtube\"></a>
    </div>

    <div class=\"links\">
        <a href=\"#\">home</a>
        <a href=\"#\">about</a>
        <a href=\"#\">menu</a>
        <a href=\"#\">products</a>
        <a href=\"#\">review</a>
        <a href=\"#\">contact</a>
        <a href=\"#\">blogs</a>
    </div>

    <div class=\"credit\">created by <span><a href=\"https://freewebsitecode.com/\">Free Website Code</a></span> | all rights reserved</div>

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
        return array (  463 => 354,  448 => 342,  433 => 330,  370 => 270,  365 => 268,  350 => 256,  345 => 254,  330 => 242,  325 => 240,  294 => 212,  269 => 190,  244 => 168,  216 => 143,  206 => 136,  196 => 129,  186 => 122,  176 => 115,  166 => 108,  138 => 83,  99 => 47,  88 => 39,  77 => 31,  66 => 23,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/coffee/templates/page.html.twig", "/app/themes/custom/coffee/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4);
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
