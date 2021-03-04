<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ReportContent extends Component
{
    public $post;

    public function mount() 
    {
        $this->post = Post::find(1);
    }

    public function render()
    {
        return view('livewire.report-content');
    }
}
