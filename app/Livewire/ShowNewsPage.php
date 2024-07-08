<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\News;

class ShowNewsPage extends Component
{
    public function render()
    {
        //news model content get here
        $news = News::orderBy('id', 'desc')->get();
        return view('livewire.show-news-page', [
            'news' => $news
        ]);
    }
}
