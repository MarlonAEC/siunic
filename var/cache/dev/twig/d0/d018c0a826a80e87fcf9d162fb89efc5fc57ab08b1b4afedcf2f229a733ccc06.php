<?php

/* AppBundle:Admin:standard_layout.html.twig */
class __TwigTemplate_571ef49ddf48765ff3bd4b019e28242bcfd45c0933f550cd62a6536d282c4050 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "AppBundle:Admin:standard_layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'logo' => array($this, 'block_logo'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:standard_layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:standard_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        span.control-label__text {
            margin-left: 5px;
        }

        td.control-group[class^=\"sonata-ba-td-\"][class*=\"-_delete\"] div.checkbox span.control-label__text {
            display: none;
        }

        .breadcrumb > .active {
            color: #211819;
        }

        .sonata-ba-form-actions > button[type=\"submit\"] {
            margin-bottom: 5px;
        }

        .field-short-description {
            min-height: 30px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_logo($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 29
        echo "    ";
        ob_start();
        // line 30
        echo "        <a class=\"logo\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_dashboard");
        echo "\">
            ";
        // line 31
        if ((("single_image" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 31, $this->source); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 31, $this->source); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 32
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 32, $this->source); })()), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 32, $this->source); })()), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
            ";
        }
        // line 34
        echo "            ";
        if ((("single_text" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 34, $this->source); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 34, $this->source); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 35
            echo "                <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 35, $this->source); })()), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
            ";
        }
        // line 37
        echo "        </a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc ";
        echo twig_escape_filter($this->env, (isset($context["sonata_admin_skin"]) || array_key_exists("sonata_admin_skin", $context) ? $context["sonata_admin_skin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin_skin" does not exist.', 41, $this->source); })()), "html", null, true);
        echo " fixed\"";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 44
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 44, $this->source); })()), "adminPool", array()), "getOption", array(0 => "search"), "method")) {
            // line 45
            echo "        <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
            <div class=\"input-group custom-search-form\">
                <input type=\"text\" name=\"q\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 47, $this->source); })()), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\"
                       placeholder=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-flat\" type=\"submit\">
                        <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                    </button>
                </span>
            </div>
        </form>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 61
        echo "    <div class=\"hidden-xs\">
        ";
        // line 62
        if (( !twig_test_empty((isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new Twig_Error_Runtime('Variable "_breadcrumb" does not exist.', 62, $this->source); })())) || array_key_exists("action", $context))) {
            // line 63
            echo "            <ol class=\"nav navbar-top-links breadcrumb\">
                ";
            // line 64
            if (twig_test_empty((isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new Twig_Error_Runtime('Variable "_breadcrumb" does not exist.', 64, $this->source); })()))) {
                // line 65
                echo "                    ";
                if (array_key_exists("action", $context)) {
                    // line 66
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs_builder"]) || array_key_exists("breadcrumbs_builder", $context) ? $context["breadcrumbs_builder"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs_builder" does not exist.', 66, $this->source); })()), "breadcrumbs", array(0 => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 66, $this->source); })()), 1 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 66, $this->source); })())), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 67
                        $context["translation_domain"] = twig_get_attribute($this->env, $this->source, $context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 68
                        $context["label"] = twig_get_attribute($this->env, $this->source, $context["menu"], "label", array());
                        // line 69
                        if ( !((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 69, $this->source); })()) === false)) {
                            // line 70
                            $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 70, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 70, $this->source); })()));
                        }
                        // line 73
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                            // line 74
                            echo "                                <li>
                                    ";
                            // line 75
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["menu"], "uri", array()))) {
                                // line 76
                                echo "                                        <a href=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                            ";
                                // line 77
                                if (twig_get_attribute($this->env, $this->source, $context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 78
                                    echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 78, $this->source); })());
                                } else {
                                    // line 80
                                    echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 80, $this->source); })()), "html", null, true);
                                }
                                // line 82
                                echo "                                        </a>
                                    ";
                            } else {
                                // line 84
                                echo "                                        <span>";
                                echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->source); })()), "html", null, true);
                                echo "</span>
                                    ";
                            }
                            // line 86
                            echo "                                </li>
                            ";
                        } else {
                            // line 88
                            echo "                                <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 88, $this->source); })()), "html", null, true);
                            echo "</span></li>
                            ";
                        }
                        // line 90
                        echo "                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    echo "                    ";
                }
                // line 92
                echo "                ";
            } else {
                // line 93
                echo "                    ";
                echo (isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new Twig_Error_Runtime('Variable "_breadcrumb" does not exist.', 93, $this->source); })());
                echo "
                ";
            }
            // line 95
            echo "            </ol>
        ";
        }
        // line 97
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "     ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     <script>
         \$(document).ready(function () {
             // custom js code here
         });
     </script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 102,  332 => 101,  321 => 97,  317 => 95,  311 => 93,  308 => 92,  305 => 91,  291 => 90,  285 => 88,  281 => 86,  275 => 84,  271 => 82,  268 => 80,  265 => 78,  263 => 77,  258 => 76,  256 => 75,  253 => 74,  251 => 73,  248 => 70,  246 => 69,  244 => 68,  242 => 67,  224 => 66,  221 => 65,  219 => 64,  216 => 63,  214 => 62,  211 => 61,  202 => 60,  182 => 48,  178 => 47,  172 => 45,  169 => 44,  160 => 43,  140 => 41,  128 => 37,  122 => 35,  119 => 34,  111 => 32,  109 => 31,  104 => 30,  101 => 29,  92 => 28,  58 => 4,  49 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SonataAdminBundle::standard_layout.html.twig\" %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        span.control-label__text {
            margin-left: 5px;
        }

        td.control-group[class^=\"sonata-ba-td-\"][class*=\"-_delete\"] div.checkbox span.control-label__text {
            display: none;
        }

        .breadcrumb > .active {
            color: #211819;
        }

        .sonata-ba-form-actions > button[type=\"submit\"] {
            margin-bottom: 5px;
        }

        .field-short-description {
            min-height: 30px;
        }
    </style>
{% endblock %}

{% block logo %}
    {% spaceless %}
        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
            {% endif %}
            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                <span>{{ sonata_admin.adminPool.title }}</span>
            {% endif %}
        </a>
    {% endspaceless %}
{% endblock %}

{% block body_attributes %}class=\"sonata-bc {{ sonata_admin_skin }} fixed\"{% endblock %}

{% block sonata_sidebar_search %}
    {% if sonata_admin.adminPool.getOption('search') %}
        <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
            <div class=\"input-group custom-search-form\">
                <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\"
                       placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-flat\" type=\"submit\">
                        <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                    </button>
                </span>
            </div>
        </form>
    {% endif %}
{% endblock sonata_sidebar_search %}
\t\t\t    
\t\t\t    
{% block sonata_breadcrumb %}
    <div class=\"hidden-xs\">
        {% if _breadcrumb is not empty or action is defined %}
            <ol class=\"nav navbar-top-links breadcrumb\">
                {% if _breadcrumb is empty %}
                    {% if action is defined %}
                        {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {% if not loop.last %}
                                <li>
                                    {% if menu.uri is not empty %}
                                        <a href=\"{{ menu.uri }}\">
                                            {% if menu.extra('safe_label', true) %}
                                                {{- label|raw -}}
                                            {% else %}
                                                {{- label -}}
                                            {% endif %}
                                        </a>
                                    {% else %}
                                        <span>{{ label }}</span>
                                    {% endif %}
                                </li>
                            {% else %}
                                <li class=\"active\"><span>{{ label }}</span></li>
                            {% endif %}
                        {% endfor %}
                    {% endif %}
                {% else %}
                    {{ _breadcrumb|raw }}
                {% endif %}
            </ol>
        {% endif %}
    </div>
{% endblock sonata_breadcrumb %}
\t\t\t    

 {% block javascripts %}
     {{ parent() }}
     <script>
         \$(document).ready(function () {
             // custom js code here
         });
     </script>
 {% endblock javascripts %}", "AppBundle:Admin:standard_layout.html.twig", "E:\\ESTUDIO\\TESIS\\sucu_etecsa\\app/Resources/AppBundle/views/Admin/standard_layout.html.twig");
    }
}
