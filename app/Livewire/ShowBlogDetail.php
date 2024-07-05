<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Title;

class ShowBlogDetail extends Component
{
    public $slug = '';

    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $article = Article::where('slug', '=', $this->slug)->first();
        return view('livewire.show-blog-detail', [
            'article' => $article
        ])->title($article->title);
    }
}
