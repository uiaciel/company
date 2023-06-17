<?php

namespace App\Providers;

use App\Models\Announs;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Menulink;
use App\Models\Post;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Goutte\Client;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        view()->composer(
            '*',
            function ($view) {

                $client = new Client();
                // $url = 'https://www.google.com/finance/quote/SGER:IDX';
                // $url = 'https://www.idxchannel.com/stocks?index=SGER&indexdetail=stockexchang3';
                $url = 'https://www.idnfinancials.com/id/sger/pt-sumber-global-energy-tbk';
                $page = $client->request('GET', $url);

                $response = $client->getResponse();


                if ($response->getStatusCode() == 200) {
                    //google
                    // $data = $page->filter('.YMlKec.fxKbKc')->text();
                    $cal = $page->filter('span.c')->text();
                    // $cal = $page->filter('.text-body--3.text-red')->text();
                    $tanda = substr($cal, 0, 1);
                    $data = $page->filter('span.p')->text();
                    $up = $page->filter('span.v')->text();
                }

                $modal = Announs::where('status', 'Publish')->orderBy('created_at', 'desc')->first();

                $view->with([
                    'category' => Category::all(),
                    'berita' => Post::where('status', 'publish')->orderBy('created_at', 'DESC')->get(),
                    // 'menus' => Menu::all(),
                    // 'pages' => Page::all(),
                    // 'announs' => Announs::where('status', 'Publish')->limit(3)->get(),
                    // 'laporans' => Report::Orderby('date_gmt', 'desc')->where('status', 'Publish')->limit(4)->get(),
                    // 'publicoffering' => Report::Orderby('date_gmt', 'desc')->where('status', 'Publish')->where('category', 'Public Offering Prospectus')->limit(12)->get(),
                    // 'pagepublish' => $pagepublish,
                    // 'docs' => Doc::all(),

                    // 'data' => $data,
                    // 'cal' => $cal,
                    // 'tanda' => $tanda,
                    // 'up' => $up,
                    // 'modal' => $modal,
                    // 'postpublish' => $postpublish

                    'abouts' => Menulink::where('menu_id', 1)->get(),

                    'data' => $data,
                    'cal' => $cal,
                    'tanda' => $tanda,
                    'up' => $up,
                    'modal' => $modal,
                ]);
            }
        );
    }
}
