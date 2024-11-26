<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public $isSidebarOpen = false;
    public $darkMode = false;

    public function toggleSidebar()
    {
        $this->isSidebarOpen = !$this->isSidebarOpen;
    }

    public function toggleDarkMode()
    {
        $this->darkMode = !$this->darkMode;
    }

    public function render()
    {
        return view('livewire.navigation');
    }
}
