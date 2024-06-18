<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class RouteLanding extends BaseWidget
{
    protected function getStats(): array
    {
        $user = Auth::user(); // Mendapatkan pengguna yang sedang login
        $stats = [];

        // Stat ini selalu ditampilkan
        $stats[] = Stat::make('Cari Destinasi', 'Klik di sini!')
            ->url(route('landing.page'))
            ->icon('heroicon-o-magnifying-glass');

        // Stat ini hanya ditampilkan jika user_testimoninya bukan 1
        if ($user->status_testimoni !== 1) {
            $stats[] = Stat::make('Berikan Pengalaman Anda', 'Klik di sini!')
                ->url(route('landing.create'))
                ->icon('heroicon-o-chat-bubble-bottom-center-text');
        }

        return $stats;
    }
}

