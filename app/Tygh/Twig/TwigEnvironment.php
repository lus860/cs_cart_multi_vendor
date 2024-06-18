<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

namespace Tygh\Twig;

/**
 * The class that extends the standard Twig class and adds the ability to render a template from a string.
 *
 * @package Tygh\Twig
 */
class TwigEnvironment extends \Twig\Environment
{
    /**
     * Renders a template as string.
     *
     * @param string                                                                                          $string  The template string
     * @param array<string, array|\Tygh\Template\Collection|\Tygh\Template\ITemplate|\Tygh\Template\IContext> $context An array of parameters
     *                                                                                                                      to pass to the template
     *
     * @return string The rendered template
     *
     * @throws \Twig\Error\LoaderError When the template cannot be found.
     * @throws \Twig\Error\SyntaxError When an error occurred during compilation.
     */
    public function renderString($string, array $context = array())
    {
        $template = $this->createTemplate($string);
        return $template->render($context);
    }
}