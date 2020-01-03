<?php

/* @MopaBootstrap/Form/fields.html.twig */
class __TwigTemplate_6ff7a85e0e3ea81f77df25512148b304737a8135672131afdc42f463c99cfbbd extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@MopaBootstrap/Form/fields.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'button_attributes' => array($this, 'block_button_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'button_row' => array($this, 'block_button_row'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'form_tabs' => array($this, 'block_form_tabs'),
                'tabs_widget' => array($this, 'block_tabs_widget'),
                'form_tab' => array($this, 'block_form_tab'),
                'collection_widget' => array($this, 'block_collection_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'file_widget' => array($this, 'block_file_widget'),
                'form_legend' => array($this, 'block_form_legend'),
                'form_label' => array($this, 'block_form_label'),
                'help_label' => array($this, 'block_help_label'),
                'help_label_tooltip' => array($this, 'block_help_label_tooltip'),
                'help_block_tooltip' => array($this, 'block_help_block_tooltip'),
                'help_label_popover' => array($this, 'block_help_label_popover'),
                'help_block_popover' => array($this, 'block_help_block_popover'),
                'form_actions_widget' => array($this, 'block_form_actions_widget'),
                'form_actions_row' => array($this, 'block_form_actions_row'),
                'form_rows_visible' => array($this, 'block_form_rows_visible'),
                'form_row' => array($this, 'block_form_row'),
                'form_message' => array($this, 'block_form_message'),
                'form_help' => array($this, 'block_form_help'),
                'form_widget_add_btn' => array($this, 'block_form_widget_add_btn'),
                'form_widget_remove_btn' => array($this, 'block_form_widget_remove_btn'),
                'collection_button' => array($this, 'block_collection_button'),
                'label_asterisk' => array($this, 'block_label_asterisk'),
                'widget_addon' => array($this, 'block_widget_addon'),
                'widget_btns' => array($this, 'block_widget_btns'),
                'form_errors' => array($this, 'block_form_errors'),
                'error_type' => array($this, 'block_error_type'),
                'widget_form_group_start' => array($this, 'block_widget_form_group_start'),
                'help_widget_popover' => array($this, 'block_help_widget_popover'),
                'widget_form_group_end' => array($this, 'block_widget_form_group_end'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MopaBootstrap/Form/fields.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MopaBootstrap/Form/fields.html.twig"));

        // line 2
        echo "
";
        // line 4
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('button_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('button_row', $context, $blocks);
        // line 45
        echo "
";
        // line 47
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 103
        echo "
";
        // line 104
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('form_tabs', $context, $blocks);
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('tabs_widget', $context, $blocks);
        // line 151
        echo "
";
        // line 152
        $this->displayBlock('form_tab', $context, $blocks);
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 189
        echo "
";
        // line 190
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 300
        echo "
";
        // line 301
        $this->displayBlock('date_widget', $context, $blocks);
        // line 333
        echo "
";
        // line 334
        $this->displayBlock('time_widget', $context, $blocks);
        // line 368
        echo "
";
        // line 369
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 400
        echo "
";
        // line 401
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 407
        echo "
";
        // line 408
        $this->displayBlock('money_widget', $context, $blocks);
        // line 414
        echo "
";
        // line 415
        $this->displayBlock('file_widget', $context, $blocks);
        // line 431
        echo "
";
        // line 433
        echo "
";
        // line 434
        $this->displayBlock('form_legend', $context, $blocks);
        // line 449
        echo "
";
        // line 450
        $this->displayBlock('form_label', $context, $blocks);
        // line 498
        echo "
";
        // line 499
        $this->displayBlock('help_label', $context, $blocks);
        // line 502
        echo "
";
        // line 503
        $this->displayBlock('help_label_tooltip', $context, $blocks);
        // line 515
        echo "
";
        // line 516
        $this->displayBlock('help_block_tooltip', $context, $blocks);
        // line 520
        echo "
";
        // line 521
        $this->displayBlock('help_label_popover', $context, $blocks);
        // line 533
        echo "
";
        // line 534
        $this->displayBlock('help_block_popover', $context, $blocks);
        // line 538
        echo "
";
        // line 539
        $this->displayBlock('form_actions_widget', $context, $blocks);
        // line 544
        echo "
";
        // line 546
        $this->displayBlock('form_actions_row', $context, $blocks);
        // line 549
        echo "
";
        // line 550
        $this->displayBlock('form_rows_visible', $context, $blocks);
        // line 564
        echo "
";
        // line 565
        $this->displayBlock('form_row', $context, $blocks);
        // line 600
        echo "
";
        // line 602
        echo "
";
        // line 603
        $this->displayBlock('form_message', $context, $blocks);
        // line 612
        echo "
";
        // line 614
        echo "
";
        // line 615
        $this->displayBlock('form_help', $context, $blocks);
        // line 626
        echo "
";
        // line 627
        $this->displayBlock('form_widget_add_btn', $context, $blocks);
        // line 636
        echo "
";
        // line 637
        $this->displayBlock('form_widget_remove_btn', $context, $blocks);
        // line 658
        echo "
";
        // line 659
        $this->displayBlock('collection_button', $context, $blocks);
        // line 670
        echo "
";
        // line 671
        $this->displayBlock('label_asterisk', $context, $blocks);
        // line 678
        echo "
";
        // line 679
        $this->displayBlock('widget_addon', $context, $blocks);
        // line 686
        echo "
";
        // line 687
        $this->displayBlock('widget_btns', $context, $blocks);
        // line 700
        echo "
";
        // line 702
        echo "
";
        // line 703
        $this->displayBlock('form_errors', $context, $blocks);
        // line 729
        echo "
";
        // line 731
        echo "
";
        // line 732
        $this->displayBlock('error_type', $context, $blocks);
        // line 743
        echo "
";
        // line 745
        echo "
";
        // line 746
        $this->displayBlock('widget_form_group_start', $context, $blocks);
        // line 783
        echo "
";
        // line 784
        $this->displayBlock('help_widget_popover', $context, $blocks);
        // line 791
        echo "
";
        // line 792
        $this->displayBlock('widget_form_group_end', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 5
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 5, $this->source); })()), array("class" => ("btn " . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")))));
        // line 6
        echo "    ";
        $this->displayParentBlock("button_attributes", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 10
        ob_start();
        // line 11
        echo "    ";
        if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->source); })()))) {
            // line 12
            if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 12, $this->source); })())))) {
                // line 13
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 13, $this->source); })()), array("%name%" =>                 // line 14
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 14, $this->source); })()), "%id%" =>                 // line 15
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 15, $this->source); })())));
            } else {
                // line 18
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 18, $this->source); })()));
            }
        }
        // line 21
        echo "    <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 21, $this->source); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
    ";
        // line 22
        if ( !twig_test_empty((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "            ";
            echo $this->extensions['Mopa\Bundle\BootstrapBundle\Twig\IconExtension']->renderIcon($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 23, $this->source); })()), ((array_key_exists("icon_inverted", $context)) ? (_twig_default_filter((isset($context["icon_inverted"]) || array_key_exists("icon_inverted", $context) ? $context["icon_inverted"] : (function () { throw new Twig_Error_Runtime('Variable "icon_inverted" does not exist.', 23, $this->source); })()), false)) : (false)));
            echo "
    ";
        }
        // line 25
        echo "    ";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 25, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 25, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 25, $this->source); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 25, $this->source); })())))), "html", null, true);
        echo "</button>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 30
        echo "    ";
        ob_start();
        // line 31
        echo "        ";
        if ((array_key_exists("button_offset", $context) &&  !twig_test_empty((isset($context["button_offset"]) || array_key_exists("button_offset", $context) ? $context["button_offset"] : (function () { throw new Twig_Error_Runtime('Variable "button_offset" does not exist.', 31, $this->source); })())))) {
            // line 32
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 32, $this->source); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 32, $this->source); })()), "class" => (isset($context["button_offset"]) || array_key_exists("button_offset", $context) ? $context["button_offset"] : (function () { throw new Twig_Error_Runtime('Variable "button_offset" does not exist.', 32, $this->source); })())));
            // line 33
            echo "            <div class=\"form-group\">
                <div ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
                ";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), 'widget');
            echo "
                </div>
            </div>
        ";
        } else {
            // line 39
            echo "            <div class=\"form-group\">
                ";
            // line 40
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), 'widget');
            echo "
            </div>
        ";
        }
        // line 43
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 48
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 48, $this->source); })()), "text")) : ("text"));
        // line 49
        echo "    ";
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 49, $this->source); })()) != "hidden") && ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) || array_key_exists("widget_addon_prepend", $context) ? $context["widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_prepend" does not exist.', 49, $this->source); })()), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) || array_key_exists("widget_addon_append", $context) ? $context["widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_append" does not exist.', 49, $this->source); })()), null)) : (null)))))) {
            // line 50
            echo "    <div class=\"input-group\">
        ";
            // line 51
            if ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) || array_key_exists("widget_addon_prepend", $context) ? $context["widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_prepend" does not exist.', 51, $this->source); })()), null)) : (null)))) {
                // line 52
                echo "            ";
                $context["widget_addon"] = (isset($context["widget_addon_prepend"]) || array_key_exists("widget_addon_prepend", $context) ? $context["widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_prepend" does not exist.', 52, $this->source); })());
                // line 53
                echo "            ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 55
            echo "    ";
        }
        // line 56
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 56, $this->source); })()), array("class" => ((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["widget_form_control_class"]) || array_key_exists("widget_form_control_class", $context) ? $context["widget_form_control_class"] : (function () { throw new Twig_Error_Runtime('Variable "widget_form_control_class" does not exist.', 56, $this->source); })()))));
        // line 57
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
    ";
        // line 58
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 58, $this->source); })()) != "hidden") && ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) || array_key_exists("widget_addon_prepend", $context) ? $context["widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_prepend" does not exist.', 58, $this->source); })()), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) || array_key_exists("widget_addon_append", $context) ? $context["widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_append" does not exist.', 58, $this->source); })()), null)) : (null)))))) {
            // line 59
            echo "        ";
            if ( !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) || array_key_exists("widget_addon_append", $context) ? $context["widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_append" does not exist.', 59, $this->source); })()), null)) : (null)))) {
                // line 60
                echo "        ";
                $context["widget_addon"] = (isset($context["widget_addon_append"]) || array_key_exists("widget_addon_append", $context) ? $context["widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_append" does not exist.', 60, $this->source); })());
                // line 61
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 63
            echo "    </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 68
        ob_start();
        // line 69
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 69, $this->source); })()), "text")) : ("text"));
        // line 70
        echo "    ";
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 70, $this->source); })()) != "hidden") && ((( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) || array_key_exists("widget_addon_prepend", $context) ? $context["widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_prepend" does not exist.', 70, $this->source); })()), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) || array_key_exists("widget_addon_append", $context) ? $context["widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_append" does not exist.', 70, $this->source); })()), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_prepend", $context)) ? (_twig_default_filter((isset($context["widget_btn_prepend"]) || array_key_exists("widget_btn_prepend", $context) ? $context["widget_btn_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "widget_btn_prepend" does not exist.', 70, $this->source); })()), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_append", $context)) ? (_twig_default_filter((isset($context["widget_btn_append"]) || array_key_exists("widget_btn_append", $context) ? $context["widget_btn_append"] : (function () { throw new Twig_Error_Runtime('Variable "widget_btn_append" does not exist.', 70, $this->source); })()), null)) : (null)))))) {
            // line 71
            echo "    <div class=\"input-group\">
        ";
            // line 72
            if ( !(null === ((array_key_exists("widget_btn_prepend", $context)) ? (_twig_default_filter((isset($context["widget_btn_prepend"]) || array_key_exists("widget_btn_prepend", $context) ? $context["widget_btn_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "widget_btn_prepend" does not exist.', 72, $this->source); })()), null)) : (null)))) {
                // line 73
                echo "            ";
                $context["widget_btns"] = (isset($context["widget_btn_prepend"]) || array_key_exists("widget_btn_prepend", $context) ? $context["widget_btn_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "widget_btn_prepend" does not exist.', 73, $this->source); })());
                // line 74
                echo "            ";
                $this->displayBlock("widget_btns", $context, $blocks);
                echo "
        ";
            }
            // line 76
            echo "        ";
            if ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) || array_key_exists("widget_addon_prepend", $context) ? $context["widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_prepend" does not exist.', 76, $this->source); })()), null)) : (null)))) {
                // line 77
                echo "            ";
                $context["widget_addon"] = (isset($context["widget_addon_prepend"]) || array_key_exists("widget_addon_prepend", $context) ? $context["widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_prepend" does not exist.', 77, $this->source); })());
                // line 78
                echo "            ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 80
            echo "    ";
        }
        // line 81
        echo "    ";
        if ( !((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) || array_key_exists("widget_remove_btn", $context) ? $context["widget_remove_btn"] : (function () { throw new Twig_Error_Runtime('Variable "widget_remove_btn" does not exist.', 81, $this->source); })()), null)) : (null))) {
            // line 82
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 82, $this->source); })()), array("class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " not-removable")));
            // line 83
            echo "    ";
        }
        // line 84
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 84, $this->source); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["widget_form_control_class"]) || array_key_exists("widget_form_control_class", $context) ? $context["widget_form_control_class"] : (function () { throw new Twig_Error_Runtime('Variable "widget_form_control_class" does not exist.', 84, $this->source); })())))));
        // line 85
        echo "    ";
        if (((isset($context["static_text"]) || array_key_exists("static_text", $context) ? $context["static_text"] : (function () { throw new Twig_Error_Runtime('Variable "static_text" does not exist.', 85, $this->source); })()) === true)) {
            // line 86
            echo "        <p class=\"form-control-static\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 86, $this->source); })()), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 88
            echo "        ";
            $this->displayParentBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        // line 90
        echo "    ";
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 90, $this->source); })()) != "hidden") && ((( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) || array_key_exists("widget_addon_prepend", $context) ? $context["widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_prepend" does not exist.', 90, $this->source); })()), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) || array_key_exists("widget_addon_append", $context) ? $context["widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_append" does not exist.', 90, $this->source); })()), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_prepend", $context)) ? (_twig_default_filter((isset($context["widget_btn_prepend"]) || array_key_exists("widget_btn_prepend", $context) ? $context["widget_btn_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "widget_btn_prepend" does not exist.', 90, $this->source); })()), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_append", $context)) ? (_twig_default_filter((isset($context["widget_btn_append"]) || array_key_exists("widget_btn_append", $context) ? $context["widget_btn_append"] : (function () { throw new Twig_Error_Runtime('Variable "widget_btn_append" does not exist.', 90, $this->source); })()), null)) : (null)))))) {
            // line 91
            echo "        ";
            if ( !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) || array_key_exists("widget_addon_append", $context) ? $context["widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_append" does not exist.', 91, $this->source); })()), null)) : (null)))) {
                // line 92
                echo "            ";
                $context["widget_addon"] = (isset($context["widget_addon_append"]) || array_key_exists("widget_addon_append", $context) ? $context["widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_append" does not exist.', 92, $this->source); })());
                // line 93
                echo "            ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 95
            echo "        ";
            if ( !(null === ((array_key_exists("widget_btn_append", $context)) ? (_twig_default_filter((isset($context["widget_btn_append"]) || array_key_exists("widget_btn_append", $context) ? $context["widget_btn_append"] : (function () { throw new Twig_Error_Runtime('Variable "widget_btn_append" does not exist.', 95, $this->source); })()), null)) : (null)))) {
                // line 96
                echo "            ";
                $context["widget_btns"] = (isset($context["widget_btn_append"]) || array_key_exists("widget_btn_append", $context) ? $context["widget_btn_append"] : (function () { throw new Twig_Error_Runtime('Variable "widget_btn_append" does not exist.', 96, $this->source); })());
                // line 97
                echo "            ";
                $this->displayBlock("widget_btns", $context, $blocks);
                echo "
        ";
            }
            // line 99
            echo "    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 105
        ob_start();
        // line 106
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->source); })()), "parent", array()) == null)) {
            // line 107
            echo "        ";
            if ((isset($context["render_fieldset"]) || array_key_exists("render_fieldset", $context) ? $context["render_fieldset"] : (function () { throw new Twig_Error_Runtime('Variable "render_fieldset" does not exist.', 107, $this->source); })())) {
                echo "<fieldset>";
            }
            // line 108
            echo "        ";
            if ((isset($context["show_legend"]) || array_key_exists("show_legend", $context) ? $context["show_legend"] : (function () { throw new Twig_Error_Runtime('Variable "show_legend" does not exist.', 108, $this->source); })())) {
                $this->displayBlock("form_legend", $context, $blocks);
            }
            // line 109
            echo "    ";
        }
        // line 110
        echo "
    ";
        // line 111
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 111, $this->source); })()), "vars", array()), "tabbed", array())) {
            // line 112
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 112, $this->source); })()), 'tabs');
            echo "
        <div class=\"tab-content\">
    ";
        }
        // line 115
        echo "
    ";
        // line 116
        $this->displayBlock("form_rows_visible", $context, $blocks);
        echo "

    ";
        // line 118
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 118, $this->source); })()), "vars", array()), "tabbed", array())) {
            // line 119
            echo "        </div>
    ";
        }
        // line 121
        echo "
    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 122, $this->source); })()), 'rest');
        echo "

    ";
        // line 124
        if ((twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 124, $this->source); })()), "parent", array()) == null)) {
            // line 125
            echo "        ";
            if ((isset($context["render_fieldset"]) || array_key_exists("render_fieldset", $context) ? $context["render_fieldset"] : (function () { throw new Twig_Error_Runtime('Variable "render_fieldset" does not exist.', 125, $this->source); })())) {
                echo "</fieldset>";
            }
            // line 126
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_form_tabs($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_tabs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_tabs"));

        // line 131
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array(), "any", false, true), "tabsView", array(), "any", true, true)) {
            // line 132
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 132, $this->source); })()), "vars", array()), "tabsView", array()), 'widget');
            echo "
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 136
    public function block_tabs_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabs_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabs_widget"));

        // line 137
        ob_start();
        // line 138
        echo "<ul class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->source); })()), "vars", array()), "attr", array()), "class", array()), "html", null, true);
        echo "\">
    ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 139, $this->source); })()), "vars", array()), "tabs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 140
            echo "        ";
            $context["class"] = twig_trim_filter((((twig_get_attribute($this->env, $this->source, $context["tab"], "active", array())) ? ("active ") : ("")) . ((twig_get_attribute($this->env, $this->source, $context["tab"], "disabled", array())) ? ("disabled") : (""))));
            // line 141
            echo "        <li";
            if ( !twig_test_empty(twig_trim_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 141, $this->source); })())))) {
                echo " class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 141, $this->source); })()), "html", null, true);
                echo "\"";
            }
            echo ">
            <a data-toggle=\"tab\" href=\"#";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "id", array()), "html", null, true);
            echo "\">
                ";
            // line 143
            if (twig_get_attribute($this->env, $this->source, $context["tab"], "icon", array())) {
                echo $this->extensions['Mopa\Bundle\BootstrapBundle\Twig\IconExtension']->renderIcon($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "icon", array()));
            }
            // line 144
            echo "                ";
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["tab"], "translation_domain", array()) === false)) ? (twig_get_attribute($this->env, $this->source, $context["tab"], "label", array())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab"], "label", array()), array(), twig_get_attribute($this->env, $this->source, $context["tab"], "translation_domain", array())))), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "</ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 152
    public function block_form_tab($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_tab"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_tab"));

        // line 153
        echo "    ";
        $context["tab_attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 153, $this->source); })()), array("class" => twig_trim_filter(((("tab-pane" . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->source); })()), "vars", array()), "tab_active", array())) ? (" active") : (""))) . " ") . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")))), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 153, $this->source); })())));
        // line 154
        echo "    <div";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab_attr"]) || array_key_exists("tab_attr", $context) ? $context["tab_attr"] : (function () { throw new Twig_Error_Runtime('Variable "tab_attr" does not exist.', 154, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 155
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 159
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 160
        ob_start();
        // line 161
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 162
            echo "        ";
            $context["prototype_markup"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 162, $this->source); })()), 'row');
            // line 163
            echo "        ";
            $context["data_prototype_name"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name", array()), "__name__")) : ("__name__"));
            // line 164
            echo "        ";
            $context["data_prototype_label"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "label", array()), "__name__label__")) : ("__name__label__"));
            // line 165
            echo "        ";
            $context["widget_form_group_attr"] = twig_array_merge(twig_array_merge((isset($context["widget_form_group_attr"]) || array_key_exists("widget_form_group_attr", $context) ? $context["widget_form_group_attr"] : (function () { throw new Twig_Error_Runtime('Variable "widget_form_group_attr" does not exist.', 165, $this->source); })()), array("data-prototype" =>             // line 166
(isset($context["prototype_markup"]) || array_key_exists("prototype_markup", $context) ? $context["prototype_markup"] : (function () { throw new Twig_Error_Runtime('Variable "prototype_markup" does not exist.', 166, $this->source); })()), "data-prototype-name" =>             // line 167
(isset($context["data_prototype_name"]) || array_key_exists("data_prototype_name", $context) ? $context["data_prototype_name"] : (function () { throw new Twig_Error_Runtime('Variable "data_prototype_name" does not exist.', 167, $this->source); })()), "data-prototype-label" =>             // line 168
(isset($context["data_prototype_label"]) || array_key_exists("data_prototype_label", $context) ? $context["data_prototype_label"] : (function () { throw new Twig_Error_Runtime('Variable "data_prototype_label" does not exist.', 168, $this->source); })()))),             // line 169
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 169, $this->source); })()));
            // line 170
            echo "    ";
        }
        // line 171
        echo "    ";
        // line 172
        echo "\t";
        if ((twig_in_filter("collection", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 172, $this->source); })()), "vars", array()), "block_prefixes", array())) && twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true))) {
            // line 173
            echo "\t\t";
            $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) || array_key_exists("widget_form_group_attr", $context) ? $context["widget_form_group_attr"] : (function () { throw new Twig_Error_Runtime('Variable "widget_form_group_attr" does not exist.', 173, $this->source); })()), array("class" => ((((twig_get_attribute($this->env, $this->source, ($context["widget_form_group_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["widget_form_group_attr"] ?? null), "class", array()), "row")) : ("row")) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 173, $this->source); })()), "class", array()))));
            // line 174
            echo "\t";
        }
        // line 175
        echo "    ";
        // line 176
        echo "    ";
        $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) || array_key_exists("widget_form_group_attr", $context) ? $context["widget_form_group_attr"] : (function () { throw new Twig_Error_Runtime('Variable "widget_form_group_attr" does not exist.', 176, $this->source); })()), array("id" => (("collection" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 176, $this->source); })())) . "_form_group"), "class" => (((twig_get_attribute($this->env, $this->source, (isset($context["widget_form_group_attr"]) || array_key_exists("widget_form_group_attr", $context) ? $context["widget_form_group_attr"] : (function () { throw new Twig_Error_Runtime('Variable "widget_form_group_attr" does not exist.', 176, $this->source); })()), "class", array()) . " collection-items ") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 176, $this->source); })())) . "_form_group")));
        // line 177
        echo "
    <div ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widget_form_group_attr"]) || array_key_exists("widget_form_group_attr", $context) ? $context["widget_form_group_attr"] : (function () { throw new Twig_Error_Runtime('Variable "widget_form_group_attr" does not exist.', 178, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    ";
        // line 180
        echo "    ";
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 180, $this->source); })()), "vars", array()), "value", array())) == 0) && array_key_exists("prototype", $context))) {
            // line 181
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prototype_names"]) || array_key_exists("prototype_names", $context) ? $context["prototype_names"] : (function () { throw new Twig_Error_Runtime('Variable "prototype_names" does not exist.', 181, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 182
                echo "            ";
                echo twig_replace_filter((isset($context["prototype_markup"]) || array_key_exists("prototype_markup", $context) ? $context["prototype_markup"] : (function () { throw new Twig_Error_Runtime('Variable "prototype_markup" does not exist.', 182, $this->source); })()), array("__name__" => $context["name"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "    ";
        }
        // line 185
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 190
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 191
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 191, $this->source); })()), array("class" => ((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["widget_form_control_class"]) || array_key_exists("widget_form_control_class", $context) ? $context["widget_form_control_class"] : (function () { throw new Twig_Error_Runtime('Variable "widget_form_control_class" does not exist.', 191, $this->source); })()))));
        // line 192
        echo "    ";
        if (((isset($context["widget_type"]) || array_key_exists("widget_type", $context) ? $context["widget_type"] : (function () { throw new Twig_Error_Runtime('Variable "widget_type" does not exist.', 192, $this->source); })()) == "inline-btn")) {
            // line 193
            echo "        ";
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
            echo "
    ";
        } else {
            // line 195
            echo "        ";
            $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 199
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 200
        echo "    ";
        ob_start();
        // line 201
        echo "        ";
        $context["tagName"] = "label";
        // line 202
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 202, $this->source); })()), array("class" => ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 203
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 203, $this->source); })()), array("class" => ((twig_get_attribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 203, $this->source); })()), "class", array()) . " ") . ((((isset($context["widget_type"]) || array_key_exists("widget_type", $context) ? $context["widget_type"] : (function () { throw new Twig_Error_Runtime('Variable "widget_type" does not exist.', 203, $this->source); })()) != "")) ? ((((((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 203, $this->source); })())) ? ("checkbox") : ("radio")) . "-") . (isset($context["widget_type"]) || array_key_exists("widget_type", $context) ? $context["widget_type"] : (function () { throw new Twig_Error_Runtime('Variable "widget_type" does not exist.', 203, $this->source); })()))) : ("")))));
        // line 204
        echo "        ";
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 204, $this->source); })())) {
            // line 205
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 205, $this->source); })()), array("class" => ((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["horizontal_input_wrapper_class"]) || array_key_exists("horizontal_input_wrapper_class", $context) ? $context["horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "horizontal_input_wrapper_class" does not exist.', 205, $this->source); })()))));
            // line 206
            echo "        ";
        }
        // line 207
        echo "        ";
        if (((isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new Twig_Error_Runtime('Variable "layout" does not exist.', 207, $this->source); })()) === false)) {
            // line 208
            echo "            <div>
        ";
        }
        // line 210
        echo "        ";
        if (((isset($context["widget_type"]) || array_key_exists("widget_type", $context) ? $context["widget_type"] : (function () { throw new Twig_Error_Runtime('Variable "widget_type" does not exist.', 210, $this->source); })()) == "inline-btn")) {
            // line 211
            echo "            ";
            $context["tagName"] = "button";
            // line 212
            echo "            <div class=\"btn-group\" data-toggle=\"buttons\">
        ";
        }
        // line 214
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 214, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 215
            echo "            ";
            if (!twig_in_filter((isset($context["widget_type"]) || array_key_exists("widget_type", $context) ? $context["widget_type"] : (function () { throw new Twig_Error_Runtime('Variable "widget_type" does not exist.', 215, $this->source); })()), array(0 => "inline", 1 => "inline-btn"))) {
                // line 216
                echo "                <div class=\"";
                echo (((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 216, $this->source); })())) ? ("checkbox") : ("radio"));
                echo "\"";
                // line 217
                if (((isset($context["widget_type"]) || array_key_exists("widget_type", $context) ? $context["widget_type"] : (function () { throw new Twig_Error_Runtime('Variable "widget_type" does not exist.', 217, $this->source); })()) == "inline-btn")) {
                    echo " class=\"btn-group\" data-toggle=\"buttons\"";
                }
                echo ">
            ";
            }
            // line 219
            echo "            ";
            if (((isset($context["widget_type"]) || array_key_exists("widget_type", $context) ? $context["widget_type"] : (function () { throw new Twig_Error_Runtime('Variable "widget_type" does not exist.', 219, $this->source); })()) == "inline-btn")) {
                // line 220
                echo "                ";
                $context["label_attr"] = twig_array_merge(((array_key_exists("label_attr", $context)) ? (_twig_default_filter((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 220, $this->source); })()), array())) : (array())), array("class" => ("btn " . ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")))));
                // line 221
                echo "            ";
            }
            // line 222
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", array()), "checked", array()) && ((isset($context["widget_type"]) || array_key_exists("widget_type", $context) ? $context["widget_type"] : (function () { throw new Twig_Error_Runtime('Variable "widget_type" does not exist.', 222, $this->source); })()) == "inline-btn"))) {
                // line 223
                echo "                ";
                $context["label_attr_copy"] = twig_array_merge(((array_key_exists("label_attr", $context)) ? (_twig_default_filter((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 223, $this->source); })()), array())) : (array())), array("class" => ("active " . ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")))));
                // line 224
                echo "            ";
            } else {
                // line 225
                echo "                ";
                $context["label_attr_copy"] = ((array_key_exists("label_attr", $context)) ? (_twig_default_filter((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 225, $this->source); })()), array())) : (array()));
                // line 226
                echo "            ";
            }
            // line 227
            echo "            <";
            echo twig_escape_filter($this->env, (isset($context["tagName"]) || array_key_exists("tagName", $context) ? $context["tagName"] : (function () { throw new Twig_Error_Runtime('Variable "tagName" does not exist.', 227, $this->source); })()), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr_copy"]) || array_key_exists("label_attr_copy", $context) ? $context["label_attr_copy"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr_copy" does not exist.', 227, $this->source); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 228, $this->source); })())) {
                echo " disabled=\"disabled\"";
            }
            echo ">
            ";
            // line 229
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("horizontal_label_class" => (isset($context["horizontal_label_class"]) || array_key_exists("horizontal_label_class", $context) ? $context["horizontal_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "horizontal_label_class" does not exist.', 229, $this->source); })()), "horizontal_input_wrapper_class" => (isset($context["horizontal_input_wrapper_class"]) || array_key_exists("horizontal_input_wrapper_class", $context) ? $context["horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "horizontal_input_wrapper_class" does not exist.', 229, $this->source); })()), "attr" => array("class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "widget_class", array()), "")) : ("")))));
            echo "
            ";
            // line 230
            if ( !array_key_exists("choice_translation_domain", $context)) {
                // line 231
                echo "                ";
                $context["choice_translation_domain"] = (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 231, $this->source); })());
                // line 232
                echo "            ";
            }
            // line 233
            echo "            ";
            if ((((isset($context["widget_type"]) || array_key_exists("widget_type", $context) ? $context["widget_type"] : (function () { throw new Twig_Error_Runtime('Variable "widget_type" does not exist.', 233, $this->source); })()) == "inline-btn") || ((isset($context["widget_checkbox_label"]) || array_key_exists("widget_checkbox_label", $context) ? $context["widget_checkbox_label"] : (function () { throw new Twig_Error_Runtime('Variable "widget_checkbox_label" does not exist.', 233, $this->source); })()) == "widget"))) {
                // line 234
                echo "                ";
                echo ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 234, $this->source); })()) === false)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", array()), "label", array())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", array()), "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 234, $this->source); })()))));
                echo "
            ";
            } else {
                // line 236
                echo "                ";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 236, $this->source); })()) === false)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", array()), "label", array())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", array()), "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 236, $this->source); })())))), "html", null, true);
                echo "
            ";
            }
            // line 238
            echo "            </";
            echo twig_escape_filter($this->env, (isset($context["tagName"]) || array_key_exists("tagName", $context) ? $context["tagName"] : (function () { throw new Twig_Error_Runtime('Variable "tagName" does not exist.', 238, $this->source); })()), "html", null, true);
            echo ">
            ";
            // line 239
            if (!twig_in_filter((isset($context["widget_type"]) || array_key_exists("widget_type", $context) ? $context["widget_type"] : (function () { throw new Twig_Error_Runtime('Variable "widget_type" does not exist.', 239, $this->source); })()), array(0 => "inline", 1 => "inline-btn"))) {
                // line 240
                echo "                </div>
            ";
            }
            // line 242
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "        ";
        if (((isset($context["widget_type"]) || array_key_exists("widget_type", $context) ? $context["widget_type"] : (function () { throw new Twig_Error_Runtime('Variable "widget_type" does not exist.', 243, $this->source); })()) == "inline-btn")) {
            // line 244
            echo "            </div>
        ";
        }
        // line 246
        echo "        ";
        if (((isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new Twig_Error_Runtime('Variable "layout" does not exist.', 246, $this->source); })()) === false)) {
            // line 247
            echo "            </div>
        ";
        }
        // line 249
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 252
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 253
        echo "    ";
        ob_start();
        // line 254
        echo "        ";
        if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 254, $this->source); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 254, $this->source); })())))) {
            // line 255
            if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 255, $this->source); })())))) {
                // line 256
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 256, $this->source); })()), array("%name%" =>                 // line 257
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 257, $this->source); })()), "%id%" =>                 // line 258
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 258, $this->source); })())));
            } else {
                // line 261
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 261, $this->source); })()));
            }
        }
        // line 264
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 264, $this->source); })()), "parent", array()) != null) && !twig_in_filter("choice", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 264, $this->source); })()), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 265
            echo "            <div";
            // line 266
            if (((isset($context["widget_type"]) || array_key_exists("widget_type", $context) ? $context["widget_type"] : (function () { throw new Twig_Error_Runtime('Variable "widget_type" does not exist.', 266, $this->source); })()) == "inline-btn")) {
                echo " class=\"btn-group\" data-toggle=\"buttons\"";
            } else {
                // line 267
                echo " class=\"checkbox\"";
            }
            // line 268
            echo ">
        ";
        }
        // line 270
        echo "        ";
        if ((((twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 270, $this->source); })()), "parent", array()) != null) && !twig_in_filter("choice", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 270, $this->source); })()), "parent", array()), "vars", array()), "block_prefixes", array()))) && (isset($context["label_render"]) || array_key_exists("label_render", $context) ? $context["label_render"] : (function () { throw new Twig_Error_Runtime('Variable "label_render" does not exist.', 270, $this->source); })()))) {
            // line 271
            echo "            ";
            if (((isset($context["widget_type"]) || array_key_exists("widget_type", $context) ? $context["widget_type"] : (function () { throw new Twig_Error_Runtime('Variable "widget_type" does not exist.', 271, $this->source); })()) == "inline-btn")) {
                // line 272
                echo "                ";
                $context["default_class"] = "btn btn-primary";
                // line 273
                echo "                ";
                $context["label_attr"] = ((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 273, $this->source); })()), array("class" => (isset($context["default_class"]) || array_key_exists("default_class", $context) ? $context["default_class"] : (function () { throw new Twig_Error_Runtime('Variable "default_class" does not exist.', 273, $this->source); })())))) : (array("class" => (isset($context["default_class"]) || array_key_exists("default_class", $context) ? $context["default_class"] : (function () { throw new Twig_Error_Runtime('Variable "default_class" does not exist.', 273, $this->source); })()))));
                // line 274
                echo "                ";
                if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 274, $this->source); })())) {
                    // line 275
                    echo "                    ";
                    $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 275, $this->source); })()), array("class" => ("active " . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), (isset($context["default_class"]) || array_key_exists("default_class", $context) ? $context["default_class"] : (function () { throw new Twig_Error_Runtime('Variable "default_class" does not exist.', 275, $this->source); })()))) : ((isset($context["default_class"]) || array_key_exists("default_class", $context) ? $context["default_class"] : (function () { throw new Twig_Error_Runtime('Variable "default_class" does not exist.', 275, $this->source); })()))))));
                    // line 276
                    echo "                ";
                }
                // line 277
                echo "            ";
            }
            // line 278
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 278, $this->source); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 279
            if (((isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new Twig_Error_Runtime('Variable "layout" does not exist.', 279, $this->source); })()) == "inline")) {
                echo " class=\"checkbox-inline\"";
            }
            echo ">
        ";
        }
        // line 281
        echo "        <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 281, $this->source); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 281, $this->source); })())) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 282
        if (((twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 282, $this->source); })()), "parent", array()) != null) && !twig_in_filter("choice", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 282, $this->source); })()), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 283
            echo "            ";
            if ((isset($context["label_render"]) || array_key_exists("label_render", $context) ? $context["label_render"] : (function () { throw new Twig_Error_Runtime('Variable "label_render" does not exist.', 283, $this->source); })())) {
                // line 284
                echo "                ";
                if (twig_in_filter((isset($context["widget_checkbox_label"]) || array_key_exists("widget_checkbox_label", $context) ? $context["widget_checkbox_label"] : (function () { throw new Twig_Error_Runtime('Variable "widget_checkbox_label" does not exist.', 284, $this->source); })()), array(0 => "both", 1 => "widget"))) {
                    // line 285
                    echo "                    ";
                    if ( !array_key_exists("choice_translation_domain", $context)) {
                        // line 286
                        echo "                        ";
                        $context["choice_translation_domain"] = (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 286, $this->source); })());
                        // line 287
                        echo "                    ";
                    }
                    // line 288
                    echo "                    ";
                    echo ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 288, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 288, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 288, $this->source); })()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 288, $this->source); })()))));
                    echo "
                ";
                } else {
                    // line 290
                    echo "                    ";
                    $this->displayBlock("form_help", $context, $blocks);
                    echo "
                ";
                }
                // line 292
                echo "                </label>
            ";
            }
            // line 294
            echo "        ";
        }
        // line 295
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 295, $this->source); })()), "parent", array()) != null) && !twig_in_filter("choice", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 295, $this->source); })()), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 296
            echo "            </div>
        ";
        }
        // line 298
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 301
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 302
        ob_start();
        // line 303
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 303, $this->source); })()) == "single_text")) {
            // line 304
            echo "    ";
            if (array_key_exists("datepicker", $context)) {
                // line 305
                echo "        ";
                $context["widget_addon_icon"] = ((twig_get_attribute($this->env, $this->source, ($context["widget_addon_append"] ?? null), "icon", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["widget_addon_append"]) || array_key_exists("widget_addon_append", $context) ? $context["widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_append" does not exist.', 305, $this->source); })()), "icon", array())) : ("calendar"));
                // line 306
                echo "        <div ";
                if (twig_get_attribute($this->env, $this->source, ($context["datepicker"] ?? null), "attr", array(), "any", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["datepicker"]) || array_key_exists("datepicker", $context) ? $context["datepicker"] : (function () { throw new Twig_Error_Runtime('Variable "datepicker" does not exist.', 306, $this->source); })()), "attr", array()));
                    foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                        echo "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " data-provider=\"datepicker\" class=\"input-group date\" data-date=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 306, $this->source); })()), "html", null, true);
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 306, $this->source); })()), "html", null, true);
                echo "\" data-link-format=\"yyyy-mm-dd\">
            <input type=\"hidden\" value=\"";
                // line 307
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 307, $this->source); })()), "html", null, true);
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
            ";
                // line 308
                if ((array_key_exists("widget_reset_icon", $context) && ((isset($context["widget_reset_icon"]) || array_key_exists("widget_reset_icon", $context) ? $context["widget_reset_icon"] : (function () { throw new Twig_Error_Runtime('Variable "widget_reset_icon" does not exist.', 308, $this->source); })()) == true))) {
                    // line 309
                    echo "                <span class=\"input-group-addon\">";
                    echo $this->extensions['Mopa\Bundle\BootstrapBundle\Twig\IconExtension']->renderIcon($this->env, "remove");
                    echo "</span>
            ";
                }
                // line 311
                echo "            ";
                // line 312
                echo "            ";
                $context["id"] = ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 312, $this->source); })()) . "_mopa_picker_display");
                // line 313
                echo "            ";
                $context["full_name"] = null;
                // line 314
                echo "            ";
                $context["type"] = "text";
                // line 315
                echo "            ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
            <span class=\"input-group-addon\">";
                // line 316
                echo $this->extensions['Mopa\Bundle\BootstrapBundle\Twig\IconExtension']->renderIcon($this->env, (isset($context["widget_addon_icon"]) || array_key_exists("widget_addon_icon", $context) ? $context["widget_addon_icon"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_icon" does not exist.', 316, $this->source); })()));
                echo "</span>
        </div>
    ";
            } else {
                // line 319
                echo "        ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
    ";
            }
        } else {
            // line 322
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 322, $this->source); })()), array("class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "inline")) : ("inline"))));
            // line 323
            echo "    \t<div class=\"row\">
        ";
            // line 324
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 324, $this->source); })()), array("{{ year }}" => (((("<div class=\"" . ((twig_get_attribute($this->env, $this->source,             // line 325
($context["date_wrapper_class"] ?? null), "year", array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["date_wrapper_class"] ?? null), "year", array(), "array"), "col-xs-4")) : ("col-xs-4"))) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 325, $this->source); })()), "year", array()), 'widget', array("attr" => array("class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "widget_class", array()), "")) : ("")) . ""))))) . "</div>"), "{{ month }}" => (((("<div class=\"" . ((twig_get_attribute($this->env, $this->source,             // line 326
($context["date_wrapper_class"] ?? null), "month", array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["date_wrapper_class"] ?? null), "month", array(), "array"), "col-xs-4")) : ("col-xs-4"))) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 326, $this->source); })()), "month", array()), 'widget', array("attr" => array("class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "widget_class", array()), "")) : ("")) . ""))))) . "</div>"), "{{ day }}" => (((("<div class=\"" . ((twig_get_attribute($this->env, $this->source,             // line 327
($context["date_wrapper_class"] ?? null), "day", array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["date_wrapper_class"] ?? null), "day", array(), "array"), "col-xs-4")) : ("col-xs-4"))) . "\">") . $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 327, $this->source); })()), "day", array()), 'widget', array("attr" => array("class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "widget_class", array()), "")) : ("")) . ""))))) . "</div>")));
            // line 328
            echo "
        </div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 334
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 335
        ob_start();
        // line 336
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 336, $this->source); })()) == "single_text")) {
            // line 337
            echo "    ";
            if (array_key_exists("timepicker", $context)) {
                // line 338
                echo "        ";
                $context["widget_addon_icon"] = ((twig_get_attribute($this->env, $this->source, ($context["widget_addon_append"] ?? null), "icon", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["widget_addon_append"]) || array_key_exists("widget_addon_append", $context) ? $context["widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_append" does not exist.', 338, $this->source); })()), "icon", array())) : ("time"));
                // line 339
                echo "        <div ";
                if (twig_get_attribute($this->env, $this->source, ($context["timepicker"] ?? null), "attr", array(), "any", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["timepicker"]) || array_key_exists("timepicker", $context) ? $context["timepicker"] : (function () { throw new Twig_Error_Runtime('Variable "timepicker" does not exist.', 339, $this->source); })()), "attr", array()));
                    foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                        echo "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " data-provider=\"timepicker\" class=\"input-group date\" data-date=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 339, $this->source); })()), "html", null, true);
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 339, $this->source); })()), "html", null, true);
                echo "\" data-link-format=\"hh:ii\">
            <input type=\"hidden\" value=\"";
                // line 340
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 340, $this->source); })()), "html", null, true);
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
            ";
                // line 341
                if ((array_key_exists("widget_reset_icon", $context) && ((isset($context["widget_reset_icon"]) || array_key_exists("widget_reset_icon", $context) ? $context["widget_reset_icon"] : (function () { throw new Twig_Error_Runtime('Variable "widget_reset_icon" does not exist.', 341, $this->source); })()) == true))) {
                    // line 342
                    echo "                <span class=\"input-group-addon\">";
                    echo $this->extensions['Mopa\Bundle\BootstrapBundle\Twig\IconExtension']->renderIcon($this->env, "remove");
                    echo "</span>
            ";
                }
                // line 344
                echo "            ";
                // line 345
                echo "            ";
                $context["id"] = ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 345, $this->source); })()) . "_mopa_picker_display");
                // line 346
                echo "            ";
                $context["full_name"] = null;
                // line 347
                echo "            ";
                $context["type"] = "text";
                // line 348
                echo "            ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
            <span class=\"input-group-addon\">";
                // line 349
                echo $this->extensions['Mopa\Bundle\BootstrapBundle\Twig\IconExtension']->renderIcon($this->env, (isset($context["widget_addon_icon"]) || array_key_exists("widget_addon_icon", $context) ? $context["widget_addon_icon"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_icon" does not exist.', 349, $this->source); })()));
                echo "</span>
        </div>
    ";
            } else {
                // line 352
                echo "        ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
    ";
            }
        } else {
            // line 355
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 355, $this->source); })()), array("class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : (""))));
            // line 356
            echo "    ";
            ob_start();
            // line 357
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 357, $this->source); })()), "hour", array()), 'widget', array("horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) || array_key_exists("horizontal_input_wrapper_class", $context) ? $context["horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "horizontal_input_wrapper_class" does not exist.', 357, $this->source); })()), "col-sm-2")) : ("col-sm-2"))));
            echo "
    ";
            // line 358
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 358, $this->source); })())) {
                // line 359
                echo "        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 359, $this->source); })()), "minute", array()), 'widget', array("horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) || array_key_exists("horizontal_input_wrapper_class", $context) ? $context["horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "horizontal_input_wrapper_class" does not exist.', 359, $this->source); })()), "col-sm-2")) : ("col-sm-2"))));
                echo "
    ";
            }
            // line 361
            echo "    ";
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 361, $this->source); })())) {
                // line 362
                echo "        :";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 362, $this->source); })()), "second", array()), 'widget', array("horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) || array_key_exists("horizontal_input_wrapper_class", $context) ? $context["horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "horizontal_input_wrapper_class" does not exist.', 362, $this->source); })()), "col-sm-2")) : ("col-sm-2"))));
                echo "
    ";
            }
            // line 364
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 369
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 370
        ob_start();
        // line 371
        echo "    ";
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 371, $this->source); })()) == "single_text")) {
            // line 372
            echo "        ";
            if (array_key_exists("datetimepicker", $context)) {
                // line 373
                echo "            ";
                $context["widget_addon_icon"] = ((twig_get_attribute($this->env, $this->source, ($context["widget_addon_append"] ?? null), "icon", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["widget_addon_append"]) || array_key_exists("widget_addon_append", $context) ? $context["widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_append" does not exist.', 373, $this->source); })()), "icon", array())) : ("th"));
                // line 374
                echo "            <div ";
                if (twig_get_attribute($this->env, $this->source, ($context["datetimepicker"] ?? null), "attr", array(), "any", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["datetimepicker"]) || array_key_exists("datetimepicker", $context) ? $context["datetimepicker"] : (function () { throw new Twig_Error_Runtime('Variable "datetimepicker" does not exist.', 374, $this->source); })()), "attr", array()));
                    foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                        echo "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " data-provider=\"datetimepicker\" class=\"input-group date\" data-date=\"";
                if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 374, $this->source); })())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 374, $this->source); })()), "Y-m-d H:i"), "html", null, true);
                }
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 374, $this->source); })()), "html", null, true);
                echo "\" data-link-format=\"yyyy-mm-dd hh:ii\">
                <input type=\"hidden\" value=\"";
                // line 375
                if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 375, $this->source); })())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 375, $this->source); })()), "Y-m-d H:i"), "html", null, true);
                }
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
                ";
                // line 376
                if ((array_key_exists("widget_reset_icon", $context) && ((isset($context["widget_reset_icon"]) || array_key_exists("widget_reset_icon", $context) ? $context["widget_reset_icon"] : (function () { throw new Twig_Error_Runtime('Variable "widget_reset_icon" does not exist.', 376, $this->source); })()) == true))) {
                    // line 377
                    echo "                    <span class=\"input-group-addon\">";
                    echo $this->extensions['Mopa\Bundle\BootstrapBundle\Twig\IconExtension']->renderIcon($this->env, "remove");
                    echo "</span>
                ";
                }
                // line 379
                echo "                ";
                // line 380
                echo "                ";
                $context["id"] = ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 380, $this->source); })()) . "_mopa_picker_display");
                // line 381
                echo "                ";
                $context["full_name"] = null;
                // line 382
                echo "                ";
                $context["type"] = "text";
                // line 383
                echo "                ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
                <span class=\"input-group-addon\">";
                // line 384
                echo $this->extensions['Mopa\Bundle\BootstrapBundle\Twig\IconExtension']->renderIcon($this->env, (isset($context["widget_addon_icon"]) || array_key_exists("widget_addon_icon", $context) ? $context["widget_addon_icon"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_icon" does not exist.', 384, $this->source); })()));
                echo "</span>
            </div>
        ";
            } else {
                // line 387
                echo "            ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
        ";
            }
            // line 389
            echo "    ";
        } else {
            // line 390
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 390, $this->source); })()), array("class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : (""))));
            // line 391
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 392
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 392, $this->source); })()), "date", array()), 'errors');
            echo "
                ";
            // line 393
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 393, $this->source); })()), "time", array()), 'errors');
            echo "
                ";
            // line 394
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 394, $this->source); })()), "date", array()), 'widget', array("attr" => array("class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "widget_class", array()), "")) : (""))), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) || array_key_exists("horizontal_input_wrapper_class", $context) ? $context["horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "horizontal_input_wrapper_class" does not exist.', 394, $this->source); })()), "col-sm-3")) : ("col-sm-3"))));
            echo "
                ";
            // line 395
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 395, $this->source); })()), "time", array()), 'widget', array("attr" => array("class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "widget_class", array()), "")) : (""))), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) || array_key_exists("horizontal_input_wrapper_class", $context) ? $context["horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "horizontal_input_wrapper_class" does not exist.', 395, $this->source); })()), "col-sm-2")) : ("col-sm-2"))));
            echo "
            </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 401
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 402
        ob_start();
        // line 403
        echo "    ";
        $context["widget_addon_append"] = twig_array_merge((isset($context["widget_addon_append"]) || array_key_exists("widget_addon_append", $context) ? $context["widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_append" does not exist.', 403, $this->source); })()), array("text" => ((twig_get_attribute($this->env, $this->source, ($context["widget_addon_append"] ?? null), "text", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["widget_addon_append"] ?? null), "text", array()), "%")) : ("%"))));
        // line 404
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 408
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 409
        ob_start();
        // line 410
        echo "    ";
        $context["widget_addon_prepend"] = ((((((isset($context["widget_addon_prepend"]) || array_key_exists("widget_addon_prepend", $context) ? $context["widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_prepend" does not exist.', 410, $this->source); })()) != false) || ((isset($context["widget_addon_prepend"]) || array_key_exists("widget_addon_prepend", $context) ? $context["widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_prepend" does not exist.', 410, $this->source); })()) == null)) && ((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 410, $this->source); })()) != "{{ widget }}"))) ? (array("text" => twig_trim_filter(twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 410, $this->source); })()), array("{{ widget }}" => ""))))) : (((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) || array_key_exists("widget_addon_prepend", $context) ? $context["widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_prepend" does not exist.', 410, $this->source); })()), null)) : (null))));
        // line 411
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 415
    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        // line 416
        ob_start();
        // line 417
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 417, $this->source); })()), "file")) : ("file"));
        // line 418
        echo "    ";
        if ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) || array_key_exists("widget_addon_prepend", $context) ? $context["widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_prepend" does not exist.', 418, $this->source); })()), null)) : (null)))) {
            // line 419
            echo "        ";
            $context["widget_addon"] = (isset($context["widget_addon_prepend"]) || array_key_exists("widget_addon_prepend", $context) ? $context["widget_addon_prepend"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_prepend" does not exist.', 419, $this->source); })());
            // line 420
            echo "        ";
            $this->displayBlock("widget_addon", $context, $blocks);
            echo "
    ";
        }
        // line 422
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 422, $this->source); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "/>
";
        // line 423
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 423, $this->source); })()) != "hidden") &&  !(null === ((twig_get_attribute($this->env, $this->source, ($context["widget_addon"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["widget_addon"] ?? null), "type", array()), null)) : (null))))) {
            // line 424
            echo "    ";
            if ( !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) || array_key_exists("widget_addon_append", $context) ? $context["widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_append" does not exist.', 424, $this->source); })()), null)) : (null)))) {
                // line 425
                echo "        ";
                $context["widget_addon"] = (isset($context["widget_addon_append"]) || array_key_exists("widget_addon_append", $context) ? $context["widget_addon_append"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_append" does not exist.', 425, $this->source); })());
                // line 426
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 434
    public function block_form_legend($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_legend"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_legend"));

        // line 435
        ob_start();
        // line 436
        echo "    ";
        if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 436, $this->source); })()))) {
            // line 437
            if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 437, $this->source); })())))) {
                // line 438
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 438, $this->source); })()), array("%name%" =>                 // line 439
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 439, $this->source); })()), "%id%" =>                 // line 440
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 440, $this->source); })())));
            } else {
                // line 443
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 443, $this->source); })()));
            }
        }
        // line 446
        echo "    <";
        echo twig_escape_filter($this->env, (isset($context["legend_tag"]) || array_key_exists("legend_tag", $context) ? $context["legend_tag"] : (function () { throw new Twig_Error_Runtime('Variable "legend_tag" does not exist.', 446, $this->source); })()), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 446, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 446, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 446, $this->source); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 446, $this->source); })())))), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, (isset($context["legend_tag"]) || array_key_exists("legend_tag", $context) ? $context["legend_tag"] : (function () { throw new Twig_Error_Runtime('Variable "legend_tag" does not exist.', 446, $this->source); })()), "html", null, true);
        echo ">
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 450
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 451
        if ((!twig_in_filter("checkbox", (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 451, $this->source); })())) || twig_in_filter((isset($context["widget_checkbox_label"]) || array_key_exists("widget_checkbox_label", $context) ? $context["widget_checkbox_label"] : (function () { throw new Twig_Error_Runtime('Variable "widget_checkbox_label" does not exist.', 451, $this->source); })()), array(0 => "label", 1 => "both")))) {
            // line 452
            ob_start();
            // line 453
            echo "    ";
            if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 453, $this->source); })()) === false)) {
                // line 454
                echo "        ";
                if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 454, $this->source); })()))) {
                    // line 455
                    if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 455, $this->source); })())))) {
                        // line 456
                        $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 456, $this->source); })()), array("%name%" =>                         // line 457
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 457, $this->source); })()), "%id%" =>                         // line 458
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 458, $this->source); })())));
                    } else {
                        // line 461
                        $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 461, $this->source); })()));
                    }
                }
                // line 464
                echo "        ";
                if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 464, $this->source); })())) {
                    // line 465
                    echo "            ";
                    $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 465, $this->source); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 465, $this->source); })())));
                    // line 466
                    echo "        ";
                }
                // line 467
                echo "        ";
                $context["label_attr_class"] = "";
                // line 468
                echo "        ";
                if (((isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new Twig_Error_Runtime('Variable "layout" does not exist.', 468, $this->source); })()) == "horizontal")) {
                    // line 469
                    echo "            ";
                    $context["label_attr_class"] = (("control-label " . (isset($context["label_attr_class"]) || array_key_exists("label_attr_class", $context) ? $context["label_attr_class"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr_class" does not exist.', 469, $this->source); })())) . (isset($context["horizontal_label_class"]) || array_key_exists("horizontal_label_class", $context) ? $context["horizontal_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "horizontal_label_class" does not exist.', 469, $this->source); })()));
                    // line 470
                    echo "        ";
                }
                // line 471
                echo "        ";
                if ((isset($context["horizontal_label_div_class"]) || array_key_exists("horizontal_label_div_class", $context) ? $context["horizontal_label_div_class"] : (function () { throw new Twig_Error_Runtime('Variable "horizontal_label_div_class" does not exist.', 471, $this->source); })())) {
                    // line 472
                    echo "        <div class=\"";
                    echo twig_escape_filter($this->env, (isset($context["horizontal_label_div_class"]) || array_key_exists("horizontal_label_div_class", $context) ? $context["horizontal_label_div_class"] : (function () { throw new Twig_Error_Runtime('Variable "horizontal_label_div_class" does not exist.', 472, $this->source); })()), "html", null, true);
                    echo "\">
        ";
                }
                // line 474
                echo "        ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 474, $this->source); })()), array("class" => twig_trim_filter((((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["label_attr_class"]) || array_key_exists("label_attr_class", $context) ? $context["label_attr_class"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr_class" does not exist.', 474, $this->source); })())) . (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 474, $this->source); })())) ? (" required") : (" optional"))))));
                // line 475
                echo "        <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 475, $this->source); })()));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
        ";
                // line 476
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 476, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 476, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 476, $this->source); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 476, $this->source); })())))), "html", null, true);
                // line 477
                $this->displayBlock("label_asterisk", $context, $blocks);
                echo "
        ";
                // line 478
                if (((twig_in_filter("collection", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 478, $this->source); })()), "vars", array()), "block_prefixes", array())) && ((array_key_exists("widget_add_btn", $context)) ? (_twig_default_filter((isset($context["widget_add_btn"]) || array_key_exists("widget_add_btn", $context) ? $context["widget_add_btn"] : (function () { throw new Twig_Error_Runtime('Variable "widget_add_btn" does not exist.', 478, $this->source); })()), null)) : (null))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 478, $this->source); })()), "vars", array()), "allow_add", array()) == true))) {
                    // line 479
                    echo "            &nbsp;";
                    $this->displayBlock("form_widget_add_btn", $context, $blocks);
                    echo "
        ";
                }
                // line 481
                echo "        ";
                if ((isset($context["help_label"]) || array_key_exists("help_label", $context) ? $context["help_label"] : (function () { throw new Twig_Error_Runtime('Variable "help_label" does not exist.', 481, $this->source); })())) {
                    // line 482
                    echo "            ";
                    $this->displayBlock("help_label", $context, $blocks);
                    echo "
        ";
                }
                // line 484
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["help_label_tooltip"]) || array_key_exists("help_label_tooltip", $context) ? $context["help_label_tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "help_label_tooltip" does not exist.', 484, $this->source); })()), "title", array())) {
                    // line 485
                    echo "            ";
                    $this->displayBlock("help_label_tooltip", $context, $blocks);
                    echo "
        ";
                }
                // line 487
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["help_label_popover"]) || array_key_exists("help_label_popover", $context) ? $context["help_label_popover"] : (function () { throw new Twig_Error_Runtime('Variable "help_label_popover" does not exist.', 487, $this->source); })()), "title", array())) {
                    // line 488
                    echo "            ";
                    $this->displayBlock("help_label_popover", $context, $blocks);
                    echo "
        ";
                }
                // line 490
                echo "        </label>
        ";
                // line 491
                if ((isset($context["horizontal_label_div_class"]) || array_key_exists("horizontal_label_div_class", $context) ? $context["horizontal_label_div_class"] : (function () { throw new Twig_Error_Runtime('Variable "horizontal_label_div_class" does not exist.', 491, $this->source); })())) {
                    // line 492
                    echo "        </div>
        ";
                }
                // line 494
                echo "    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 499
    public function block_help_label($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_label"));

        // line 500
        echo "    <span class=\"help-block\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["help_label"]) || array_key_exists("help_label", $context) ? $context["help_label"] : (function () { throw new Twig_Error_Runtime('Variable "help_label" does not exist.', 500, $this->source); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 500, $this->source); })())), "html", null, true);
        echo "</span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 503
    public function block_help_label_tooltip($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_label_tooltip"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_label_tooltip"));

        // line 504
        echo "    <span class=\"help-block\">
        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"";
        // line 505
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["help_label_tooltip"]) || array_key_exists("help_label_tooltip", $context) ? $context["help_label_tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "help_label_tooltip" does not exist.', 505, $this->source); })()), "placement", array()), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["help_label_tooltip"]) || array_key_exists("help_label_tooltip", $context) ? $context["help_label_tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "help_label_tooltip" does not exist.', 505, $this->source); })()), "title", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 505, $this->source); })())), "html", null, true);
        echo "\">
            ";
        // line 506
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["help_label_tooltip"]) || array_key_exists("help_label_tooltip", $context) ? $context["help_label_tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "help_label_tooltip" does not exist.', 506, $this->source); })()), "icon", array()) === false)) {
            // line 507
            echo "                ";
            echo $this->extensions['Mopa\Bundle\BootstrapBundle\Twig\IconExtension']->renderIcon($this->env, twig_get_attribute($this->env, $this->source, (isset($context["help_label_tooltip"]) || array_key_exists("help_label_tooltip", $context) ? $context["help_label_tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "help_label_tooltip" does not exist.', 507, $this->source); })()), "icon", array()));
            echo "
            ";
        }
        // line 509
        echo "            ";
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["help_label_tooltip"]) || array_key_exists("help_label_tooltip", $context) ? $context["help_label_tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "help_label_tooltip" does not exist.', 509, $this->source); })()), "text", array()) === null)) {
            // line 510
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["help_label_tooltip"]) || array_key_exists("help_label_tooltip", $context) ? $context["help_label_tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "help_label_tooltip" does not exist.', 510, $this->source); })()), "text", array()), "html", null, true);
            echo "
            ";
        }
        // line 512
        echo "        </a>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 516
    public function block_help_block_tooltip($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_block_tooltip"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_block_tooltip"));

        // line 517
        echo "    ";
        $context["help_label_tooltip"] = (isset($context["help_block_tooltip"]) || array_key_exists("help_block_tooltip", $context) ? $context["help_block_tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "help_block_tooltip" does not exist.', 517, $this->source); })());
        // line 518
        echo "    ";
        $this->displayBlock("help_label_tooltip", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 521
    public function block_help_label_popover($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_label_popover"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_label_popover"));

        // line 522
        echo "    <span class=\"help-block\">
        <a href=\"#\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"";
        // line 523
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["help_label_popover"]) || array_key_exists("help_label_popover", $context) ? $context["help_label_popover"] : (function () { throw new Twig_Error_Runtime('Variable "help_label_popover" does not exist.', 523, $this->source); })()), "placement", array()), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["help_label_popover"]) || array_key_exists("help_label_popover", $context) ? $context["help_label_popover"] : (function () { throw new Twig_Error_Runtime('Variable "help_label_popover" does not exist.', 523, $this->source); })()), "title", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 523, $this->source); })())), "html", null, true);
        echo "\" data-content=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["help_label_popover"]) || array_key_exists("help_label_popover", $context) ? $context["help_label_popover"] : (function () { throw new Twig_Error_Runtime('Variable "help_label_popover" does not exist.', 523, $this->source); })()), "content", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 523, $this->source); })())), "html", null, true);
        echo "\" data-html=\"true\">
            ";
        // line 524
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["help_label_popover"]) || array_key_exists("help_label_popover", $context) ? $context["help_label_popover"] : (function () { throw new Twig_Error_Runtime('Variable "help_label_popover" does not exist.', 524, $this->source); })()), "icon", array()) === false)) {
            // line 525
            echo "                ";
            echo $this->extensions['Mopa\Bundle\BootstrapBundle\Twig\IconExtension']->renderIcon($this->env, twig_get_attribute($this->env, $this->source, (isset($context["help_label_popover"]) || array_key_exists("help_label_popover", $context) ? $context["help_label_popover"] : (function () { throw new Twig_Error_Runtime('Variable "help_label_popover" does not exist.', 525, $this->source); })()), "icon", array()));
            echo "
            ";
        }
        // line 527
        echo "            ";
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["help_label_popover"]) || array_key_exists("help_label_popover", $context) ? $context["help_label_popover"] : (function () { throw new Twig_Error_Runtime('Variable "help_label_popover" does not exist.', 527, $this->source); })()), "text", array()) === null)) {
            // line 528
            echo "                ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["help_label_popover"]) || array_key_exists("help_label_popover", $context) ? $context["help_label_popover"] : (function () { throw new Twig_Error_Runtime('Variable "help_label_popover" does not exist.', 528, $this->source); })()), "text", array());
            echo "
            ";
        }
        // line 530
        echo "        </a>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 534
    public function block_help_block_popover($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_block_popover"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_block_popover"));

        // line 535
        echo "    ";
        $context["help_label_popover"] = (isset($context["help_block_popover"]) || array_key_exists("help_block_popover", $context) ? $context["help_block_popover"] : (function () { throw new Twig_Error_Runtime('Variable "help_block_popover" does not exist.', 535, $this->source); })());
        // line 536
        echo "    ";
        $this->displayBlock("help_label_popover", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 539
    public function block_form_actions_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions_widget"));

        // line 540
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 540, $this->source); })()), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 541
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["button"], 'widget');
            echo "&nbsp; ";
            // line 542
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 546
    public function block_form_actions_row($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions_row"));

        // line 547
        echo "    ";
        $this->displayBlock("button_row", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 550
    public function block_form_rows_visible($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows_visible"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows_visible"));

        // line 551
        ob_start();
        // line 552
        echo "     ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 552, $this->source); })())) > 0)) {
            // line 553
            echo "        <div class=\"symfony-form-errors\">
            ";
            // line 554
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 554, $this->source); })()), 'errors');
            echo "
        </div>
    ";
        }
        // line 557
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 557, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 558
            echo "        ";
            if (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", array()), "block_prefixes", array()))) {
                echo " ";
                // line 559
                echo "            ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
                echo "
        ";
            }
            // line 561
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 565
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 566
        ob_start();
        // line 567
        echo "    ";
        if (twig_in_filter("tab", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 567, $this->source); })()), "vars", array()), "block_prefixes", array()))) {
            // line 568
            echo "        ";
            $this->displayBlock("form_tab", $context, $blocks);
            echo "
    ";
        } elseif ((        // line 569
(isset($context["embed_form"]) || array_key_exists("embed_form", $context) ? $context["embed_form"] : (function () { throw new Twig_Error_Runtime('Variable "embed_form" does not exist.', 569, $this->source); })()) === true)) {
            // line 570
            echo "        ";
            if ( !twig_test_empty((isset($context["widget_prefix"]) || array_key_exists("widget_prefix", $context) ? $context["widget_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "widget_prefix" does not exist.', 570, $this->source); })()))) {
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_prefix"]) || array_key_exists("widget_prefix", $context) ? $context["widget_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "widget_prefix" does not exist.', 570, $this->source); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 570, $this->source); })()));
            }
            echo " ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 570, $this->source); })()), 'widget', $context);
            echo " ";
            if ( !twig_test_empty((isset($context["widget_suffix"]) || array_key_exists("widget_suffix", $context) ? $context["widget_suffix"] : (function () { throw new Twig_Error_Runtime('Variable "widget_suffix" does not exist.', 570, $this->source); })()))) {
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_suffix"]) || array_key_exists("widget_suffix", $context) ? $context["widget_suffix"] : (function () { throw new Twig_Error_Runtime('Variable "widget_suffix" does not exist.', 570, $this->source); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 570, $this->source); })()));
            }
            // line 571
            echo "    ";
        } else {
            // line 572
            echo "        ";
            $this->displayBlock("widget_form_group_start", $context, $blocks);
            echo "

        ";
            // line 574
            if ((((isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new Twig_Error_Runtime('Variable "layout" does not exist.', 574, $this->source); })()) == "horizontal") &&  !(isset($context["label_render"]) || array_key_exists("label_render", $context) ? $context["label_render"] : (function () { throw new Twig_Error_Runtime('Variable "label_render" does not exist.', 574, $this->source); })()))) {
                // line 575
                echo "            ";
                $context["horizontal_input_wrapper_class"] = (((isset($context["horizontal_input_wrapper_class"]) || array_key_exists("horizontal_input_wrapper_class", $context) ? $context["horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "horizontal_input_wrapper_class" does not exist.', 575, $this->source); })()) . " ") . (isset($context["horizontal_label_offset_class"]) || array_key_exists("horizontal_label_offset_class", $context) ? $context["horizontal_label_offset_class"] : (function () { throw new Twig_Error_Runtime('Variable "horizontal_label_offset_class" does not exist.', 575, $this->source); })()));
                // line 576
                echo "        ";
            }
            // line 577
            echo "
        ";
            // line 578
            if ((isset($context["horizontal"]) || array_key_exists("horizontal", $context) ? $context["horizontal"] : (function () { throw new Twig_Error_Runtime('Variable "horizontal" does not exist.', 578, $this->source); })())) {
                // line 579
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["horizontal_input_wrapper_class"]) || array_key_exists("horizontal_input_wrapper_class", $context) ? $context["horizontal_input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "horizontal_input_wrapper_class" does not exist.', 579, $this->source); })()), "html", null, true);
                echo "\">
        ";
            }
            // line 581
            echo "
        ";
            // line 582
            if ( !twig_test_empty((isset($context["widget_prefix"]) || array_key_exists("widget_prefix", $context) ? $context["widget_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "widget_prefix" does not exist.', 582, $this->source); })()))) {
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_prefix"]) || array_key_exists("widget_prefix", $context) ? $context["widget_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "widget_prefix" does not exist.', 582, $this->source); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 582, $this->source); })()));
            }
            echo " ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 582, $this->source); })()), 'widget', $context);
            echo " ";
            if ( !twig_test_empty((isset($context["widget_suffix"]) || array_key_exists("widget_suffix", $context) ? $context["widget_suffix"] : (function () { throw new Twig_Error_Runtime('Variable "widget_suffix" does not exist.', 582, $this->source); })()))) {
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_suffix"]) || array_key_exists("widget_suffix", $context) ? $context["widget_suffix"] : (function () { throw new Twig_Error_Runtime('Variable "widget_suffix" does not exist.', 582, $this->source); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 582, $this->source); })()));
            }
            // line 583
            echo "
        ";
            // line 584
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 584, $this->source); })()), "text")) : ("text"));
            // line 585
            echo "        ";
            if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 585, $this->source); })()) != "hidden")) {
                // line 586
                echo "        ";
                $this->displayBlock("form_message", $context, $blocks);
                echo "
        ";
            }
            // line 588
            echo "
        ";
            // line 589
            if ((isset($context["horizontal"]) || array_key_exists("horizontal", $context) ? $context["horizontal"] : (function () { throw new Twig_Error_Runtime('Variable "horizontal" does not exist.', 589, $this->source); })())) {
                // line 590
                echo "        </div>
        ";
            }
            // line 592
            echo "
        ";
            // line 593
            if (((( !(null === twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 593, $this->source); })()), "parent", array())) && twig_in_filter("collection", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 593, $this->source); })()), "parent", array()), "vars", array()), "block_prefixes", array()))) && ((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) || array_key_exists("widget_remove_btn", $context) ? $context["widget_remove_btn"] : (function () { throw new Twig_Error_Runtime('Variable "widget_remove_btn" does not exist.', 593, $this->source); })()), null)) : (null))) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false)))) {
                // line 594
                echo "            ";
                $this->displayBlock("form_widget_remove_btn", $context, $blocks);
                echo "
        ";
            }
            // line 596
            $this->displayBlock("widget_form_group_end", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 603
    public function block_form_message($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_message"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_message"));

        // line 604
        ob_start();
        // line 605
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 605, $this->source); })()), 'errors');
        echo "

    ";
        // line 607
        if (((!twig_in_filter("checkbox", (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 607, $this->source); })())) || ((isset($context["widget_checkbox_label"]) || array_key_exists("widget_checkbox_label", $context) ? $context["widget_checkbox_label"] : (function () { throw new Twig_Error_Runtime('Variable "widget_checkbox_label" does not exist.', 607, $this->source); })()) != "label")) && (isset($context["help_block"]) || array_key_exists("help_block", $context) ? $context["help_block"] : (function () { throw new Twig_Error_Runtime('Variable "help_block" does not exist.', 607, $this->source); })()))) {
            // line 608
            echo "        ";
            $this->displayBlock("form_help", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 615
    public function block_form_help($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_help"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_help"));

        // line 616
        ob_start();
        // line 617
        echo "    ";
        if ((isset($context["help_block"]) || array_key_exists("help_block", $context) ? $context["help_block"] : (function () { throw new Twig_Error_Runtime('Variable "help_block" does not exist.', 617, $this->source); })())) {
            echo "<p class=\"help-block\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["help_block"]) || array_key_exists("help_block", $context) ? $context["help_block"] : (function () { throw new Twig_Error_Runtime('Variable "help_block" does not exist.', 617, $this->source); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 617, $this->source); })()));
            echo "</p>";
        }
        // line 618
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["help_block_tooltip"]) || array_key_exists("help_block_tooltip", $context) ? $context["help_block_tooltip"] : (function () { throw new Twig_Error_Runtime('Variable "help_block_tooltip" does not exist.', 618, $this->source); })()), "title", array())) {
            // line 619
            echo "        &nbsp;";
            $this->displayBlock("help_block_tooltip", $context, $blocks);
            echo "
    ";
        }
        // line 621
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["help_block_popover"]) || array_key_exists("help_block_popover", $context) ? $context["help_block_popover"] : (function () { throw new Twig_Error_Runtime('Variable "help_block_popover" does not exist.', 621, $this->source); })()), "title", array())) {
            // line 622
            echo "        &nbsp;";
            $this->displayBlock("help_block_popover", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 627
    public function block_form_widget_add_btn($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_add_btn"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_add_btn"));

        // line 628
        ob_start();
        // line 629
        echo "    ";
        if (((array_key_exists("widget_add_btn", $context)) ? (_twig_default_filter((isset($context["widget_add_btn"]) || array_key_exists("widget_add_btn", $context) ? $context["widget_add_btn"] : (function () { throw new Twig_Error_Runtime('Variable "widget_add_btn" does not exist.', 629, $this->source); })()), null)) : (null))) {
            // line 630
            echo "        ";
            $context["button_type"] = "add";
            // line 631
            echo "        ";
            $context["button_values"] = (isset($context["widget_add_btn"]) || array_key_exists("widget_add_btn", $context) ? $context["widget_add_btn"] : (function () { throw new Twig_Error_Runtime('Variable "widget_add_btn" does not exist.', 631, $this->source); })());
            // line 632
            echo "        ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 637
    public function block_form_widget_remove_btn($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_remove_btn"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_remove_btn"));

        // line 638
        ob_start();
        // line 639
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["widget_remove_btn"] ?? null), "wrapper_div", array(), "any", true, true) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["widget_remove_btn"]) || array_key_exists("widget_remove_btn", $context) ? $context["widget_remove_btn"] : (function () { throw new Twig_Error_Runtime('Variable "widget_remove_btn" does not exist.', 639, $this->source); })()), "wrapper_div", array()) === false))) {
            // line 640
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget_remove_btn"]) || array_key_exists("widget_remove_btn", $context) ? $context["widget_remove_btn"] : (function () { throw new Twig_Error_Runtime('Variable "widget_remove_btn" does not exist.', 640, $this->source); })()), "wrapper_div", array()), "class", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 642
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["widget_remove_btn"] ?? null), "horizontal_wrapper_div", array(), "any", true, true) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["widget_remove_btn"]) || array_key_exists("widget_remove_btn", $context) ? $context["widget_remove_btn"] : (function () { throw new Twig_Error_Runtime('Variable "widget_remove_btn" does not exist.', 642, $this->source); })()), "horizontal_wrapper_div", array()) === false))) {
            // line 643
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget_remove_btn"]) || array_key_exists("widget_remove_btn", $context) ? $context["widget_remove_btn"] : (function () { throw new Twig_Error_Runtime('Variable "widget_remove_btn" does not exist.', 643, $this->source); })()), "horizontal_wrapper_div", array()), "class", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 645
        echo "    ";
        if (((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) || array_key_exists("widget_remove_btn", $context) ? $context["widget_remove_btn"] : (function () { throw new Twig_Error_Runtime('Variable "widget_remove_btn" does not exist.', 645, $this->source); })()), null)) : (null))) {
            // line 646
            echo "    ";
            $context["button_type"] = "remove";
            // line 647
            echo "    ";
            $context["button_values"] = (isset($context["widget_remove_btn"]) || array_key_exists("widget_remove_btn", $context) ? $context["widget_remove_btn"] : (function () { throw new Twig_Error_Runtime('Variable "widget_remove_btn" does not exist.', 647, $this->source); })());
            // line 648
            echo "    ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        // line 650
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["widget_remove_btn"] ?? null), "horizontal_wrapper_div", array(), "any", true, true) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["widget_remove_btn"]) || array_key_exists("widget_remove_btn", $context) ? $context["widget_remove_btn"] : (function () { throw new Twig_Error_Runtime('Variable "widget_remove_btn" does not exist.', 650, $this->source); })()), "horizontal_wrapper_div", array()) === false))) {
            // line 651
            echo "        </div>
    ";
        }
        // line 653
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["widget_remove_btn"] ?? null), "wrapper_div", array(), "any", true, true) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["widget_remove_btn"]) || array_key_exists("widget_remove_btn", $context) ? $context["widget_remove_btn"] : (function () { throw new Twig_Error_Runtime('Variable "widget_remove_btn" does not exist.', 653, $this->source); })()), "wrapper_div", array()) === false))) {
            // line 654
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 659
    public function block_collection_button($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_button"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_button"));

        // line 660
        echo "<a ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["button_values"]) || array_key_exists("button_values", $context) ? $context["button_values"] : (function () { throw new Twig_Error_Runtime('Variable "button_values" does not exist.', 660, $this->source); })()), "attr", array()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " data-collection-";
        echo twig_escape_filter($this->env, (isset($context["button_type"]) || array_key_exists("button_type", $context) ? $context["button_type"] : (function () { throw new Twig_Error_Runtime('Variable "button_type" does not exist.', 660, $this->source); })()), "html", null, true);
        echo "-btn=\".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 660, $this->source); })()), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "_form_group\">
";
        // line 661
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["button_values"]) || array_key_exists("button_values", $context) ? $context["button_values"] : (function () { throw new Twig_Error_Runtime('Variable "button_values" does not exist.', 661, $this->source); })()), "icon", array()))) {
            // line 662
            echo "    ";
            echo $this->extensions['Mopa\Bundle\BootstrapBundle\Twig\IconExtension']->renderIcon($this->env, twig_get_attribute($this->env, $this->source, (isset($context["button_values"]) || array_key_exists("button_values", $context) ? $context["button_values"] : (function () { throw new Twig_Error_Runtime('Variable "button_values" does not exist.', 662, $this->source); })()), "icon", array()), ((twig_get_attribute($this->env, $this->source, ($context["button_values"] ?? null), "icon_inverted", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["button_values"] ?? null), "icon_inverted", array()), false)) : (false)));
            echo "
";
        }
        // line 664
        if (twig_get_attribute($this->env, $this->source, ($context["button_values"] ?? null), "label", array(), "any", true, true)) {
            // line 665
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["button_values"]) || array_key_exists("button_values", $context) ? $context["button_values"] : (function () { throw new Twig_Error_Runtime('Variable "button_values" does not exist.', 665, $this->source); })()), "label", array()), array(), ((twig_get_attribute($this->env, $this->source, ($context["button_values"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["button_values"] ?? null), "translation_domain", array()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 665, $this->source); })()))) : ((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 665, $this->source); })())))), "html", null, true);
            echo "
";
        }
        // line 667
        echo "</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 671
    public function block_label_asterisk($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label_asterisk"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label_asterisk"));

        // line 672
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 672, $this->source); })())) {
            // line 673
            if ((isset($context["render_required_asterisk"]) || array_key_exists("render_required_asterisk", $context) ? $context["render_required_asterisk"] : (function () { throw new Twig_Error_Runtime('Variable "render_required_asterisk" does not exist.', 673, $this->source); })())) {
                echo "&nbsp;<span class=\"asterisk\">*</span>";
            }
        } else {
            // line 675
            if ((isset($context["render_optional_text"]) || array_key_exists("render_optional_text", $context) ? $context["render_optional_text"] : (function () { throw new Twig_Error_Runtime('Variable "render_optional_text" does not exist.', 675, $this->source); })())) {
                echo "&nbsp;<span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(optional)", array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 675, $this->source); })())), "html", null, true);
                echo "</span>";
            }
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 679
    public function block_widget_addon($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_addon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_addon"));

        // line 680
        ob_start();
        // line 681
        $context["widget_addon_icon"] = ((twig_get_attribute($this->env, $this->source, ($context["widget_addon"] ?? null), "icon", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["widget_addon"]) || array_key_exists("widget_addon", $context) ? $context["widget_addon"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon" does not exist.', 681, $this->source); })()), "icon", array())) : (null));
        // line 682
        $context["widget_addon_icon_inverted"] = ((twig_get_attribute($this->env, $this->source, ($context["widget_addon"] ?? null), "icon_inverted", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, (isset($context["widget_addon"]) || array_key_exists("widget_addon", $context) ? $context["widget_addon"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon" does not exist.', 682, $this->source); })()), "icon_inverted", array())) : (false));
        // line 683
        echo "    <span class=\"input-group-addon\">";
        echo ((((twig_get_attribute($this->env, $this->source, ($context["widget_addon"] ?? null), "text", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["widget_addon"] ?? null), "text", array()), false)) : (false))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["widget_addon"]) || array_key_exists("widget_addon", $context) ? $context["widget_addon"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon" does not exist.', 683, $this->source); })()), "text", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 683, $this->source); })()))) : ($this->extensions['Mopa\Bundle\BootstrapBundle\Twig\IconExtension']->renderIcon($this->env, (isset($context["widget_addon_icon"]) || array_key_exists("widget_addon_icon", $context) ? $context["widget_addon_icon"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_icon" does not exist.', 683, $this->source); })()), (isset($context["widget_addon_icon_inverted"]) || array_key_exists("widget_addon_icon_inverted", $context) ? $context["widget_addon_icon_inverted"] : (function () { throw new Twig_Error_Runtime('Variable "widget_addon_icon_inverted" does not exist.', 683, $this->source); })()))));
        echo "</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 687
    public function block_widget_btns($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_btns"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_btns"));

        // line 688
        ob_start();
        // line 689
        echo "    <span class=\"input-group-btn\">
    ";
        // line 690
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widget_btns"]) || array_key_exists("widget_btns", $context) ? $context["widget_btns"] : (function () { throw new Twig_Error_Runtime('Variable "widget_btns" does not exist.', 690, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["widget_btn"]) {
            // line 691
            echo "        <button type=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["widget_btn"], "type", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["widget_btn"], "type", array()), "button")) : ("button")), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ("btn " . ((twig_get_attribute($this->env, $this->source, $context["widget_btn"], "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["widget_btn"], "class", array()), "btn-default")) : ("btn-default"))), "html", null, true);
            echo "\">
        ";
            // line 692
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["widget_btn"], "icon", array()))) {
                // line 693
                echo "                ";
                echo $this->extensions['Mopa\Bundle\BootstrapBundle\Twig\IconExtension']->renderIcon($this->env, twig_get_attribute($this->env, $this->source, $context["widget_btn"], "icon", array()), ((twig_get_attribute($this->env, $this->source, $context["widget_btn"], "icon_inverted", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["widget_btn"], "icon_inverted", array()), false)) : (false)));
                echo "
        ";
            }
            // line 695
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, $context["widget_btn"], "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["widget_btn"], "label", array()), "")) : ("")), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 695, $this->source); })())), "html", null, true);
            echo "</button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget_btn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 697
        echo "    </span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 703
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 704
        ob_start();
        // line 705
        if ((isset($context["error_delay"]) || array_key_exists("error_delay", $context) ? $context["error_delay"] : (function () { throw new Twig_Error_Runtime('Variable "error_delay" does not exist.', 705, $this->source); })())) {
            // line 706
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 706, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 707
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) == 1)) {
                    // line 708
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["child"], "set", array(0 => "errors", 1 => (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 708, $this->source); })())), "method")) {
                    }
                    // line 709
                    echo "        ";
                }
                // line 710
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 712
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 712, $this->source); })())) > 0)) {
                // line 713
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 713, $this->source); })()), "parent", array()) == null)) {
                    // line 714
                    echo "            ";
                    $context["__internal_8e49190b73f330c05f47376a7880dd77d9c0ee584dafef0ea26a795dc2c65900"] = $this->loadTemplate("@MopaBootstrap/flash.html.twig", "@MopaBootstrap/Form/fields.html.twig", 714);
                    // line 715
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 715, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 716
                        echo "                ";
                        echo $context["__internal_8e49190b73f330c05f47376a7880dd77d9c0ee584dafef0ea26a795dc2c65900"]->macro_flash("danger", twig_get_attribute($this->env, $this->source, $context["error"], "message", array()));
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 718
                    echo "        ";
                } else {
                    // line 719
                    echo "            <span class=\"help-";
                    $this->displayBlock("error_type", $context, $blocks);
                    echo "\">
            ";
                    // line 720
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 720, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 721
                        echo "                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", array()), "html", null, true);
                        echo " <br>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 723
                    echo "            </span>
        ";
                }
                // line 725
                echo "    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 732
    public function block_error_type($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "error_type"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "error_type"));

        // line 733
        ob_start();
        // line 734
        if ((isset($context["error_type"]) || array_key_exists("error_type", $context) ? $context["error_type"] : (function () { throw new Twig_Error_Runtime('Variable "error_type" does not exist.', 734, $this->source); })())) {
            // line 735
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["error_type"]) || array_key_exists("error_type", $context) ? $context["error_type"] : (function () { throw new Twig_Error_Runtime('Variable "error_type" does not exist.', 735, $this->source); })()), "html", null, true);
            echo "
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 736
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 736, $this->source); })()), "parent", array()) == null)) {
            // line 737
            echo "    ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array(), "any", false, true), "error_type", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array(), "any", false, true), "error_type", array()), "inline")) : ("inline")), "html", null, true);
            echo "
";
        } else {
            // line 739
            echo "    block
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 746
    public function block_widget_form_group_start($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_form_group_start"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_form_group_start"));

        // line 747
        if ((((array_key_exists("widget_form_group", $context)) ? (_twig_default_filter((isset($context["widget_form_group"]) || array_key_exists("widget_form_group", $context) ? $context["widget_form_group"] : (function () { throw new Twig_Error_Runtime('Variable "widget_form_group" does not exist.', 747, $this->source); })()), false)) : (false)) || (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 747, $this->source); })()), "parent", array()) == null))) {
            // line 748
            echo "    ";
            if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 748, $this->source); })()), "parent", array())) && twig_in_filter("collection", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 748, $this->source); })()), "parent", array()), "vars", array()), "block_prefixes", array())))) {
                echo " ";
                // line 749
                echo "        ";
                if ( !(isset($context["omit_collection_item"]) || array_key_exists("omit_collection_item", $context) ? $context["omit_collection_item"] : (function () { throw new Twig_Error_Runtime('Variable "omit_collection_item" does not exist.', 749, $this->source); })())) {
                    // line 750
                    echo "            ";
                    // line 751
                    echo "        \t";
                    $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) || array_key_exists("widget_form_group_attr", $context) ? $context["widget_form_group_attr"] : (function () { throw new Twig_Error_Runtime('Variable "widget_form_group_attr" does not exist.', 751, $this->source); })()), array("class" => "collection-item"));
                    // line 752
                    echo "        ";
                }
                // line 753
                echo "    ";
            }
            // line 754
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 754, $this->source); })())) > 0)) {
                // line 755
                echo "\t    ";
                // line 756
                echo "\t    ";
                $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) || array_key_exists("widget_form_group_attr", $context) ? $context["widget_form_group_attr"] : (function () { throw new Twig_Error_Runtime('Variable "widget_form_group_attr" does not exist.', 756, $this->source); })()), array("class" => (((twig_get_attribute($this->env, $this->source, ($context["widget_form_group_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["widget_form_group_attr"] ?? null), "class", array()), "")) : ("")) . " has-error")));
                // line 757
                echo "    ";
            }
            // line 758
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["help_widget_popover"]) || array_key_exists("help_widget_popover", $context) ? $context["help_widget_popover"] : (function () { throw new Twig_Error_Runtime('Variable "help_widget_popover" does not exist.', 758, $this->source); })()), "selector", array()) === null)) {
                // line 759
                echo "        ";
                $context["help_widget_popover"] = twig_array_merge((isset($context["help_widget_popover"]) || array_key_exists("help_widget_popover", $context) ? $context["help_widget_popover"] : (function () { throw new Twig_Error_Runtime('Variable "help_widget_popover" does not exist.', 759, $this->source); })()), array("selector" => ("#" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 759, $this->source); })()))));
                // line 760
                echo "    ";
            }
            // line 761
            echo "    <div";
            if ( !(twig_get_attribute($this->env, $this->source, (isset($context["help_widget_popover"]) || array_key_exists("help_widget_popover", $context) ? $context["help_widget_popover"] : (function () { throw new Twig_Error_Runtime('Variable "help_widget_popover" does not exist.', 761, $this->source); })()), "title", array()) === null)) {
                $this->displayBlock("help_widget_popover", $context, $blocks);
            }
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["widget_form_group_attr"]) || array_key_exists("widget_form_group_attr", $context) ? $context["widget_form_group_attr"] : (function () { throw new Twig_Error_Runtime('Variable "widget_form_group_attr" does not exist.', 761, $this->source); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 763
            echo "    ";
            if (((((twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 763, $this->source); })())) > 0) && (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 763, $this->source); })()), "parent", array()) != null)) && !twig_in_filter("field", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 764
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 764, $this->source); })()), "vars", array()), "block_prefixes", array()))) && !twig_in_filter("date", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 765
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 765, $this->source); })()), "vars", array()), "block_prefixes", array())))) {
                // line 766
                echo "        ";
                if ((isset($context["show_child_legend"]) || array_key_exists("show_child_legend", $context) ? $context["show_child_legend"] : (function () { throw new Twig_Error_Runtime('Variable "show_child_legend" does not exist.', 766, $this->source); })())) {
                    // line 767
                    echo "            ";
                    $this->displayBlock("form_legend", $context, $blocks);
                    echo "
        ";
                } elseif (                // line 768
(isset($context["label_render"]) || array_key_exists("label_render", $context) ? $context["label_render"] : (function () { throw new Twig_Error_Runtime('Variable "label_render" does not exist.', 768, $this->source); })())) {
                    // line 769
                    echo "            ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 769, $this->source); })()), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 769, $this->source); })()), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                } else {
                    // line 771
                    echo "        ";
                }
                // line 772
                echo "    ";
            } else {
                // line 773
                echo "        ";
                if ((isset($context["label_render"]) || array_key_exists("label_render", $context) ? $context["label_render"] : (function () { throw new Twig_Error_Runtime('Variable "label_render" does not exist.', 773, $this->source); })())) {
                    // line 774
                    echo "            ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 774, $this->source); })()), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 774, $this->source); })()), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                }
                // line 776
                echo "    ";
            }
        } else {
            // line 778
            echo "    ";
            if ((isset($context["label_render"]) || array_key_exists("label_render", $context) ? $context["label_render"] : (function () { throw new Twig_Error_Runtime('Variable "label_render" does not exist.', 778, $this->source); })())) {
                // line 779
                echo "        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 779, $this->source); })()), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 779, $this->source); })()), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
    ";
            }
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 784
    public function block_help_widget_popover($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_widget_popover"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help_widget_popover"));

        // line 785
        echo " ";
        ob_start();
        // line 786
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["help_widget_popover"]) || array_key_exists("help_widget_popover", $context) ? $context["help_widget_popover"] : (function () { throw new Twig_Error_Runtime('Variable "help_widget_popover" does not exist.', 786, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 787
            echo " data-";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["attrvalue"], array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new Twig_Error_Runtime('Variable "domain" does not exist.', 787, $this->source); })()), "messages")) : ("messages"))), "html", null, true);
            echo "\"
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 789
        echo " ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 792
    public function block_widget_form_group_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_form_group_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_form_group_end"));

        // line 793
        ob_start();
        // line 794
        if ((((array_key_exists("widget_form_group", $context)) ? (_twig_default_filter((isset($context["widget_form_group"]) || array_key_exists("widget_form_group", $context) ? $context["widget_form_group"] : (function () { throw new Twig_Error_Runtime('Variable "widget_form_group" does not exist.', 794, $this->source); })()), false)) : (false)) || (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 794, $this->source); })()), "parent", array()) == null))) {
            // line 795
            echo "    </div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MopaBootstrap/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  3062 => 795,  3060 => 794,  3058 => 793,  3049 => 792,  3038 => 789,  3027 => 787,  3022 => 786,  3019 => 785,  3010 => 784,  2995 => 779,  2992 => 778,  2988 => 776,  2982 => 774,  2979 => 773,  2976 => 772,  2973 => 771,  2967 => 769,  2965 => 768,  2960 => 767,  2957 => 766,  2955 => 765,  2954 => 764,  2952 => 763,  2932 => 761,  2929 => 760,  2926 => 759,  2923 => 758,  2920 => 757,  2917 => 756,  2915 => 755,  2912 => 754,  2909 => 753,  2906 => 752,  2903 => 751,  2901 => 750,  2898 => 749,  2894 => 748,  2892 => 747,  2883 => 746,  2870 => 739,  2864 => 737,  2862 => 736,  2857 => 735,  2855 => 734,  2853 => 733,  2844 => 732,  2831 => 725,  2827 => 723,  2818 => 721,  2814 => 720,  2809 => 719,  2806 => 718,  2797 => 716,  2792 => 715,  2789 => 714,  2786 => 713,  2783 => 712,  2768 => 710,  2765 => 709,  2761 => 708,  2758 => 707,  2740 => 706,  2738 => 705,  2736 => 704,  2727 => 703,  2715 => 697,  2706 => 695,  2700 => 693,  2698 => 692,  2691 => 691,  2687 => 690,  2684 => 689,  2682 => 688,  2673 => 687,  2659 => 683,  2657 => 682,  2655 => 681,  2653 => 680,  2644 => 679,  2629 => 675,  2624 => 673,  2622 => 672,  2613 => 671,  2601 => 667,  2595 => 665,  2593 => 664,  2587 => 662,  2585 => 661,  2565 => 660,  2556 => 659,  2543 => 654,  2540 => 653,  2536 => 651,  2533 => 650,  2527 => 648,  2524 => 647,  2521 => 646,  2518 => 645,  2512 => 643,  2509 => 642,  2503 => 640,  2500 => 639,  2498 => 638,  2489 => 637,  2474 => 632,  2471 => 631,  2468 => 630,  2465 => 629,  2463 => 628,  2454 => 627,  2439 => 622,  2436 => 621,  2430 => 619,  2427 => 618,  2420 => 617,  2418 => 616,  2409 => 615,  2394 => 608,  2392 => 607,  2386 => 605,  2384 => 604,  2375 => 603,  2361 => 596,  2355 => 594,  2353 => 593,  2350 => 592,  2346 => 590,  2344 => 589,  2341 => 588,  2335 => 586,  2332 => 585,  2330 => 584,  2327 => 583,  2317 => 582,  2314 => 581,  2308 => 579,  2306 => 578,  2303 => 577,  2300 => 576,  2297 => 575,  2295 => 574,  2289 => 572,  2286 => 571,  2275 => 570,  2273 => 569,  2268 => 568,  2265 => 567,  2263 => 566,  2254 => 565,  2239 => 561,  2233 => 559,  2229 => 558,  2224 => 557,  2218 => 554,  2215 => 553,  2212 => 552,  2210 => 551,  2201 => 550,  2188 => 547,  2179 => 546,  2165 => 542,  2161 => 541,  2156 => 540,  2147 => 539,  2134 => 536,  2131 => 535,  2122 => 534,  2110 => 530,  2104 => 528,  2101 => 527,  2095 => 525,  2093 => 524,  2085 => 523,  2082 => 522,  2073 => 521,  2060 => 518,  2057 => 517,  2048 => 516,  2036 => 512,  2030 => 510,  2027 => 509,  2021 => 507,  2019 => 506,  2013 => 505,  2010 => 504,  2001 => 503,  1988 => 500,  1979 => 499,  1966 => 494,  1962 => 492,  1960 => 491,  1957 => 490,  1951 => 488,  1948 => 487,  1942 => 485,  1939 => 484,  1933 => 482,  1930 => 481,  1924 => 479,  1922 => 478,  1918 => 477,  1916 => 476,  1900 => 475,  1897 => 474,  1891 => 472,  1888 => 471,  1885 => 470,  1882 => 469,  1879 => 468,  1876 => 467,  1873 => 466,  1870 => 465,  1867 => 464,  1863 => 461,  1860 => 458,  1859 => 457,  1858 => 456,  1856 => 455,  1853 => 454,  1850 => 453,  1848 => 452,  1846 => 451,  1837 => 450,  1819 => 446,  1815 => 443,  1812 => 440,  1811 => 439,  1810 => 438,  1808 => 437,  1805 => 436,  1803 => 435,  1794 => 434,  1778 => 426,  1775 => 425,  1772 => 424,  1770 => 423,  1763 => 422,  1757 => 420,  1754 => 419,  1751 => 418,  1749 => 417,  1747 => 416,  1738 => 415,  1724 => 411,  1721 => 410,  1719 => 409,  1710 => 408,  1696 => 404,  1693 => 403,  1691 => 402,  1682 => 401,  1667 => 395,  1663 => 394,  1659 => 393,  1655 => 392,  1650 => 391,  1647 => 390,  1644 => 389,  1638 => 387,  1632 => 384,  1627 => 383,  1624 => 382,  1621 => 381,  1618 => 380,  1616 => 379,  1610 => 377,  1608 => 376,  1600 => 375,  1577 => 374,  1574 => 373,  1571 => 372,  1568 => 371,  1566 => 370,  1557 => 369,  1544 => 364,  1538 => 362,  1535 => 361,  1529 => 359,  1527 => 358,  1522 => 357,  1519 => 356,  1516 => 355,  1509 => 352,  1503 => 349,  1498 => 348,  1495 => 347,  1492 => 346,  1489 => 345,  1487 => 344,  1481 => 342,  1479 => 341,  1473 => 340,  1452 => 339,  1449 => 338,  1446 => 337,  1444 => 336,  1442 => 335,  1433 => 334,  1419 => 328,  1417 => 327,  1416 => 326,  1415 => 325,  1414 => 324,  1411 => 323,  1408 => 322,  1401 => 319,  1395 => 316,  1390 => 315,  1387 => 314,  1384 => 313,  1381 => 312,  1379 => 311,  1373 => 309,  1371 => 308,  1365 => 307,  1344 => 306,  1341 => 305,  1338 => 304,  1336 => 303,  1334 => 302,  1325 => 301,  1314 => 298,  1310 => 296,  1307 => 295,  1304 => 294,  1300 => 292,  1294 => 290,  1288 => 288,  1285 => 287,  1282 => 286,  1279 => 285,  1276 => 284,  1273 => 283,  1271 => 282,  1258 => 281,  1251 => 279,  1237 => 278,  1234 => 277,  1231 => 276,  1228 => 275,  1225 => 274,  1222 => 273,  1219 => 272,  1216 => 271,  1213 => 270,  1209 => 268,  1206 => 267,  1202 => 266,  1200 => 265,  1197 => 264,  1193 => 261,  1190 => 258,  1189 => 257,  1188 => 256,  1186 => 255,  1183 => 254,  1180 => 253,  1171 => 252,  1160 => 249,  1156 => 247,  1153 => 246,  1149 => 244,  1146 => 243,  1140 => 242,  1136 => 240,  1134 => 239,  1129 => 238,  1123 => 236,  1117 => 234,  1114 => 233,  1111 => 232,  1108 => 231,  1106 => 230,  1102 => 229,  1096 => 228,  1081 => 227,  1078 => 226,  1075 => 225,  1072 => 224,  1069 => 223,  1066 => 222,  1063 => 221,  1060 => 220,  1057 => 219,  1050 => 217,  1046 => 216,  1043 => 215,  1038 => 214,  1034 => 212,  1031 => 211,  1028 => 210,  1024 => 208,  1021 => 207,  1018 => 206,  1015 => 205,  1012 => 204,  1009 => 203,  1006 => 202,  1003 => 201,  1000 => 200,  991 => 199,  977 => 195,  971 => 193,  968 => 192,  965 => 191,  956 => 190,  941 => 185,  938 => 184,  929 => 182,  924 => 181,  921 => 180,  906 => 178,  903 => 177,  900 => 176,  898 => 175,  895 => 174,  892 => 173,  889 => 172,  887 => 171,  884 => 170,  882 => 169,  881 => 168,  880 => 167,  879 => 166,  877 => 165,  874 => 164,  871 => 163,  868 => 162,  865 => 161,  863 => 160,  854 => 159,  841 => 155,  825 => 154,  822 => 153,  813 => 152,  801 => 148,  790 => 144,  786 => 143,  782 => 142,  773 => 141,  770 => 140,  766 => 139,  761 => 138,  759 => 137,  750 => 136,  737 => 132,  735 => 131,  726 => 130,  714 => 126,  709 => 125,  707 => 124,  702 => 122,  699 => 121,  695 => 119,  693 => 118,  688 => 116,  685 => 115,  678 => 112,  676 => 111,  673 => 110,  670 => 109,  665 => 108,  660 => 107,  657 => 106,  655 => 105,  646 => 104,  633 => 99,  627 => 97,  624 => 96,  621 => 95,  615 => 93,  612 => 92,  609 => 91,  606 => 90,  600 => 88,  594 => 86,  591 => 85,  588 => 84,  585 => 83,  582 => 82,  579 => 81,  576 => 80,  570 => 78,  567 => 77,  564 => 76,  558 => 74,  555 => 73,  553 => 72,  550 => 71,  547 => 70,  544 => 69,  542 => 68,  533 => 67,  521 => 63,  515 => 61,  512 => 60,  509 => 59,  507 => 58,  502 => 57,  499 => 56,  496 => 55,  490 => 53,  487 => 52,  485 => 51,  482 => 50,  479 => 49,  476 => 48,  467 => 47,  456 => 43,  450 => 40,  447 => 39,  440 => 35,  425 => 34,  422 => 33,  419 => 32,  416 => 31,  413 => 30,  404 => 29,  390 => 25,  384 => 23,  382 => 22,  375 => 21,  371 => 18,  368 => 15,  367 => 14,  366 => 13,  364 => 12,  361 => 11,  359 => 10,  350 => 9,  337 => 6,  334 => 5,  325 => 4,  315 => 792,  312 => 791,  310 => 784,  307 => 783,  305 => 746,  302 => 745,  299 => 743,  297 => 732,  294 => 731,  291 => 729,  289 => 703,  286 => 702,  283 => 700,  281 => 687,  278 => 686,  276 => 679,  273 => 678,  271 => 671,  268 => 670,  266 => 659,  263 => 658,  261 => 637,  258 => 636,  256 => 627,  253 => 626,  251 => 615,  248 => 614,  245 => 612,  243 => 603,  240 => 602,  237 => 600,  235 => 565,  232 => 564,  230 => 550,  227 => 549,  225 => 546,  222 => 544,  220 => 539,  217 => 538,  215 => 534,  212 => 533,  210 => 521,  207 => 520,  205 => 516,  202 => 515,  200 => 503,  197 => 502,  195 => 499,  192 => 498,  190 => 450,  187 => 449,  185 => 434,  182 => 433,  179 => 431,  177 => 415,  174 => 414,  172 => 408,  169 => 407,  167 => 401,  164 => 400,  162 => 369,  159 => 368,  157 => 334,  154 => 333,  152 => 301,  149 => 300,  147 => 252,  144 => 251,  142 => 199,  139 => 198,  137 => 190,  134 => 189,  132 => 159,  129 => 158,  127 => 152,  124 => 151,  122 => 136,  119 => 135,  117 => 130,  114 => 129,  112 => 104,  109 => 103,  107 => 67,  104 => 66,  102 => 47,  99 => 45,  97 => 29,  94 => 28,  92 => 9,  89 => 8,  87 => 4,  84 => 2,  18 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'form_div_layout.html.twig' %}

{# Buttons #}
{% block button_attributes %}
    {% set attr = attr|merge({class: 'btn ' ~ attr.class | default(\"btn-default\")}) %}
    {{ parent() }}
{% endblock button_attributes %}

{% block button_widget %}
{% spaceless %}
    {% if label is empty %}
        {%- if label_format is defined and label_format is not empty -%}
            {% set label = label_format|replace({
            '%name%': name,
            '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>
    {% if icon is not empty %}
            {{ mopa_bootstrap_icon(icon, icon_inverted|default(false)) }}
    {% endif %}
    {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{% endspaceless %}
{% endblock button_widget %}

{% block button_row %}
    {% spaceless %}
        {% if button_offset is defined and button_offset is not empty %}
            {% set attr = attr|merge({'for': id, 'class': button_offset }) %}
            <div class=\"form-group\">
                <div {% for attrname, attrvalue in attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %}>
                {{ form_widget(form) }}
                </div>
            </div>
        {% else %}
            <div class=\"form-group\">
                {{ form_widget(form) }}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock button_row %}

{# Widgets #}
{% block textarea_widget %}
    {% set type = type|default('text') %}
    {% if type != 'hidden' and ( widget_addon_prepend|default(null) is not null or widget_addon_append|default(null) is not null ) %}
    <div class=\"input-group\">
        {% if widget_addon_prepend|default(null) is not null %}
            {% set widget_addon = widget_addon_prepend %}
            {{ block('widget_addon') }}
        {% endif %}
    {% endif %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' ' ~ widget_form_control_class}) %}
    {{ parent() }}
    {% if type != 'hidden' and ( widget_addon_prepend|default(null) is not null or widget_addon_append|default(null) is not null ) %}
        {% if widget_addon_append|default(null) is not null %}
        {% set widget_addon = widget_addon_append %}
        {{ block('widget_addon') }}
        {% endif %}
    </div>
    {% endif %}
{% endblock textarea_widget %}

{% block form_widget_simple %}
{% spaceless %}
    {% set type = type|default('text') %}
    {% if type != 'hidden' and ( widget_addon_prepend|default(null) is not null or widget_addon_append|default(null) is not null or widget_btn_prepend|default(null) is not null or widget_btn_append|default(null) is not null ) %}
    <div class=\"input-group\">
        {% if widget_btn_prepend|default(null) is not null %}
            {% set widget_btns = widget_btn_prepend %}
            {{ block('widget_btns') }}
        {% endif %}
        {% if widget_addon_prepend|default(null) is not null %}
            {% set widget_addon = widget_addon_prepend %}
            {{ block('widget_addon') }}
        {% endif %}
    {% endif %}
    {% if not widget_remove_btn|default(null) %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' not-removable'}) %}
    {% endif %}
    {% set attr = attr|merge({'class': (attr.class|default('') ~ ' ' ~ widget_form_control_class)|trim}) %}
    {% if static_text is same as(true) %}
        <p class=\"form-control-static\">{{ value }}</p>
    {% else %}
        {{ parent() }}
    {% endif %}
    {% if type != 'hidden' and ( widget_addon_prepend|default(null) is not null or widget_addon_append|default(null) is not null or widget_btn_prepend|default(null) is not null or widget_btn_append|default(null) is not null ) %}
        {% if widget_addon_append|default(null) is not null %}
            {% set widget_addon = widget_addon_append %}
            {{ block('widget_addon') }}
        {% endif %}
        {% if widget_btn_append|default(null) is not null %}
            {% set widget_btns = widget_btn_append %}
            {{ block('widget_btns') }}
        {% endif %}
    </div>
    {% endif %}
{% endspaceless %}
{% endblock form_widget_simple %}

{% block form_widget_compound %}
{% spaceless %}
    {% if form.parent == null %}
        {% if render_fieldset %}<fieldset>{% endif %}
        {% if show_legend %}{{ block('form_legend') }}{% endif %}
    {% endif %}

    {% if form.vars.tabbed %}
        {{ form_tabs(form) }}
        <div class=\"tab-content\">
    {% endif %}

    {{ block('form_rows_visible') }}

    {% if form.vars.tabbed %}
        </div>
    {% endif %}

    {{ form_rest(form) }}

    {% if form.parent == null %}
        {% if render_fieldset %}</fieldset>{% endif %}
    {% endif %}
{% endspaceless %}
{% endblock form_widget_compound %}

{% block form_tabs %}
{% if form.vars.tabsView is defined %}
{{ form_widget(form.vars.tabsView) }}
{% endif %}
{% endblock %}

{% block tabs_widget %}
{% spaceless %}
<ul class=\"{{ form.vars.attr.class }}\">
    {% for tab in form.vars.tabs %}
        {% set class = ((tab.active ? 'active ' : '') ~ (tab.disabled ? 'disabled' : ''))|trim %}
        <li{% if class|trim is not empty %} class=\"{{ class }}\"{% endif %}>
            <a data-toggle=\"tab\" href=\"#{{ tab.id }}\">
                {% if tab.icon %}{{ mopa_bootstrap_icon(tab.icon) }}{% endif %}
                {{ tab.translation_domain is same as(false) ? tab.label : tab.label|trans({}, tab.translation_domain) }}
            </a>
        </li>
    {% endfor %}
</ul>
{% endspaceless %}
{% endblock %}

{% block form_tab %}
    {% set tab_attr = attr|merge({'class': ('tab-pane' ~ (form.vars.tab_active ? ' active' : '') ~ ' ' ~ attr.class|default(''))|trim, 'id': id}) %}
    <div{% for attrname, attrvalue in tab_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ block('form_widget') }}
    </div>
{% endblock %}

{% block collection_widget %}
{% spaceless %}
    {% if prototype is defined %}
        {% set prototype_markup = form_row(prototype) %}
        {% set data_prototype_name = form.vars.form.vars.prototype.vars.name|default('__name__') %}
        {% set data_prototype_label = form.vars.form.vars.prototype.vars.label|default('__name__label__') %}
        {% set widget_form_group_attr = widget_form_group_attr|merge({
            'data-prototype': prototype_markup,
            'data-prototype-name': data_prototype_name,
            'data-prototype-label': data_prototype_label
        })|merge(attr) %}
    {% endif %}
    {# Add row by default use attr.class to change#}
\t{% if 'collection' in form.vars.block_prefixes and attr.class is defined %}
\t\t{% set widget_form_group_attr = widget_form_group_attr|merge({'class': widget_form_group_attr.class|default('row') ~ ' ' ~ attr.class}) %}
\t{% endif %}
    {# collection item adds class {form_id}_form-group  too #}
    {% set widget_form_group_attr = widget_form_group_attr|merge({'id': 'collection' ~ id ~ '_form_group', 'class': widget_form_group_attr.class ~ ' collection-items ' ~ id ~ '_form_group'}) %}

    <div {% for attrname,attrvalue in widget_form_group_attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %}>
    {# Add initial prototype form #}
    {% if form.vars.value|length == 0 and prototype is defined %}
        {% for name in prototype_names %}
            {{ prototype_markup|replace({'__name__': name})|raw }}
        {% endfor %}
    {% endif %}
    {{ block('form_widget') }}
    </div>
{% endspaceless %}
{% endblock collection_widget %}

{% block choice_widget_collapsed %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' ' ~ widget_form_control_class}) %}
    {% if widget_type == 'inline-btn' %}
        {{ block('choice_widget_expanded') }}
    {% else %}
        {{ parent() }}
    {% endif %}
{% endblock choice_widget_collapsed %}

{% block choice_widget_expanded %}
    {% spaceless %}
        {% set tagName = 'label' %}
        {% set label_attr = label_attr|merge({'class': (label_attr.class|default(''))}) %}
        {% set label_attr = label_attr|merge({'class': (label_attr.class ~ ' ' ~ (widget_type != '' ? (multiple ? 'checkbox' : 'radio') ~ '-' ~ widget_type : ''))}) %}
        {% if expanded %}
            {% set attr = attr|merge({'class': attr.class|default('') ~ ' ' ~ horizontal_input_wrapper_class}) %}
        {% endif %}
        {% if layout is same as(false) %}
            <div>
        {% endif %}
        {% if widget_type == 'inline-btn' %}
            {% set tagName = 'button' %}
            <div class=\"btn-group\" data-toggle=\"buttons\">
        {% endif %}
        {% for child in form %}
            {% if widget_type not in ['inline', 'inline-btn'] %}
                <div class=\"{{ multiple ? 'checkbox' : 'radio' }}\"
                {%- if widget_type == 'inline-btn' %} class=\"btn-group\" data-toggle=\"buttons\"{% endif %}>
            {% endif %}
            {% if widget_type == 'inline-btn' %}
                {% set label_attr = label_attr|default({})|merge({'class': 'btn ' ~ label_attr.class|default('')}) %}
            {% endif %}
            {% if child.vars.checked and widget_type == 'inline-btn' %}
                {% set label_attr_copy = label_attr|default({})|merge({'class': 'active ' ~ label_attr.class|default('')}) %}
            {% else %}
                {% set label_attr_copy = label_attr|default({}) %}
            {% endif %}
            <{{ tagName }}{% for attrname, attrvalue in label_attr_copy %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}
            {%- if disabled %} disabled=\"disabled\"{% endif -%}>
            {{ form_widget(child, {'horizontal_label_class': horizontal_label_class, 'horizontal_input_wrapper_class': horizontal_input_wrapper_class, 'attr': {'class': attr.widget_class|default('') }}) }}
            {% if choice_translation_domain is not defined %}
                {% set choice_translation_domain = translation_domain %}
            {% endif %}
            {% if widget_type == 'inline-btn' or widget_checkbox_label == 'widget'%}
                {{ choice_translation_domain is same as(false) ? child.vars.label|raw : child.vars.label|trans({}, choice_translation_domain)|raw }}
            {% else %}
                {{ choice_translation_domain is same as(false) ? child.vars.label : child.vars.label|trans({}, choice_translation_domain) }}
            {% endif %}
            </{{ tagName }}>
            {% if widget_type not in ['inline', 'inline-btn'] %}
                </div>
            {% endif %}
        {% endfor %}
        {% if widget_type == 'inline-btn' %}
            </div>
        {% endif %}
        {% if layout is same as(false) %}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock choice_widget_expanded %}

{% block checkbox_widget %}
    {% spaceless %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is defined and label_format is not empty -%}
                {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
            <div
            {%- if widget_type == 'inline-btn' %} class=\"btn-group\" data-toggle=\"buttons\"
            {%- else %} class=\"checkbox\"
            {%- endif %}>
        {% endif %}
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes and label_render %}
            {% if widget_type == 'inline-btn' %}
                {% set default_class = 'btn btn-primary' %}
                {% set label_attr = attr|default({'class': default_class}) %}
                {% if checked %}
                    {% set label_attr = label_attr|merge({'class': 'active ' ~ attr.class|default(default_class)}) %}
                {% endif %}
            {% endif %}
            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}
            {%- if layout == 'inline' %} class=\"checkbox-inline\"{% endif %}>
        {% endif %}
        <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %}/>
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
            {% if label_render %}
                {% if widget_checkbox_label in ['both', 'widget'] %}
                    {% if choice_translation_domain is not defined %}
                        {% set choice_translation_domain = translation_domain %}
                    {% endif %}
                    {{ choice_translation_domain is same as(false) ? label|raw : label|trans({}, choice_translation_domain)|raw }}
                {% else %}
                    {{ block('form_help') }}
                {% endif %}
                </label>
            {% endif %}
        {% endif %}
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock checkbox_widget %}

{% block date_widget %}
{% spaceless %}
{% if widget == 'single_text' %}
    {% if datepicker is defined %}
        {% set widget_addon_icon = widget_addon_append.icon is defined ? widget_addon_append.icon : 'calendar'  %}
        <div {% if datepicker.attr is defined %}{%- for attrname, attrvalue in datepicker.attr %}{{ attrname }}=\"{{ attrvalue }}\" {% endfor %}{% endif %} data-provider=\"datepicker\" class=\"input-group date\" data-date=\"{{ value }}\" data-link-field=\"{{ id }}\" data-link-format=\"yyyy-mm-dd\">
            <input type=\"hidden\" value=\"{{ value }}\" {{ block('widget_attributes') }}>
            {% if widget_reset_icon is defined and widget_reset_icon == true %}
                <span class=\"input-group-addon\">{{ mopa_bootstrap_icon('remove') }}</span>
            {% endif %}
            {# Clear the id & name attributes so that they don't override the hidden fields values #}
            {% set id = id ~ '_mopa_picker_display' %}
            {% set full_name = null %}
            {% set type = 'text' %}
            {{ block('form_widget_simple') }}
            <span class=\"input-group-addon\">{{ mopa_bootstrap_icon(widget_addon_icon) }}</span>
        </div>
    {% else %}
        {{ block('form_widget_simple') }}
    {% endif %}
{% else %}
    {% set attr = attr|merge({'class': attr.class|default('inline')}) %}
    \t<div class=\"row\">
        {{ date_pattern|replace({
            '{{ year }}':  '<div class=\"'~date_wrapper_class['year']|default('col-xs-4')~'\">'~form_widget(form.year, {'attr': {'class': attr.widget_class|default('') ~ ''}})~'</div>',
            '{{ month }}': '<div class=\"'~date_wrapper_class['month']|default('col-xs-4')~'\">'~form_widget(form.month, {'attr': {'class': attr.widget_class|default('') ~ ''}})~'</div>',
            '{{ day }}':   '<div class=\"'~date_wrapper_class['day']|default('col-xs-4')~'\">'~form_widget(form.day, {'attr': {'class': attr.widget_class|default('') ~ ''}})~'</div>',
        })|raw }}
        </div>
{% endif %}
{% endspaceless %}
{% endblock date_widget %}

{% block time_widget %}
{% spaceless %}
{% if widget == 'single_text' %}
    {% if timepicker is defined %}
        {% set widget_addon_icon = widget_addon_append.icon is defined ? widget_addon_append.icon : 'time'  %}
        <div {% if timepicker.attr is defined %}{%- for attrname, attrvalue in timepicker.attr %}{{ attrname }}=\"{{ attrvalue }}\" {% endfor %}{% endif %} data-provider=\"timepicker\" class=\"input-group date\" data-date=\"{{ value }}\" data-link-field=\"{{ id }}\" data-link-format=\"hh:ii\">
            <input type=\"hidden\" value=\"{{ value }}\" {{ block('widget_attributes') }}>
            {% if widget_reset_icon is defined and widget_reset_icon == true %}
                <span class=\"input-group-addon\">{{ mopa_bootstrap_icon('remove') }}</span>
            {% endif %}
            {# Clear the id & name attributes so that they don't override the hidden fields values #}
            {% set id = id ~ '_mopa_picker_display' %}
            {% set full_name = null %}
            {% set type = 'text' %}
            {{ block('form_widget_simple') }}
            <span class=\"input-group-addon\">{{ mopa_bootstrap_icon(widget_addon_icon) }}</span>
        </div>
    {% else %}
        {{ block('form_widget_simple') }}
    {% endif %}
{% else %}
    {% set attr = attr|merge({'class': attr.class|default('')}) %}
    {% spaceless %}
    {{ form_widget(form.hour, { 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-2')}) }}
    {% if with_minutes %}
        {{ form_widget(form.minute, { 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-2')}) }}
    {% endif %}
    {% if with_seconds %}
        :{{ form_widget(form.second, { 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-2') }) }}
    {% endif %}
    {% endspaceless %}
{% endif %}
{% endspaceless %}
{% endblock time_widget %}

{% block datetime_widget %}
{% spaceless %}
    {% if widget == 'single_text' %}
        {% if datetimepicker is defined %}
            {% set widget_addon_icon = widget_addon_append.icon is defined ? widget_addon_append.icon : 'th'  %}
            <div {% if datetimepicker.attr is defined %}{%- for attrname, attrvalue in datetimepicker.attr %}{{ attrname }}=\"{{ attrvalue }}\" {% endfor %}{% endif %} data-provider=\"datetimepicker\" class=\"input-group date\" data-date=\"{% if value %}{{ value|date('Y-m-d H:i') }}{% endif %}\" data-link-field=\"{{ id }}\" data-link-format=\"yyyy-mm-dd hh:ii\">
                <input type=\"hidden\" value=\"{% if value %}{{ value|date('Y-m-d H:i') }}{% endif %}\" {{ block('widget_attributes') }}>
                {% if widget_reset_icon is defined and widget_reset_icon == true %}
                    <span class=\"input-group-addon\">{{ mopa_bootstrap_icon('remove') }}</span>
                {% endif %}
                {# Clear the id & name attributes so that they don't override the hidden fields values #}
                {% set id = id ~ '_mopa_picker_display' %}
                {% set full_name = null %}
                {% set type = 'text' %}
                {{ block('form_widget_simple') }}
                <span class=\"input-group-addon\">{{ mopa_bootstrap_icon(widget_addon_icon) }}</span>
            </div>
        {% else %}
            {{ block('form_widget_simple') }}
        {% endif %}
    {% else %}
            {% set attr = attr|merge({'class': attr.class|default('')}) %}
            <div {{ block('widget_container_attributes') }}>
                {{ form_errors(form.date) }}
                {{ form_errors(form.time) }}
                {{ form_widget(form.date, {'attr': {'class': attr.widget_class|default('')}, 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-3')}) }}
                {{ form_widget(form.time, {'attr': {'class': attr.widget_class|default('')}, 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-2')}) }}
            </div>
    {% endif %}
{% endspaceless %}
{% endblock datetime_widget %}

{% block percent_widget %}
{% spaceless %}
    {% set widget_addon_append = widget_addon_append|merge({'text': widget_addon_append.text|default('%')}) %}
    {{ block('form_widget_simple') }}
{% endspaceless %}
{% endblock percent_widget %}

{% block money_widget %}
{% spaceless %}
    {% set widget_addon_prepend = (widget_addon_prepend != false or widget_addon_prepend == null) and money_pattern != '{{ widget }}' ? {'text': money_pattern|replace({ '{{ widget }}': ''})|trim} : widget_addon_prepend|default(null) %}
    {{ block('form_widget_simple') }}
{% endspaceless %}
{% endblock money_widget %}

{% block file_widget %}
{% spaceless %}
{% set type = type|default('file') %}
    {% if widget_addon_prepend|default(null) is not null %}
        {% set widget_addon = widget_addon_prepend %}
        {{ block('widget_addon') }}
    {% endif %}
<input type=\"{{ type }}\" {{ block('widget_attributes') }}/>
{% if type != 'hidden' and widget_addon.type|default(null) is not null %}
    {% if widget_addon_append|default(null) is not null %}
        {% set widget_addon = widget_addon_append %}
        {{ block('widget_addon') }}
    {% endif %}
{% endif %}
{% endspaceless %}
{% endblock file_widget %}

{# Labels #}

{% block form_legend %}
{% spaceless %}
    {% if label is empty %}
        {%- if label_format is defined and label_format is not empty -%}
            {% set label = label_format|replace({
            '%name%': name,
            '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <{{ legend_tag }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ legend_tag }}>
{% endspaceless %}
{% endblock form_legend %}

{% block form_label %}
{% if 'checkbox' not in block_prefixes or widget_checkbox_label in ['label', 'both'] %}
{% spaceless %}
    {% if label is not same as(false) %}
        {% if label is empty %}
            {%- if label_format is defined and label_format is not empty -%}
                {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        {% if not compound %}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {% endif %}
        {% set label_attr_class = '' %}
        {% if layout == 'horizontal' %}
            {% set label_attr_class = 'control-label ' ~ label_attr_class ~ horizontal_label_class %}
        {% endif %}
        {% if horizontal_label_div_class %}
        <div class=\"{{ horizontal_label_div_class }}\">
        {% endif %}
        {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ \" \" ~ label_attr_class ~ (required ? ' required' : ' optional'))|trim }) %}
        <label{% for attrname,attrvalue in label_attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %}>
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
        {{- block('label_asterisk') }}
        {% if 'collection' in form.vars.block_prefixes and widget_add_btn|default(null) and form.vars.allow_add == true %}
            &nbsp;{{ block('form_widget_add_btn') }}
        {% endif %}
        {% if help_label %}
            {{ block('help_label') }}
        {% endif %}
        {% if help_label_tooltip.title %}
            {{ block('help_label_tooltip') }}
        {% endif %}
        {% if help_label_popover.title %}
            {{ block('help_label_popover') }}
        {% endif %}
        </label>
        {% if horizontal_label_div_class %}
        </div>
        {% endif %}
    {% endif %}
{% endspaceless %}
{% endif %}
{% endblock form_label %}

{% block help_label %}
    <span class=\"help-block\">{{ help_label|trans({}, translation_domain) }}</span>
{% endblock help_label %}

{% block help_label_tooltip %}
    <span class=\"help-block\">
        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"{{ help_label_tooltip.placement}}\" data-title=\"{{ help_label_tooltip.title|trans({}, translation_domain) }}\">
            {% if help_label_tooltip.icon is not same as(false) %}
                {{ mopa_bootstrap_icon(help_label_tooltip.icon) }}
            {% endif %}
            {% if help_label_tooltip.text is not same as(null) %}
                {{ help_label_tooltip.text }}
            {% endif %}
        </a>
    </span>
{% endblock help_label_tooltip %}

{% block help_block_tooltip %}
    {% set help_label_tooltip = help_block_tooltip %}
    {{ block('help_label_tooltip') }}
{% endblock help_block_tooltip %}

{% block help_label_popover %}
    <span class=\"help-block\">
        <a href=\"#\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"{{ help_label_popover.placement}}\" data-title=\"{{ help_label_popover.title|trans({}, translation_domain) }}\" data-content=\"{{ help_label_popover.content|trans({}, translation_domain) }}\" data-html=\"true\">
            {% if help_label_popover.icon is not same as(false) %}
                {{ mopa_bootstrap_icon(help_label_popover.icon) }}
            {% endif %}
            {% if help_label_popover.text is not same as(null) %}
                {{ help_label_popover.text|raw }}
            {% endif %}
        </a>
    </span>
{% endblock help_label_popover %}

{% block help_block_popover %}
    {% set help_label_popover = help_block_popover %}
    {{ block('help_label_popover') }}
{% endblock help_block_popover %}

{% block form_actions_widget %}
    {% for button in form.children %}
        {{ form_widget(button) }}&nbsp; {# this needs to be here due to https://github.com/twbs/bootstrap/issues/3245 #}
    {% endfor  %}
{% endblock %}

{# Rows #}
{% block form_actions_row %}
    {{ block('button_row')  }}
{% endblock %}

{% block form_rows_visible %}
{% spaceless %}
     {% if errors|length > 0 %}
        <div class=\"symfony-form-errors\">
            {{ form_errors(form) }}
        </div>
    {% endif %}
    {% for child in form %}
        {% if 'hidden' not in child.vars.block_prefixes %} {# smbdy: why do we not add the hiddens of childs? 131024 phiamo: i think form rest should do this !? it was afaik removed because it cause side effekts #}
            {{ form_row(child) }}
        {% endif %}
    {% endfor %}
{% endspaceless %}
{% endblock form_rows_visible %}

{% block form_row %}
{% spaceless %}
    {% if 'tab' in form.vars.block_prefixes %}
        {{ block('form_tab') }}
    {% elseif embed_form is same as(true) %}
        {% if widget_prefix is not empty %}{{ widget_prefix|trans({}, translation_domain)|raw }}{% endif %} {{ form_widget(form, _context) }} {% if widget_suffix is not empty %}{{ widget_suffix|trans({}, translation_domain)|raw }}{% endif %}
    {% else %}
        {{ block('widget_form_group_start') }}

        {% if layout == 'horizontal' and not label_render %}
            {% set horizontal_input_wrapper_class = horizontal_input_wrapper_class ~ ' ' ~ horizontal_label_offset_class %}
        {% endif %}

        {% if horizontal %}
        <div class=\"{{ horizontal_input_wrapper_class }}\">
        {% endif %}

        {% if widget_prefix is not empty %}{{ widget_prefix|trans({}, translation_domain)|raw }}{% endif %} {{ form_widget(form, _context) }} {% if widget_suffix is not empty %}{{ widget_suffix|trans({}, translation_domain)|raw }}{% endif %}

        {% set type = type|default('text') %}
        {% if type != 'hidden' %}
        {{ block('form_message') }}
        {% endif %}

        {% if horizontal %}
        </div>
        {% endif %}

        {% if form.parent is not null and 'collection' in form.parent.vars.block_prefixes and widget_remove_btn|default(null) and form.parent.vars.allow_delete|default(false) %}
            {{ block('form_widget_remove_btn') }}
        {% endif -%}
        {{ block('widget_form_group_end') }}
    {% endif %}
{% endspaceless %}
{% endblock form_row %}

{# Support #}

{% block form_message %}
{% spaceless %}
    {{ form_errors(form) }}

    {% if ('checkbox' not in block_prefixes or widget_checkbox_label != 'label') and help_block %}
        {{ block('form_help') }}
    {% endif %}
{% endspaceless %}
{% endblock form_message %}

{# Help #}

{% block form_help %}
{% spaceless %}
    {% if help_block %}<p class=\"help-block\">{{ help_block|trans({}, translation_domain)|raw }}</p>{%endif %}
    {% if help_block_tooltip.title %}
        &nbsp;{{ block('help_block_tooltip') }}
    {% endif %}
    {% if help_block_popover.title %}
        &nbsp;{{ block('help_block_popover') }}
    {% endif %}
{% endspaceless %}
{% endblock form_help %}

{% block form_widget_add_btn %}
{% spaceless %}
    {% if widget_add_btn|default(null) %}
        {% set button_type = 'add' %}
        {% set button_values = widget_add_btn %}
        {{ block('collection_button') }}
    {% endif %}
{% endspaceless %}
{% endblock form_widget_add_btn %}

{% block form_widget_remove_btn %}
{% spaceless %}
    {% if widget_remove_btn.wrapper_div is defined and widget_remove_btn.wrapper_div is not same as(false) %}
        <div class=\"{{ widget_remove_btn.wrapper_div.class }}\">
    {% endif %}
    {% if widget_remove_btn.horizontal_wrapper_div is defined and widget_remove_btn.horizontal_wrapper_div is not same as(false) %}
        <div class=\"{{ widget_remove_btn.horizontal_wrapper_div.class }}\">
    {% endif %}
    {% if widget_remove_btn|default(null) %}
    {% set button_type = 'remove' %}
    {% set button_values = widget_remove_btn %}
    {{ block('collection_button') }}
    {% endif %}
    {% if widget_remove_btn.horizontal_wrapper_div is defined and widget_remove_btn.horizontal_wrapper_div is not same as(false) %}
        </div>
    {% endif %}
    {% if widget_remove_btn.wrapper_div is defined and widget_remove_btn.wrapper_div is not same as(false) %}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock form_widget_remove_btn %}

{% block collection_button %}
<a {% for attrname,attrvalue in button_values.attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %} data-collection-{{ button_type }}-btn=\".{{ form.vars['id'] }}_form_group\">
{% if button_values.icon is not null %}
    {{ mopa_bootstrap_icon(button_values.icon, button_values.icon_inverted|default(false)) }}
{% endif %}
{% if button_values.label is defined %}
    {{ button_values.label|trans({}, button_values.translation_domain|default(translation_domain)) }}
{% endif %}
</a>

{% endblock collection_button %}

{% block label_asterisk %}
{% if required %}
    {%- if render_required_asterisk %}&nbsp;<span class=\"asterisk\">*</span>{% endif %}
{% else %}
    {%- if render_optional_text %}&nbsp;<span>{{ \"(optional)\"|trans({}, translation_domain) }}</span>{% endif %}
{% endif %}
{% endblock label_asterisk %}

{% block widget_addon %}
{% spaceless %}
{% set widget_addon_icon = widget_addon.icon is defined ? widget_addon.icon : null  %}
{% set widget_addon_icon_inverted = widget_addon.icon_inverted is defined ? widget_addon.icon_inverted : false  %}
    <span class=\"input-group-addon\">{{ (widget_addon.text|default(false) ? widget_addon.text|trans({}, translation_domain)|raw : mopa_bootstrap_icon(widget_addon_icon, widget_addon_icon_inverted)) }}</span>
{% endspaceless %}
{% endblock widget_addon %}

{% block widget_btns %}
{% spaceless %}
    <span class=\"input-group-btn\">
    {% for widget_btn in widget_btns %}
        <button type=\"{{ widget_btn.type | default('button') }}\" class=\"{{ 'btn ' ~ widget_btn.class | default('btn-default') }}\">
        {% if widget_btn.icon is not empty %}
                {{ mopa_bootstrap_icon(widget_btn.icon, widget_btn.icon_inverted | default(false)) }}
        {% endif %}
        {{ widget_btn.label | default(\"\") | trans({}, translation_domain) }}</button>
    {% endfor %}
    </span>
{% endspaceless %}
{% endblock widget_btns %}

{# Errors #}

{% block form_errors %}
{% spaceless %}
{% if error_delay %}
    {% for child in form %}
        {% if loop.index == 1 %}
            {% if child.set('errors', errors) %}{% endif %}
        {% endif %}
    {% endfor %}
{% else %}
    {% if errors|length > 0 %}
        {% if form.parent == null %}
            {% from '@MopaBootstrap/flash.html.twig' import flash %}
            {% for error in errors %}
                {{ flash('danger', error.message) }}
            {% endfor %}
        {% else %}
            <span class=\"help-{{ block('error_type') }}\">
            {% for error in errors %}
                {{ error.message }} <br>
            {% endfor %}
            </span>
        {% endif %}
    {% endif %}
{% endif %}
{% endspaceless %}
{% endblock form_errors %}

{# used to determine which type of error #}

{% block error_type %}
{% spaceless %}
{% if error_type %}
    {{ error_type }}
{% elseif form.parent == null %}
    {{ form.vars.error_type | default('inline') }}
{% else %}
    block
{% endif %}
{% endspaceless %}
{% endblock error_type %}

{# widget helper blocks #}

{% block widget_form_group_start %}
{% if widget_form_group|default(false) or form.parent == null %}
    {% if form.parent is not null and 'collection' in form.parent.vars.block_prefixes %} {# i am a collection child #}
        {% if not omit_collection_item %}
            {# collection item wrapper doesnt need form-group it gets added to childs anyways #}
        \t{% set widget_form_group_attr = widget_form_group_attr|merge({class: 'collection-item'}) %}
        {% endif %}
    {% endif %}
    {% if errors|length > 0 %}
\t    {# Add Error Class to Widget Wrapper#}
\t    {% set widget_form_group_attr = widget_form_group_attr|merge({'class': widget_form_group_attr.class|default('') ~ ' has-error'}) %}
    {% endif %}
    {% if help_widget_popover.selector is same as(null) %}
        {% set help_widget_popover = help_widget_popover|merge({'selector': '#' ~ id }) %}
    {% endif %}
    <div{% if help_widget_popover.title is not same as(null) %}{{ block('help_widget_popover') }}{% endif %} {% for attrname,attrvalue in widget_form_group_attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %}>
    {# a form item containing the field in block_prefixes is a near subform or a field directly #}
    {% if (form|length > 0 and form.parent != null)
        and 'field' not in form.vars.block_prefixes
        and 'date' not in form.vars.block_prefixes %}
        {% if show_child_legend%}
            {{ block('form_legend') }}
        {% elseif label_render %}
            {{ form_label(form, label|default(null)) }}
        {% else %}
        {% endif %}
    {% else %}
        {% if label_render %}
            {{ form_label(form, label|default(null)) }}
        {% endif %}
    {% endif %}
{% else %}
    {% if label_render %}
        {{ form_label(form, label|default(null)) }}
    {% endif %}
{% endif %}
{% endblock widget_form_group_start %}

{% block help_widget_popover %}
 {% spaceless %}
 {% for attrname,attrvalue in help_widget_popover %}
 data-{{attrname}}=\"{{attrvalue|trans({}, domain|default('messages'))}}\"
 {% endfor %}
 {% endspaceless %}
{% endblock help_widget_popover %}

{% block widget_form_group_end %}
{% spaceless %}
{% if widget_form_group|default(false) or form.parent == null %}
    </div>
{% endif %}
{% endspaceless %}
{% endblock widget_form_group_end %}
", "@MopaBootstrap/Form/fields.html.twig", "D:\\ESTUDIO\\siunic_etecsa\\siunic_etecsa\\vendor\\mopa\\bootstrap-bundle\\Mopa\\Bundle\\BootstrapBundle\\Resources\\views\\Form\\fields.html.twig");
    }
}
