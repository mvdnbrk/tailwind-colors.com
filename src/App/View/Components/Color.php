<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Color extends Component
{
    public string $color;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function render(): View
    {
        return view('components.color');
    }

    public function bgClass(): string
    {
        return collect($this->bgColorMap())->get($this->color, '');
    }

    public function textClass(): string
    {
        return collect($this->textColorMap())->get($this->color, '');
    }

    private function bgColorMap(): array
    {
        return [
            'amber' => 'bg-amber-500',
            'black' => 'bg-black',
            'blue' => 'bg-blue-500',
            'blueGray' => 'bg-blueGray-500',
            'coolGray' => 'bg-coolGray-500',
            'cyan' => 'bg-cyan-500',
            'emerald' => 'bg-emerald-500',
            'fuchsia' => 'bg-fuchsia-500',
            'gray' => 'bg-gray-500',
            'green' => 'bg-green-500',
            'indigo' => 'bg-indigo-500',
            'lightBlue' => 'bg-lightBlue-500',
            'lime' => 'bg-lime-500',
            'orange' => 'bg-orange-500',
            'pink' => 'bg-pink-500',
            'purple' => 'bg-purple-500',
            'red' => 'bg-red-500',
            'rose' => 'bg-rose-500',
            'teal' => 'bg-teal-500',
            'trueGray' => 'bg-trueGray-500',
            'violet' => 'bg-violet-500',
            'warmGray' => 'bg-warmGray-500',
            'white' => 'bg-white',
            'yellow' => 'bg-yellow-500',
        ];
    }

    private function textColorMap(): array
    {
        return [
            'amber' => 'text-amber-900',
            'black' => 'text-white',
            'blue' => 'text-blue-900',
            'blueGray' => 'text-blueGray-900',
            'coolGray' => 'text-coolGray-900',
            'cyan' => 'text-cyan-900',
            'emerald' => 'text-emerald-900',
            'fuchsia' => 'text-fuchsia-900',
            'gray' => 'text-gray-900',
            'green' => 'text-green-900',
            'indigo' => 'text-indigo-900',
            'lightBlue' => 'text-lightBlue-900',
            'lime' => 'text-lime-900',
            'orange' => 'text-orange-900',
            'pink' => 'text-pink-900',
            'purple' => 'text-purple-900',
            'red' => 'text-red-900',
            'rose' => 'text-rose-900',
            'teal' => 'text-teal-900',
            'trueGray' => 'text-trueGray-900',
            'violet' => 'text-violet-900',
            'warmGray' => 'text-warmGray-900',
            'white' => 'text-black',
            'yellow' => 'text-yellow-900',
        ];
    }
}
