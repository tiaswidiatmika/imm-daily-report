<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ReportInput extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $sectionName;
    public $sectionInfo;

    public function __construct($sectionName, $sectionInfo)
    {
        $this->sectionName = $sectionName;
        $this->sectionInfo = $sectionInfo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.report-input');
    }
}
