<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Title;
use Livewire\Component;

class ShowBlog extends Component
{
    public $limit = 10;
    #[Title('Blogs')]
    public function render()
    {
        $articles = Article::take($this->limit)->get();
        $totArticle = Article::count();
        return view('livewire.show-blog', [
            'articles' => $articles,
            'total' => $totArticle
        ]);
    }

    public function loadMore()
    {
        $this->limit += 10;
    }
}
