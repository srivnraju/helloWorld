<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home', [
            'stats' => [
                ['label' => 'Learning approach', 'value' => 'Multi-disciplinary'],
                ['label' => 'Student experience', 'value' => 'Personal & practical'],
                ['label' => 'Future focus', 'value' => 'Confident & adaptable'],
            ],
            'highlights' => [
                [
                    'icon' => '✦',
                    'title' => 'Academic excellence',
                    'description' => 'Thoughtful teaching, strong foundations and the freedom to make connections across disciplines.',
                ],
                [
                    'icon' => '◎',
                    'title' => 'Vibrant campus life',
                    'description' => 'A welcoming culture where interests, friendships and leadership grow beyond the classroom.',
                ],
                [
                    'icon' => '↗',
                    'title' => 'Future-ready learning',
                    'description' => 'Practical experiences that strengthen adaptability, communication and creative confidence.',
                ],
            ],
        ]);
    }

    public function features(): View
    {
        return view('pages.features', [
            'features' => [
                [
                    'icon' => 'Σ',
                    'title' => 'Sciences & technology',
                    'description' => 'Investigate, experiment and solve meaningful problems through analytical and applied learning.',
                ],
                [
                    'icon' => '◇',
                    'title' => 'Business & management',
                    'description' => 'Build strategic perspective, entrepreneurial thinking and confidence in collaborative leadership.',
                ],
                [
                    'icon' => 'Aa',
                    'title' => 'Humanities & communication',
                    'description' => 'Understand people, culture and ideas while developing a clear and compelling voice.',
                ],
                [
                    'icon' => '✎',
                    'title' => 'Design & creativity',
                    'description' => 'Turn imagination into purposeful work through critique, craft and interdisciplinary practice.',
                ],
                [
                    'icon' => '⚖',
                    'title' => 'Law & society',
                    'description' => 'Explore institutions, ethics and justice through rigorous reasoning and real-world context.',
                ],
                [
                    'icon' => '＋',
                    'title' => 'Health & wellbeing',
                    'description' => 'Connect scientific understanding with empathy, responsibility and human-centred practice.',
                ],
            ],
        ]);
    }

    public function about(): View
    {
        return view('pages.about', [
            'principles' => [
                [
                    'title' => 'Curiosity before certainty',
                    'description' => 'We encourage learners to ask better questions, explore widely and stay open to new perspectives.',
                ],
                [
                    'title' => 'Excellence with empathy',
                    'description' => 'High expectations are paired with support, respect and a genuine understanding of each learner.',
                ],
                [
                    'title' => 'Learning through action',
                    'description' => 'Ideas become meaningful when learners can test them, apply them and reflect on the outcome.',
                ],
                [
                    'title' => 'Leadership with purpose',
                    'description' => 'We help students develop the judgement and confidence to contribute responsibly to their communities.',
                ],
            ],
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact');
    }
}
