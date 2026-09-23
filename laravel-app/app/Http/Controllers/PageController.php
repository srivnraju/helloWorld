<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home', [
            'stats' => [
                ['label' => 'Pages wired up', 'value' => '4'],
                ['label' => 'Colour tokens', 'value' => '17'],
                ['label' => 'Themes', 'value' => 'Light & dark'],
            ],
            'highlights' => [
                [
                    'icon' => '🎨',
                    'title' => 'Consistent palette',
                    'description' => 'Brand, accent and ink scales defined as CSS variables and reused across components.',
                ],
                [
                    'icon' => '🧭',
                    'title' => 'Real navigation',
                    'description' => 'A sticky menu with active-page highlighting and a collapsible mobile drawer.',
                ],
                [
                    'icon' => '🌗',
                    'title' => 'Dark mode',
                    'description' => 'Remembers your choice and applies it before first paint, so there is no flash.',
                ],
            ],
        ]);
    }

    public function features(): View
    {
        return view('pages.features', [
            'features' => [
                [
                    'icon' => '🎨',
                    'title' => 'Token-driven colour',
                    'description' => 'Change one variable to restyle buttons, links, cards and gradients at once.',
                ],
                [
                    'icon' => '🧭',
                    'title' => 'Sticky navigation',
                    'description' => 'Active links are highlighted automatically from the current route name.',
                ],
                [
                    'icon' => '📱',
                    'title' => 'Responsive by default',
                    'description' => 'Layouts collapse cleanly from wide desktop grids down to single-column mobile.',
                ],
                [
                    'icon' => '🌗',
                    'title' => 'Persistent theme',
                    'description' => 'Light and dark themes share the same tokens and contrast targets.',
                ],
                [
                    'icon' => '♿',
                    'title' => 'Accessible details',
                    'description' => 'Skip link, focus rings, aria states on toggles and labelled form fields.',
                ],
                [
                    'icon' => '✅',
                    'title' => 'Validated forms',
                    'description' => 'The contact form ships with server-side validation and inline error messages.',
                ],
            ],
            'palette' => [
                ['name' => 'brand-500', 'hex' => '#3765f6', 'class' => 'bg-brand-500'],
                ['name' => 'brand-600', 'hex' => '#2145e3', 'class' => 'bg-brand-600'],
                ['name' => 'brand-700', 'hex' => '#1b34b8', 'class' => 'bg-brand-700'],
                ['name' => 'accent-500', 'hex' => '#14b8a6', 'class' => 'bg-accent-500'],
                ['name' => 'ink-800', 'hex' => '#1c2030', 'class' => 'bg-ink-800'],
                ['name' => 'ink-50', 'hex' => '#f7f8fa', 'class' => 'bg-ink-50'],
            ],
        ]);
    }

    public function about(): View
    {
        return view('pages.about', [
            'principles' => [
                [
                    'title' => 'One source of truth for colour',
                    'description' => 'Every shade comes from the theme block, so nothing drifts out of sync.',
                ],
                [
                    'title' => 'Navigation that scales',
                    'description' => 'Menu items are data, so adding a page means adding one array entry.',
                ],
                [
                    'title' => 'Contrast in both themes',
                    'description' => 'Text, borders and surfaces are tuned separately for light and dark.',
                ],
                [
                    'title' => 'Progressive enhancement',
                    'description' => 'Pages render fully without JavaScript; the theme and menu toggles enhance them.',
                ],
            ],
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact');
    }
}
