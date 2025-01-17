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
        yield "

<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" data-spy=\"affix\" data-offset-top=\"0\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">
            ";
        // line 53
        if (($context["logo"] ?? null)) {
            // line 54
            yield "            <img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["logo"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\">
            ";
        }
        // line 56
        yield "        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            ";
        // line 62
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["main_menu_items"] ?? null))) {
            // line 63
            yield "            <ul class=\"navbar-nav ml-auto align-items-center\">
                ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["main_menu_items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 65
                yield "                    <li class=\"nav-item";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 65)) {
                    yield " active";
                }
                yield "\">
                        <a class=\"nav-link\" href=\"";
                // line 66
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 66), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 66), "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "            </ul>
            ";
        }
        // line 71
        yield "        </div>
    </div>
</nav>
<!-- End of page navibation -->

<header class=\"header\" id=\"home\">
    <div class=\"container\">
        <div class=\"infos\">
            <h6 class=\"subtitle\">hello,I'm</h6>
            <h6 class=\"title\">";
        // line 80
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["full_name"] ?? null), "html", null, true);
        yield "</h6>
            <p>";
        // line 81
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["what_you_do"] ?? null), "html", null, true);
        yield "</p>

            <div class=\"buttons pt-3\">
                <button class=\"btn btn-primary rounded\">HIRE ME</button>
                <a href=\"";
        // line 85
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["cv_url"] ?? null), "html", null, true);
        yield "\" download>
                    <button class=\"btn btn-dark rounded\">DOWNLOAD CV</button>
                </a>
            </div>

            <div class=\"socials mt-4\">
                    <a class=\"social-item\" href=\"";
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["facebook"] ?? null), "html", null, true);
        yield "\"><i class=\"ti-facebook\"></i></a>
                    <a class=\"social-item\" href=\"";
        // line 92
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["google"] ?? null), "html", null, true);
        yield "\"><i class=\"ti-google\"></i></a>
                    <a class=\"social-item\" href=\"";
        // line 93
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["linkedin"] ?? null), "html", null, true);
        yield "\"><i class=\"ti-github\"></i></a>
                    <a class=\"social-item\" href=\"";
        // line 94
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["twitter"] ?? null), "html", null, true);
        yield "\"><i class=\"ti-twitter\"></i></a>
            </div>
        </div>
        <div class=\"img-holder\">
            <img src=\"";
        // line 98
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_img"] ?? null), "html", null, true);
        yield "\" alt=\"\">
        </div>
    </div>

    <!-- Header-widget -->
    <div class=\"widget\">
        <div class=\"widget-item\">
            <h2>";
        // line 105
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["happy_clients"] ?? null), "html", null, true);
        yield "</h2>
            <p>Happy Clients</p>
        </div>
        <div class=\"widget-item\">
            <h2>";
        // line 109
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["projects_completed"] ?? null), "html", null, true);
        yield "</h2>
            <p>Project Completed</p>
        </div>
        <div class=\"widget-item\">
            <h2>";
        // line 113
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
                <img src=\"";
        // line 123
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["cv_img"] ?? null), "html", null, true);
        yield "\" alt=\"\" class=\"img-thumbnail mb-4\">
            </div>
            <div class=\"pl-md-4 col-md-9\">
                <h6 class=\"title\">";
        // line 126
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["full_name"] ?? null), "html", null, true);
        yield "</h6>
                <p class=\"subtitle\">";
        // line 127
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["what_you_do"] ?? null), "html", null, true);
        yield "</p>
                <p>";
        // line 128
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["resume"] ?? null), "html", null, true);
        yield "</p>
                <a href=\"";
        // line 129
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["cv_url"] ?? null), "html", null, true);
        yield "\" download>
                    <button class=\"btn btn-primary rounded mt-3\">DOWNLOAD CV</button>
                </a>
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
            ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["projects"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 224
            yield "            <div class=\"col-sm-4\">
                <div class=\"img-wrapper\">
                    <img src=\"";
            // line 226
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["project"], "img", [], "any", false, false, true, 226), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, true, 226), "html", null, true);
            yield "\">
                    <div class=\"overlay\">
                        <div class=\"overlay-infos\">
                            <h5>";
            // line 229
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, true, 229), "html", null, true);
            yield "</h5>
                            <a href=\"javascript:void(0)\"><i class=\"ti-zoom-in\"></i></a>
                            <a href=\"javascript:void(0)\"><i class=\"ti-link\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['project'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        yield "        </div>

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
        ";
        // line 296
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["last_three_articles"] ?? null))) {
            // line 297
            yield "        <div class=\"row text-left\">
            ";
            // line 298
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["last_three_articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 299
                yield "            <div class=\"col-md-4\">
                <div class=\"card border mb-4\">
                    <img src=\"assets/imgs/blog-1.jpg\" alt=\"\" class=\"card-img-top w-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 303
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, true, 303), "html", null, true);
                yield "</h5>
                        <div class=\"post-details\">
                            <a href=\"javascript:void(0)\">Posted By: ";
                // line 305
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "author_name", [], "any", false, false, true, 305), "html", null, true);
                yield "</a>
                        </div>
                        ";
                // line 307
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "body", [], "any", false, false, true, 307)), "html", null, true);
                yield "
                        <a href=\"";
                // line 308
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "url", [], "any", false, false, true, 308), "html", null, true);
                yield "\">Read More..</a>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            yield "        </div>
        ";
        } else {
            // line 315
            yield "        <p>No articles available.</p>
        ";
        }
        // line 317
        yield "    </div>
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
                        <p>";
        // line 366
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["location"] ?? null), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div class=\"item\">
                    <i class=\"ti-mobile\"></i>
                    <div>
                        <h5>Phone Number</h5>
                        <p>";
        // line 373
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["phone_number"] ?? null), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div class=\"item\">
                    <i class=\"ti-email\"></i>
                    <div class=\"mb-0\">
                        <h5>Email Address</h5>
                        <p>";
        // line 380
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["email"] ?? null), "html", null, true);
        yield "</p>
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
                <p>Copyright <script>document.write(new Date().getFullYear())</script>© <a href=\"http://www.blelmarouene.blog\" target=\"_blank\">BLELMAROUENE.BLOG</a></p>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"socials\">
                    <a class=\"social-item\" href=\"";
        // line 407
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["facebook"] ?? null), "html", null, true);
        yield "\"><i class=\"ti-facebook\"></i></a>
                    <a class=\"social-item\" href=\"";
        // line 408
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["google"] ?? null), "html", null, true);
        yield "\"><i class=\"ti-google\"></i></a>
                    <a class=\"social-item\" href=\"";
        // line 409
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["linkedin"] ?? null), "html", null, true);
        yield "\"><i class=\"ti-github\"></i></a>
                    <a class=\"social-item\" href=\"";
        // line 410
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["twitter"] ?? null), "html", null, true);
        yield "\"><i class=\"ti-twitter\"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logo", "main_menu_items", "full_name", "what_you_do", "cv_url", "facebook", "google", "linkedin", "twitter", "header_img", "happy_clients", "projects_completed", "awards_won", "cv_img", "resume", "projects", "last_three_articles", "location", "phone_number", "email"]);        yield from [];
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
        return array (  554 => 410,  550 => 409,  546 => 408,  542 => 407,  512 => 380,  502 => 373,  492 => 366,  441 => 317,  437 => 315,  433 => 313,  422 => 308,  418 => 307,  413 => 305,  408 => 303,  402 => 299,  398 => 298,  395 => 297,  393 => 296,  332 => 237,  318 => 229,  310 => 226,  306 => 224,  302 => 223,  205 => 129,  201 => 128,  197 => 127,  193 => 126,  187 => 123,  174 => 113,  167 => 109,  160 => 105,  150 => 98,  143 => 94,  139 => 93,  135 => 92,  131 => 91,  122 => 85,  115 => 81,  111 => 80,  100 => 71,  96 => 69,  85 => 66,  78 => 65,  74 => 64,  71 => 63,  69 => 62,  61 => 56,  53 => 54,  51 => 53,  44 => 48,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/steller/templates/layout/page.html.twig", "C:\\xampp1\\htdocs\\blelmarouene.blog\\web\\themes\\custom\\steller\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 53, "for" => 64);
        static $filters = array("escape" => 54, "t" => 54, "striptags" => 307);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 't', 'striptags'],
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
