<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/steller/templates/layout/page.html.twig */
class __TwigTemplate_303d4dd2fc9c0830dc1e3b19d7d61720 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        yield "<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" data-spy=\"affix\" data-offset-top=\"0\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">
            ";
        // line 51
        if (($context["logo"] ?? null)) {
            // line 52
            yield "            <img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["logo"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\">
            ";
        }
        // line 54
        yield "        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            ";
        // line 60
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["main_menu_items"] ?? null))) {
            // line 61
            yield "            <ul class=\"navbar-nav ml-auto align-items-center\">
                ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["main_menu_items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 63
                yield "                    <li class=\"nav-item";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 63)) {
                    yield " active";
                }
                yield "\">
                        <a class=\"nav-link\" href=\"";
                // line 64
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 64), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 64), "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "            </ul>
            ";
        }
        // line 69
        yield "        </div>
    </div>
</nav>
<!-- End of page navibation -->

<header class=\"header\" id=\"home\">
    <div class=\"container\">
        <div class=\"infos\">
            <h6 class=\"subtitle\">hello,I'm</h6>
            <h6 class=\"title\">";
        // line 78
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["full_name"] ?? null), "html", null, true);
        yield "</h6>
            <p>";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["what_you_do"] ?? null), "html", null, true);
        yield "</p>

            <div class=\"buttons pt-3\">
                <button class=\"btn btn-primary rounded\">HIRE ME</button>
                <a href=\"";
        // line 83
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["cv_url"] ?? null), "html", null, true);
        yield "\" download>
                    <button class=\"btn btn-dark rounded\">DOWNLOAD CV</button>
                </a>
            </div>

            <div class=\"socials mt-4\">
                <a class=\"social-item\" href=\"javascript:void(0)\"><i class=\"ti-facebook\"></i></a>
                <a class=\"social-item\" href=\"javascript:void(0)\"><i class=\"ti-google\"></i></a>
                <a class=\"social-item\" href=\"javascript:void(0)\"><i class=\"ti-github\"></i></a>
                <a class=\"social-item\" href=\"javascript:void(0)\"><i class=\"ti-twitter\"></i></a>
            </div>
        </div>
        <div class=\"img-holder\">
            <img src=\"";
        // line 96
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_img"] ?? null), "html", null, true);
        yield "\" alt=\"\">
        </div>
    </div>

    <!-- Header-widget -->
    <div class=\"widget\">
        <div class=\"widget-item\">
            <h2>";
        // line 103
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["happy_clients"] ?? null), "html", null, true);
        yield "</h2>
            <p>Happy Clients</p>
        </div>
        <div class=\"widget-item\">
            <h2>";
        // line 107
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["projects_completed"] ?? null), "html", null, true);
        yield "</h2>
            <p>Project Completed</p>
        </div>
        <div class=\"widget-item\">
            <h2>";
        // line 111
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["awards_won"] ?? null), "html", null, true);
        yield "</h2>
            <p>Awards Won</p>
        </div>
    </div>
</header>

<section id=\"about\" class=\"section mt-3\">
    <div class=\"container mt-5\">
        <div class=\"row text-center text-md-left\">
            <div class=\"col-md-3\">
                <img src=\"../../assets/imgs/avatar.jpg\" alt=\"\" class=\"img-thumbnail mb-4\">
            </div>
            <div class=\"pl-md-4 col-md-9\">
                <h6 class=\"title\">";
        // line 124
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["full_name"] ?? null), "html", null, true);
        yield "</h6>
                <p class=\"subtitle\">";
        // line 125
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["what_you_do"] ?? null), "html", null, true);
        yield "</p>
                <p>";
        // line 126
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["resume"] ?? null), "html", null, true);
        yield "</p>
                <button class=\"btn btn-primary rounded mt-3\">DOWNLOAD CV</button>
            </div>
        </div>
    </div>
</section>


<section id=\"service\" class=\"section\">
    <div class=\"container text-center\">
        <h6 class=\"subtitle\">Service</h6>
        <h6 class=\"section-title mb-4\">What I Do</h6>
        <p class=\"mb-5 pb-4\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>

        <div class=\"row\">
            <div class=\"col-sm-6 col-md-3 mb-4\">
                <div class=\"custom-card card border\">
                    <div class=\"card-body\">
                        <i class=\"icon ti-crown\"></i>
                        <h5>UI/UX Design</h5>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-md-3 mb-4\">
                <div class=\"custom-card card border\">
                    <div class=\"card-body\">
                        <i class=\"icon ti-desktop\"></i>
                        <h5>Web Design</h5>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-md-3 mb-4\">
                <div class=\"custom-card card border\">
                    <div class=\"card-body\">
                        <i class=\"icon ti-mobile\"></i>
                        <h5>App Design</h5>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-md-3 mb-4\">
                <div class=\"custom-card card border\">
                    <div class=\"card-body\">
                        <i class=\"icon ti-bar-chart\"></i>
                        <h5>SEO</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container text-center\">
        <h6 class=\"subtitle\">Skills</h6>
        <h6 class=\"section-title mb-4\">Why Choose me</h6>
        <p class=\"mb-5 pb-4\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>

        <div class=\"row text-left\">
            <div class=\"col-sm-6\">
                <h6 class=\"mb-3\">Photoshop</h6>
                <div class=\"progress\">
                    <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 89%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"><span>89%</span></div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <h6 class=\"mb-3\">Web Design</h6>
                <div class=\"progress\">
                    <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 83%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"><span>83%</span></div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <h6 class=\"mb-3\">App Design</h6>
                <div class=\"progress\">
                    <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 95%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"><span>95%</span></div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <h6 class=\"mb-3\">SEO</h6>
                <div class=\"progress\">
                    <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 90%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"><span>90%</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id=\"portfolio\" class=\"section\">
    <div class=\"container text-center\">
        <h6 class=\"subtitle\">Portfolio</h6>
        <h6 class=\"section-title mb-4\">Check My Wonderful Works</h6>
        <p class=\"mb-5 pb-4\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>

        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div class=\"img-wrapper\">
                    <img src=\"assets/imgs/folio-1.jpg\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"overlay-infos\">
                            <h5>Project Title</h5>
                            <a href=\"javascript:void(0)\"><i class=\"ti-zoom-in\"></i></a>
                            <a href=\"javascript:void(0)\"><i class=\"ti-link\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"img-wrapper\">
                    <img src=\"assets/imgs/folio-2.jpg\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"overlay-infos\">
                            <h5>Project Title</h5>
                            <a href=\"javascript:void(0)\"><i class=\"ti-zoom-in\"></i></a>
                            <a href=\"javascript:void(0)\"><i class=\"ti-link\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"img-wrapper\">
                    <img src=\"assets/imgs/folio-3.jpg\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"overlay-infos\">
                            <h5>Project Title</h5>
                            <a href=\"javascript:void(0)\"><i class=\"ti-zoom-in\"></i></a>
                            <a href=\"javascript:void(0)\"><i class=\"ti-link\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"img-wrapper\">
                    <img src=\"assets/imgs/folio-4.jpg\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"overlay-infos\">
                            <h5>Project Title</h5>
                            <a href=\"javascript:void(0)\"><i class=\"ti-zoom-in\"></i></a>
                            <a href=\"javascript:void(0)\"><i class=\"ti-link\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"img-wrapper\">
                    <img src=\"assets/imgs/folio-5.jpg\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"overlay-infos\">
                            <h5>Project Title</h5>
                            <a href=\"javascript:void(0)\"><i class=\"ti-zoom-in\"></i></a>
                            <a href=\"javascript:void(0)\"><i class=\"ti-link\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"img-wrapper\">
                    <img src=\"assets/imgs/folio-6.jpg\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"overlay-infos\">
                            <h5>Project Title</h5>
                            <a href=\"javascript:void(0)\"><i class=\"ti-zoom-in\"></i></a>
                            <a href=\"javascript:void(0)\"><i class=\"ti-link\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section id=\"testmonial\" class=\"section\">
    <div class=\"container text-center\">
        <h6 class=\"subtitle\">Testmonial</h6>
        <h6 class=\"section-title mb-4\">What People Say About Me</h6>
        <p class=\"mb-5 pb-4\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>


        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\" class=\"active\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\" class=\"\"></li>
            </ol>
            <div class=\"carousel-inner\">
                <div class=\"carousel-item\">
                    <div class=\"card testmonial-card border\">
                        <div class=\"card-body\">
                            <img src=\"assets/imgs/avatar-1.jpg\" alt=\"\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates in enim vel amet?</p>
                            <h1 class=\"title\">Emma Re</h1>
                            <h1 class=\"subtitle\">Graphic Designer</h1>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item active\">
                    <div class=\"card testmonial-card border\">
                        <div class=\"card-body\">
                            <img src=\"assets/imgs/avatar-2.jpg\" alt=\"\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates in enim vel amet?</p>
                            <h1 class=\"title\">James Bert</h1>
                            <h1 class=\"subtitle\">Web Designer</h1>
                        </div>
                    </div>
                </div>
                <div class=\"carousel-item\">
                    <div class=\"card testmonial-card border\">
                        <div class=\"card-body\">
                            <img src=\"assets/imgs/avatar-3.jpg\" alt=\"\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates in enim vel amet?</p>
                            <h1 class=\"title\">Michael Abra</h1>
                            <h1 class=\"subtitle\">Web Developer</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id=\"blog\" class=\"section\">
    <div class=\"container text-center\">
        <h6 class=\"subtitle\">My Blogs</h6>
        <h6 class=\"section-title mb-4\">Latest News</h6>
        <p class=\"mb-5 pb-4\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>

        <div class=\"row text-left\">
            <div class=\"col-md-4\">
                <div class=\"card border mb-4\">
                    <img src=\"assets/imgs/blog-1.jpg\" alt=\"\" class=\"card-img-top w-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Designe for Everyone</h5>
                        <div class=\"post-details\">
                            <a href=\"javascript:void(0)\">Posted By: Admin</a>
                            <a href=\"javascript:void(0)\"><i class=\"ti-thumb-up\"></i> 456</a>
                            <a href=\"javascript:void(0)\"><i class=\"ti-comment\"></i> 123</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                        <a href=\"javascript:void(0)\">Read More..</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card border mb-4\">
                    <img src=\"assets/imgs/blog-2.jpg\" alt=\"\" class=\"card-img-top w-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Web Layouts</h5>
                        <div class=\"post-details\">
                            <a href=\"javascript:void(0)\">Posted By: Admin</a>
                            <a href=\"javascript:void(0)\"><i class=\"ti-thumb-up\"></i> 456</a>
                            <a href=\"javascript:void(0)\"><i class=\"ti-comment\"></i> 123</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                        <a href=\"javascript:void(0)\">Read More..</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card border mb-4\">
                    <img src=\"assets/imgs/blog-3.jpg\" alt=\"\" class=\"card-img-top w-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Bootstrap Framework</h5>
                        <div class=\"post-details\">
                            <a href=\"javascript:void(0)\">Posted By: Admin</a>
                            <a href=\"javascript:void(0)\"><i class=\"ti-thumb-up\"></i> 456</a>
                            <a href=\"javascript:void(0)\"><i class=\"ti-comment\"></i> 123</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                        <a href=\"javascript:void(0)\">Read More..</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"bg-gray p-0 section\">
    <div class=\"container\">
        <div class=\"card bg-primary\">
            <div class=\"card-body text-light\">
                <div class=\"row align-items-center\">
                    <div class=\"col-sm-9 text-center text-sm-left\">
                        <h5 class=\"mt-3\">Hire Me For Your Project</h5>
                        <p class=\"mb-3\">Accusantium labore nostrum similique quisquam.</p>
                    </div>
                    <div class=\"col-sm-3 text-center text-sm-right\">
                        <button class=\"btn btn-light rounded\">Hire Me!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id=\"contact\" class=\"position-relative section\">
    <div class=\"container text-center\">
        <h6 class=\"subtitle\">Contact</h6>
        <h6 class=\"section-title mb-4\">Get In Touch With Me</h6>
        <p class=\"mb-5 pb-4\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>

        <div class=\"contact text-left\">
            <div class=\"form\">
                <h6 class=\"subtitle\">Available 24/7</h6>
                <h6 class=\"section-title mb-4\">Get In Touch</h6>
                <form>
                    <div class=\"form-group\">
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\" required=\"\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\" required=\"\">
                    </div>
                    <div class=\"form-group\">
                        <textarea name=\"contact-message\" id=\"\" cols=\"30\" rows=\"5\" class=\"form-control\" placeholder=\"Message\"></textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary btn-block rounded w-lg\">Send Message</button>
                </form>
            </div>
            <div class=\"contact-infos\">
                <div class=\"item\">
                    <i class=\"ti-location-pin\"></i>
                    <div class=\"\">
                        <h5>Location</h5>
                        <p> 12345 Fake ST NoWhere AB Country</p>
                    </div>
                </div>
                <div class=\"item\">
                    <i class=\"ti-mobile\"></i>
                    <div>
                        <h5>Phone Number</h5>
                        <p>(123) 456-7890</p>
                    </div>
                </div>
                <div class=\"item\">
                    <i class=\"ti-email\"></i>
                    <div class=\"mb-0\">
                        <h5>Email Address</h5>
                        <p>info@website.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"map\">
        <iframe src=\"https://snazzymaps.com/embed/61257\"></iframe>
    </div>
</section>

<footer class=\"page-footer\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-sm-6\">
                <p>Copyright <script>document.write(new Date().getFullYear())</script>2025 © <a href=\"http://www.devcrud.com\" target=\"_blank\">DevCRUD</a></p>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"socials\">
                    <a class=\"social-item\" href=\"javascript:void(0)\"><i class=\"ti-facebook\"></i></a>
                    <a class=\"social-item\" href=\"javascript:void(0)\"><i class=\"ti-google\"></i></a>
                    <a class=\"social-item\" href=\"javascript:void(0)\"><i class=\"ti-github\"></i></a>
                    <a class=\"social-item\" href=\"javascript:void(0)\"><i class=\"ti-twitter\"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logo", "main_menu_items", "full_name", "what_you_do", "cv_url", "header_img", "happy_clients", "projects_completed", "awards_won", "resume"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/steller/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  184 => 126,  180 => 125,  176 => 124,  160 => 111,  153 => 107,  146 => 103,  136 => 96,  120 => 83,  113 => 79,  109 => 78,  98 => 69,  94 => 67,  83 => 64,  76 => 63,  72 => 62,  69 => 61,  67 => 60,  59 => 54,  51 => 52,  49 => 51,  44 => 48,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/steller/templates/layout/page.html.twig", "C:\\xampp1\\htdocs\\blelmarouene.blog\\web\\themes\\custom\\steller\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 51, "for" => 62);
        static $filters = array("escape" => 52, "t" => 52);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 't'],
                [],
                $this->source
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
